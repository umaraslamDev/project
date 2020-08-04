<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accomodation;
class ApiController extends Controller
{
    //

    public function show(Request $request){
		$accomodation = Accomodation::all();

		
		return response()->json($students[0]['name']);
	}
}
