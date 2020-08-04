<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenericPackage extends Model
{
    
    protected $table = 'generic_packages';
	public $incrementing = false;
    protected $fillable = ['hotel_name','flight_name','insurance','rental','from','sdays','class','room_type','edays','price','picture','where','address','email','number','detail'];
}
