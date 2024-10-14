<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Pagination\Paginator;

class Orders extends Eloquent{
    
    protected $table = "orders";
    
    protected $fillable = [
        'customer_id', 'order_date', 'amount','status'
    ];
    
}