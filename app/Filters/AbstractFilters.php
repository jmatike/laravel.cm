<?php

declare(strict_types=1);

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

abstract class AbstractFilters
{
    protected Builder $builder;

    /**
     * @var string[]
     */
    protected array $filters = [];

    public function __construct(public Request $request)
    {
    }

    public function filter(Builder $builder): Builder
    {
        foreach ($this->getFilters() as $filter => $value) {
            $this->resolverFilter($filter)->filter($builder, $value);
        }

        return $builder;
    }

    /**
     * Add Filters to current filter class.
     *
     * @param  string[]  $filters
     * @return $this
     */
    public function add(array $filters): self
    {
        $this->filters = array_merge($this->filters, $filters);

        return $this;
    }

    public function resolverFilter(string $filter): mixed
    {
        return new $this->filters[$filter]();
    }

    /**
     * Fetch all relevant filters from the request.
     *
     * @return string[]
     */
    public function getFilters(): array
    {
        return array_filter($this->request->only(array_keys($this->filters)));
    }
}
