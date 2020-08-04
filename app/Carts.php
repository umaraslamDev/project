<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
	protected $table = 'carts';
	public $incrementing = false;
    protected $fillable = ['id','userid','accomoid','fliid','insuid','rentid','geneid'];
}
