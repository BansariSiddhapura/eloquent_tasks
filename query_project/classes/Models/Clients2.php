<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;


class Clients2 extends Eloquent{
    
    protected $table = "client";
    
    protected $fillable = [
        'id','name','email','password','city','gender','hobbies'
    ];
    public $timestamps=false;
}