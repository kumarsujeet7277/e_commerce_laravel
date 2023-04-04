<?php

namespace App\GraphQL\Queries;
use App\Models\Product;

final class SomeComplexQuery
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // some Complex Query


        return Product::where('name', 'like', '%'.$args['search'].'%')->get();
    }
}

