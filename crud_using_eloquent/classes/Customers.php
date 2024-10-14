<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Pagination\Paginator;

class Customers extends Eloquent{
    
    use SoftDeletes;
 
    protected $table = "customers";
    
    protected $fillable = [
        'name', 'email', 'phone','address'
    ];
    
    protected $hidden = [
        'created', 'updated'
    ];
}