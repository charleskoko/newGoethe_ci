<?php

namespace App\ModelFilters;

use App\LoanRequest;
use EloquentFilter\ModelFilter;

class LoanRequestFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];

    public function status(String $status)
    {
        if ($status === 'all')
        {
            return LoanRequest::all();
        }
        return $this->where('status', '=', $status);
    }

    public function start(string $start)
    {
        return $this->where('start', '>=', $start);
    }

    public function end(string $end)
    {
        return $this->where('end', '<=', $end);
    }

    public function name(string $firstName)
    {
        return $this->where('firstName', 'like', '%'.$firstName.'%');
    }
}
