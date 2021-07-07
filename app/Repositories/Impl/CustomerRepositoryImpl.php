<?php
namespace App\Repositories\Impl;


use App\Models\Product;
use App\Repositories\CustomerRepository;
use App\Repositories\Eloquent\EloquentRepository;

class CustomerRepositoryImpl extends EloquentRepository  implements CustomerRepository
{
    /**
     * get Model
     * @return string
     */
    public function getModel()
    {
        $model = Product::class;
        return $model;
    }
}
