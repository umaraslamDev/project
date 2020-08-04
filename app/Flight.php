<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class flight extends Model
{
    protected $table = 'flights';
	public $incrementing = false;
    protected $fillable = ['name','class','from','where','stops','stop_location','departure_date','arrival_date','price','picture','address','email','number','detail'];
}
