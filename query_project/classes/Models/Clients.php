<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;


class Clients extends Eloquent{
    
    protected $table = "ajax_client";
    
    protected $fillable = [
        'name','email','password','city','gender'
    ];
    public $timestamps=false;
}