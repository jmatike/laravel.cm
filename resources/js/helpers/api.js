/**
 * @param {RequestInfo} url
 * @param params
 * @return {Promise<Object>}
 */
export async function jsonFetch (url, params = {}) {
  // Si on reçoit un FormData, on le convertit en objet
  if (params.body instanceof FormData) {
    params.body = Object.fromEntries(params.body)
  }
  // Si on reçoit un objet, on le convertit en chaine JSON
  if (params.body && typeof params.body === 'object') {
    params.body = JSON.stringify(params.body)
  }
  params = {
    headers: {
      'Content-Type': 'application/json',
      Accept: 'application/json',
      'X-Requested-With': 'XMLHttpRequest'
    },
    ...params
  }

  const response = await fetch(url, params)
  if (response.status === 204) {
    return null
  }
  const data = await response.json()
  if (response.ok) {
    return data
  }
  throw new ApiError(data, response.status)
}

/**
 * @param {RequestInfo} url
 * @param params
 * @return {Promise<Object>}
 */
export async function jsonFetchOrFlash (url, params = {}) {
  try {
    return await jsonFetch(url, params)
  } catch (e) {
    if (e instanceof ApiError) {
      console.log(e)
    } else {
      console.log('error')
    }
    return null
  }
}

/**
 * Capture un retour d'API
 *
 * @param {function} p
 */
export async function catchViolations (p) {
  try {
    return [await p, null]
  } catch (e) {
    if (e instanceof ApiError) {
      return [null, e.violations]
    }
    throw e
  }
}

/**
 * Représente une erreur d'API
 * @property {{
 *  violations: {propertyPath: string, message: string}
 * }} data
 */
export class ApiError {
  constructor (data, status) {
    this.data = data
    this.status = status
  }

  // Récupère la liste de violation pour un champ donnée
  violationsFor (field) {
    return this.data.violations.filter(v => v.propertyPath === field).map(v => v.message)
  }

  get name () {
    return `${this.data.title} ${this.data.detail || ''}`
  }

  // Renvoie les violations indexées par propertyPath
  get violations () {
    if (!this.data.violations) {
      return {
        main: `${this.data.title} ${this.data.detail || ''}`
      }
    }
    return this.data.violations.reduce((acc, violation) => {
      if (acc[violation.propertyPath]) {
        acc[violation.propertyPath].push(violation.message)
      } else {
        acc[violation.propertyPath] = [violation.message]
      }
      return acc
    }, {})
  }
}
