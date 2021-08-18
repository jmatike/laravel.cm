<nav x-data="{ open: false, flyoutMenu: false }" class="relative z-10 bg-skin-menu">
    <div class="max-w-7xl mx-auto px-2 sm:px-4">
        <div class="flex justify-between h-16">
            <div class="flex px-2 lg:px-0">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <img class="block lg h-8 w-auto sm:h-9" src="{{ asset('/images/laravelcm-icon.svg') }}" alt="Laravel.cm">
                    </a>
                </div>
                <div class="hidden lg:ml-10 lg:flex lg:items-center lg:space-x-6 font-sans">
                    <a href="#" class="text-skin-menu hover:text-skin-menu-hover inline-flex items-center px-1 text-sm font-medium {{ active(['forum', 'threads*', 'thread'], 'text-skin-primary hover:text-skin-primary-hover') }}">
                        {{ __('Forum') }}
                    </a>
                    <a href="{{ route('articles') }}" class="text-skin-menu hover:text-skin-menu-hover inline-flex items-center px-1 text-sm font-medium {{ active(['articles', 'articles*'], 'text-skin-primary hover:text-skin-primary-hover') }}">
                        {{ __('Articles') }}
                    </a>
                    <a href="#" class="text-skin-menu hover:text-skin-menu-hover inline-flex items-center px-1 text-sm font-medium {{ active(['tutorials', 'tutorials*'], 'text-skin-primary hover:text-skin-primary-hover') }}">
                        {{ __('Vidéos') }}
                    </a>
                    <a href="#" class="text-skin-menu hover:text-skin-menu-hover inline-flex items-center px-1 text-sm font-medium {{ active(['discussions', 'discussions*'], 'text-skin-primary hover:text-skin-primary-hover') }}">
                        {{ __('Discussions') }}
                    </a>
                    <div class="relative px-1 mt-1.5">
                        <button @click="flyoutMenu =! flyoutMenu" type="button" class="group rounded-md inline-flex items-center font-medium text-skin-menu hover:text-skin-menu-hover focus:outline-none focus:ring-0" :class="{ 'text-skin-menu-hover': flyoutMenu, 'text-skin-menu': !(flyoutMenu) }">
                            <x-heroicon-s-dots-horizontal class="h-5 w-5" />
                        </button>
                        <div x-show="flyoutMenu"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 translate-y-1"
                             x-transition:enter-end="opacity-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 translate-y-0"
                             x-transition:leave-end="opacity-0 translate-y-1"
                             class="absolute z-10 -ml-4 mt-3 transform w-screen max-w-md lg:max-w-3xl lg:ml-0 lg:left-1/2 lg:-translate-x-1/2"
                             x-ref="panel"
                             @click.outside="flyoutMenu = false"
                             style="display: none;"
                        >
                            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                                <div class="relative grid gap-6 bg-skin-card px-5 py-6 sm:gap-8 sm:p-8 lg:grid-cols-2">

                                    <a href="https://snippets.laravel.cm" class="-m-3 p-3 flex items-start rounded-lg hover:bg-skin-card-muted">
                                        <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-green-500 text-white sm:h-12 sm:w-12">
                                            <svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M20.228 5.202l-6.46-3.73a3.547 3.547 0 0 0-3.537 0l-6.46 3.73A3.555 3.555 0 0 0 2 8.273v7.454c0 1.263.679 2.44 1.772 3.07l6.46 3.73c1.09.63 2.446.63 3.537 0l6.46-3.73A3.555 3.555 0 0 0 22 15.728V8.273c0-1.263-.679-2.44-1.772-3.07zm.055 10.525c0 .65-.35 1.257-.912 1.582l-6.46 3.73a1.827 1.827 0 0 1-1.822 0l-6.46-3.73a1.831 1.831 0 0 1-.912-1.582V8.273c0-.65.35-1.257.912-1.582l6.46-3.73a1.827 1.827 0 0 1 1.822 0l6.46 3.73c.563.325.912.931.912 1.582v7.454z" />
                                                <path d="M11.184 11.344L7.996 8.643a.858.858 0 0 0-1.21.1.86.86 0 0 0 .101 1.212L9.301 12l-2.414 2.045a.86.86 0 0 0-.1 1.211.858.858 0 0 0 1.21.101l3.187-2.7a.86.86 0 0 0 0-1.313zm5.374 2.498h-3.862a.859.859 0 0 0 0 1.719h3.862a.859.859 0 0 0 0-1.72z" />
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-base font-sans font-medium text-skin-inverted">
                                                {{ __('Snippets') }}
                                            </p>
                                            <p class="mt-1 text-sm font-mono text-skin-base font-normal">
                                                {{ __('Créer et partagez des codes sources publiquement accéssible par tous.') }}
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-skin-card-muted">
                                        <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-green-500 text-white sm:h-12 sm:w-12">
                                            <x-heroicon-o-bookmark-alt class="h-6 w-6" />
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-base font-sans font-medium text-skin-inverted">
                                                {{ __('Guides') }}
                                            </p>
                                            <p class="mt-1 text-sm font-mono text-skin-base font-normal">
                                                {{ __('Découvrez le code de conduite pour l’utilisation du site.') }}
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-skin-card-muted">
                                        <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-green-500 text-white sm:h-12 sm:w-12">
                                            <svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M13.656 21.714a9.954 9.954 0 0 1-3.178.022c-.334-1.438-.975-5.224-.66-6.366.28-1.02 1.894-1.161 2.246-1.161.352 0 1.966.14 2.248 1.161.313 1.136-.32 4.89-.656 6.344zM12 13.39a2.148 2.148 0 1 0 0-4.295 2.148 2.148 0 0 0 0 4.295z" />
                                                <path d="M12 6.055A5.952 5.952 0 0 0 6.055 12a5.945 5.945 0 0 0 2.697 4.977c-.032-.575-.03-1.1.027-1.516A4.715 4.715 0 0 1 7.27 12 4.736 4.736 0 0 1 12 7.27 4.736 4.736 0 0 1 16.73 12a4.716 4.716 0 0 1-1.396 3.353c.069.409.078.943.048 1.533A5.94 5.94 0 0 0 17.945 12 5.952 5.952 0 0 0 12 6.055z" />
                                                <path d="M12 3c-4.963 0-9 4.037-9 9 0 3.993 2.614 7.387 6.221 8.561a42.41 42.41 0 0 1-.228-1.38C6.189 18.003 4.214 15.227 4.214 12c0-4.293 3.493-7.785 7.786-7.785 4.293 0 7.785 3.492 7.785 7.785 0 3.174-1.909 5.91-4.64 7.122-.071.492-.152.968-.229 1.393C18.452 19.3 21 15.942 21 12c0-4.963-4.038-9-9-9z" />
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-base font-sans font-medium text-skin-inverted">
                                                {{ __('Podcasts') }}
                                            </p>
                                            <p class="mt-1 text-sm font-mono text-skin-base font-normal">
                                                {{ __('Toutes les discussions sur le développement de Laravel et PHP.') }}
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-skin-card-muted">
                                        <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-green-500 text-white sm:h-12 sm:w-12">
                                            <x-heroicon-o-badge-check class="h-6 w-6" />
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-base font-sans font-medium text-skin-inverted">
                                                {{ __('Badges') }}
                                            </p>
                                            <p class="mt-1 text-sm font-mono text-skin-base font-normal">
                                                {{ __('Obtenez des badges et débloquez différentes fonctionnalités.') }}
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-skin-card-muted">
                                        <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-gradient-to-br from-flag-yellow to-flag-red text-white sm:h-12 sm:w-12">
                                            <svg class="h-6 w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M23 9.04c0-1.249-1.051-2.27-2.335-2.27-1.285 0-2.336 1.021-2.336 2.27 0 .703.35 1.36.888 1.77l-3.083 2.29-2.99-3.857c.724-.386 1.215-1.135 1.215-1.975C14.359 6.021 13.308 5 12.023 5 10.74 5 9.688 6.021 9.688 7.27c0 .839.467 1.588 1.191 1.974L7.633 13.1 4.76 10.832c.537-.408.91-1.066.91-1.793 0-1.248-1.05-2.269-2.335-2.269C2.051 6.77 1 7.791 1 9.04c0 1.111.817 2.042 1.915 2.223l1.121 5.696v2.36c0 .386.304.681.7.681h14.527c.397 0 .7-.295.7-.68v-2.36l1.122-5.697C22.183 11.082 23 10.151 23 9.04zm-2.335-.908c.513 0 .934.408.934.907 0 .5-.42.908-.934.908s-.935-.408-.935-.908c0-.499.42-.907.934-.907zM12 6.339c.514 0 .934.408.934.908 0 .499-.42.907-.934.907s-.934-.408-.934-.907c0-.5.42-.908.934-.908zm-4.18 8.396a.727.727 0 0 0 .467-.25l3.69-4.47 3.456 4.448c.117.136.28.25.467.272a.683.683 0 0 0 .514-.136l3.036-2.247-.77 3.858H5.32l-.747-3.79 2.733 2.156c.14.114.327.182.514.16zM2.4 9.04c0-.499.42-.907.934-.907s.935.408.935.907c0 .5-.42.908-.935.908-.513 0-.934-.408-.934-.908zm3.036 9.6v-1.067h13.126v1.066H5.437z" />
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-base font-sans font-medium text-yellow-500">
                                                {{ __('Devenez Premium') }}
                                            </p>
                                            <p class="mt-1 text-sm font-mono text-skin-base font-normal">
                                                {{ __('Devenez prémium et soutenez la production de contenu du site.') }}
                                            </p>
                                        </div>
                                    </a>

                                    <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-skin-card-muted">
                                        <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-green-500 text-white sm:h-12 sm:w-12">
                                            <x-heroicon-o-briefcase class="h-6 w-6" />
                                        </div>
                                        <div class="ml-4">
                                            <p class="text-base font-sans font-medium text-skin-inverted">
                                                {{ __('Jobs') }}
                                            </p>
                                            <p class="mt-1 text-sm font-mono text-skin-base font-normal">
                                                {{ __('Les offres pour développeurs Laravel dans la zone CEMAC.') }}
                                            </p>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 flex items-center justify-center px-2 lg:ml-6 lg:justify-end">
                @include('partials._search')
            </div>
            <div class="flex items-center lg:hidden">
                <!-- Mobile menu button -->
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-skin-muted hover:text-skin-base focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green-500" aria-controls="mobile-menu" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6 block" :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="h-6 w-6 hidden" :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:ml-6 lg:flex lg:items-center">
                @auth
                    <button class="flex-shrink-0 bg-skin-card p-1 text-skin-muted rounded-full hover:text-skin-base focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        <span class="sr-only">{{ __('Voir les notifications') }}</span>
                        <x-heroicon-o-bell  class="h-5 w-5"/>
                    </button>

                    <!-- Profile dropdown -->
                    <div @keydown.escape.stop="open = false;" @click.outside="open = false;" class="ml-4 relative flex-shrink-0">
                        <div>
                            <button type="button" class="bg-skin-menu rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" id="user-menu-button" x-ref="button" @click="open =! open"  aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="open.toString()">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                            </button>
                        </div>

                        <div x-show="open"
                             x-transition:enter="transition ease-out duration-100"
                             x-transition:enter-start="transform opacity-0 scale-95"
                             x-transition:enter-end="transform opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="transform opacity-100 scale-100"
                             x-transition:leave-end="transform opacity-0 scale-95"
                             class="origin-top-right absolute right-0 mt-2 w-60 rounded-md shadow-lg py-1 bg-skin-menu divide-y divide-skin-light ring-1 ring-black ring-opacity-5 focus:outline-none"
                             x-ref="menu-items"
                             role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                             tabindex="-1"
                             @keydown.tab="open = false"
                             @keydown.enter.prevent="open = false;"
                             @keyup.space.prevent="open = false;"
                             style="display: none;">
                            <div class="px-3.5 py-3" role="none">
                                <p class="text-xs text-skin-base font-normal" role="none">
                                    {{ __('Connecté en tant que') }}
                                </p>
                                <p class="text-sm font-medium text-skin-inverted truncate" role="none">
                                    {{ Auth::user()->email }}
                                </p>
                            </div>
                            <div class="py-1.5 px-3.5" role="none">
                                <a href="#" class="group flex items-center py-1.5 text-sm text-skin-base hover:text-skin-primary font-normal" role="menuitem" tabindex="-1" id="user-menu-item-0">
                                    <x-heroicon-o-view-grid class="flex-none h-5 w-5 mr-3 text-skin-muted group-hover:text-skin-primary" />
                                    {{ __('Dashboard') }}
                                </a>
                                <a href="#" class="group flex items-center py-1.5 text-sm text-skin-base hover:text-skin-primary font-normal" role="menuitem" tabindex="-1" id="user-menu-item-1">
                                    <x-heroicon-o-user-circle class="flex-none h-5 w-5 mr-3 text-skin-muted group-hover:text-skin-primary" />
                                    {{ __('Mon profil') }}
                                </a>
                                <a href="#" class="group flex items-center py-1.5 text-sm text-skin-base hover:text-skin-primary font-normal" role="menuitem" tabindex="-1" id="user-menu-item-2">
                                    <x-heroicon-o-cog class="flex-none h-5 w-5 mr-3 text-skin-muted group-hover:text-skin-primary" />
                                    {{ __('Paramètres') }}
                                </a>
                            </div>
                            <div class="py-1.5 px-3.5" role="none">
                                <form method="POST" action="{{ route('logout') }}" role="form">
                                    @csrf
                                    <button type="submit" class="group flex items-center text-skin-base hover:text-skin-primary font-normal w-full text-left py-1.5 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">
                                        <svg stroke="currentColor" fill="none" class="flex-none h-5 w-5 mr-3 text-skin-muted group-hover:text-skin-primary" viewBox="0 0 20 20">
                                            <path d="M10.25 3.75H9A6.25 6.25 0 002.75 10v0A6.25 6.25 0 009 16.25h1.25M10.75 10h6.5M14.75 12.25l2.5-2.25-2.5-2.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        {{ __('Se déconnecter') }}
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                @else
                    <div class="relative flex items-center space-x-6 font-sans">
                        <a href="{{ route('login') }}" class="text-skin-menu hover:text-skin-menu-hover inline-flex items-center text-sm font-medium">
                            {{ __('Se connecter') }}
                        </a>
                        <a href="{{ route('register') }}" class="text-flag-green inline-flex items-center text-sm font-medium">
                            {{ __('Créer un compte') }}
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </div>

    <div x-show="open" class="lg:hidden font-sans" id="mobile-menu" style="display: none;">
        <div class="pt-2 pb-3 space-y-1">
            <a href="#" class="border-transparent text-skin-menu hover:bg-skin-card-muted hover:border-skin hover:text-skin-menu-hover block pl-3 pr-4 py-2 border-l-4 text-base font-medium {{ active(['forum', 'threads*', 'thread'], 'bg-green-50 border-green-500 text-green-700') }}">{{ __('Forum') }}</a>
            <a href="#" class="border-transparent text-skin-menu hover:bg-skin-card-muted hover:border-skin hover:text-skin-menu-hover block pl-3 pr-4 py-2 border-l-4 text-base font-medium {{ active(['articles', 'articles*'], 'bg-green-50 border-green-500 text-green-700') }}">{{ __('Articles') }}</a>
            <a href="#" class="border-transparent text-skin-menu hover:bg-skin-card-muted hover:border-skin hover:text-skin-menu-hover block pl-3 pr-4 py-2 border-l-4 text-base font-medium {{ active(['tutorials', 'tutorials*'], 'bg-green-50 border-green-500 text-green-700') }}">{{ __('Vidéos') }}</a>
            <a href="#" class="border-transparent text-skin-menu hover:bg-skin-card-muted hover:border-skin hover:text-skin-menu-hover block pl-3 pr-4 py-2 border-l-4 text-base font-medium {{ active(['discussions', 'discussions*'], 'bg-green-50 border-green-500 text-green-700') }}">{{ __('Discussions') }}</a>
        </div>
        <div class="py-4 px-3 border-t border-skin-light">
            <h4 class="text-sm leading-5 font-medium uppercase tracking-wide text-skin-muted">{{ __('Autres') }}</h4>
            <div class="mt-5 space-y-6">
                <a href="https://snippets.laravel.cm" class="flex items-center text-skin-base">
                    <svg class="h-6 w-6 mr-3 -ml-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M20.228 5.202l-6.46-3.73a3.547 3.547 0 0 0-3.537 0l-6.46 3.73A3.555 3.555 0 0 0 2 8.273v7.454c0 1.263.679 2.44 1.772 3.07l6.46 3.73c1.09.63 2.446.63 3.537 0l6.46-3.73A3.555 3.555 0 0 0 22 15.728V8.273c0-1.263-.679-2.44-1.772-3.07zm.055 10.525c0 .65-.35 1.257-.912 1.582l-6.46 3.73a1.827 1.827 0 0 1-1.822 0l-6.46-3.73a1.831 1.831 0 0 1-.912-1.582V8.273c0-.65.35-1.257.912-1.582l6.46-3.73a1.827 1.827 0 0 1 1.822 0l6.46 3.73c.563.325.912.931.912 1.582v7.454z" />
                        <path d="M11.184 11.344L7.996 8.643a.858.858 0 0 0-1.21.1.86.86 0 0 0 .101 1.212L9.301 12l-2.414 2.045a.86.86 0 0 0-.1 1.211.858.858 0 0 0 1.21.101l3.187-2.7a.86.86 0 0 0 0-1.313zm5.374 2.498h-3.862a.859.859 0 0 0 0 1.719h3.862a.859.859 0 0 0 0-1.72z" />
                    </svg>
                    {{ __('Snippets') }}
                </a>

                <a href="#" class="flex items-center text-skin-base">
                    <x-heroicon-o-bookmark-alt class="h-6 w-6 mr-3 -ml-1" />
                    {{ __('Guides') }}
                </a>

                <a href="#" class="flex items-center text-skin-base">
                    <svg class="h-6 w-6 mr-3 -ml-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M13.656 21.714a9.954 9.954 0 0 1-3.178.022c-.334-1.438-.975-5.224-.66-6.366.28-1.02 1.894-1.161 2.246-1.161.352 0 1.966.14 2.248 1.161.313 1.136-.32 4.89-.656 6.344zM12 13.39a2.148 2.148 0 1 0 0-4.295 2.148 2.148 0 0 0 0 4.295z" />
                        <path d="M12 6.055A5.952 5.952 0 0 0 6.055 12a5.945 5.945 0 0 0 2.697 4.977c-.032-.575-.03-1.1.027-1.516A4.715 4.715 0 0 1 7.27 12 4.736 4.736 0 0 1 12 7.27 4.736 4.736 0 0 1 16.73 12a4.716 4.716 0 0 1-1.396 3.353c.069.409.078.943.048 1.533A5.94 5.94 0 0 0 17.945 12 5.952 5.952 0 0 0 12 6.055z" />
                        <path d="M12 3c-4.963 0-9 4.037-9 9 0 3.993 2.614 7.387 6.221 8.561a42.41 42.41 0 0 1-.228-1.38C6.189 18.003 4.214 15.227 4.214 12c0-4.293 3.493-7.785 7.786-7.785 4.293 0 7.785 3.492 7.785 7.785 0 3.174-1.909 5.91-4.64 7.122-.071.492-.152.968-.229 1.393C18.452 19.3 21 15.942 21 12c0-4.963-4.038-9-9-9z" />
                    </svg>
                    {{ __('Podcasts') }}
                </a>

                <a href="#" class="flex items-center text-skin-base">
                    <x-heroicon-o-badge-check class="h-6 w-6 mr-3 -ml-1" />
                    {{ __('Badges') }}
                </a>

                <a href="#" class="flex items-center text-yellow-500 hover:text-yellow-600">
                    <svg class="h-6 w-6 mr-3 -ml-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M23 9.04c0-1.249-1.051-2.27-2.335-2.27-1.285 0-2.336 1.021-2.336 2.27 0 .703.35 1.36.888 1.77l-3.083 2.29-2.99-3.857c.724-.386 1.215-1.135 1.215-1.975C14.359 6.021 13.308 5 12.023 5 10.74 5 9.688 6.021 9.688 7.27c0 .839.467 1.588 1.191 1.974L7.633 13.1 4.76 10.832c.537-.408.91-1.066.91-1.793 0-1.248-1.05-2.269-2.335-2.269C2.051 6.77 1 7.791 1 9.04c0 1.111.817 2.042 1.915 2.223l1.121 5.696v2.36c0 .386.304.681.7.681h14.527c.397 0 .7-.295.7-.68v-2.36l1.122-5.697C22.183 11.082 23 10.151 23 9.04zm-2.335-.908c.513 0 .934.408.934.907 0 .5-.42.908-.934.908s-.935-.408-.935-.908c0-.499.42-.907.934-.907zM12 6.339c.514 0 .934.408.934.908 0 .499-.42.907-.934.907s-.934-.408-.934-.907c0-.5.42-.908.934-.908zm-4.18 8.396a.727.727 0 0 0 .467-.25l3.69-4.47 3.456 4.448c.117.136.28.25.467.272a.683.683 0 0 0 .514-.136l3.036-2.247-.77 3.858H5.32l-.747-3.79 2.733 2.156c.14.114.327.182.514.16zM2.4 9.04c0-.499.42-.907.934-.907s.935.408.935.907c0 .5-.42.908-.935.908-.513 0-.934-.408-.934-.908zm3.036 9.6v-1.067h13.126v1.066H5.437z" />
                    </svg>
                    {{ __('Devenez Prémium') }}
                </a>

                <a href="#" class="flex items-center text-skin-base">
                    <x-heroicon-o-briefcase class="h-6 w-6 mr-3 -ml-1" />
                    {{ __('Jobs') }}
                </a>

            </div>
        </div>
        <div class="pt-4 pb-3 border-t border-skin-light">
            @auth
                <div class="flex items-center px-4">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixqx=8uCHNjpfsv&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium text-gray-800">Tom Cook</div>
                        <div class="text-sm font-medium text-gray-500">tom@example.com</div>
                    </div>
                    <button class="ml-auto flex-shrink-0 bg-skin-card p-1 text-skin-muted rounded-full hover:text-skin-base focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        <span class="sr-only">{{ __('Voir les notifications') }}</span>
                        <x-heroicon-o-bell  class="h-6 w-6"/>
                    </button>
                </div>
                <div class="mt-3 space-y-1">
                    <a href="#" class="block px-4 py-2 text-base font-medium text-skin-menu hover:text-skin-menu-hover">{{ __('Mon profil') }}</a>
                    <a href="#" class="block px-4 py-2 text-base font-medium text-skin-menu hover:text-skin-menu-hover">{{ __('Paramètres') }}</a>
                    <a href="#" class="block px-4 py-2 text-base font-medium text-skin-menu hover:text-skin-menu-hover">{{ __('Se déconnecter') }}</a>
                </div>
            @else
                <div class="space-y-1">
                    <a href="{{ route('login') }}" class="block px-4 py-2 text-base font-medium text-skin-menu hover:text-skin-menu-hover">{{ __('Se connecter') }}</a>
                    <a href="{{ route('register') }}" class="block px-4 py-2 text-base font-medium text-flag-green">{{ __('Créer un compte') }}</a>
                </div>
            @endauth
        </div>
    </div>
</nav>
