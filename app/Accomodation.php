<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accomodation extends Model
{
	protected $table = 'accomodations';
	public $incrementing = false;
    protected $fillable = ['name','class','room_type','no_of_persons','price','picture','location','address','email','number','detail'];
}
