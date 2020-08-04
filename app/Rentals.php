<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rentals extends Model
{
    protected $table = 'rentals';
	public $incrementing = false;
    protected $fillable = ['name','company_name','type','availability','country','price','picture','seats','pick_up_address','email','number','detail'];
}
