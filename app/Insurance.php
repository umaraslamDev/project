<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $table = 'insurances';
	public $incrementing = false;
    protected $fillable = ['company_name','price','trip_cancelatiom_price','trip_intuption_price','medical_evacuation_price','flight_accident_price','accidental_death_price','picture','country','email','number','detail'];
}
