<?php

namespace App\Http\Controllers\Admin;

use App\Insurance;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Picture;


class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $insurances = Insurance::all();

            return view('admin.insurance.index', compact('insurances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.insurance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insurance =new insurance();
        $insurance->company_name=$request->company_name;
        $insurance->picture=$request->picture;
        $insurance->price=$request->price;
        $insurance->trip_cancelatiom_price=$request->trip_cancelatiom_price;
        $insurance->trip_intuption_price=$request->trip_intuption_price;
        $insurance->number=$request->number;
        $insurance->email=$request->email;
        $insurance->medical_evacuation_price=$request->medical_evacuation_price;
        $insurance->flight_accident_price=$request->flight_accident_price;
        $insurance->accidental_death_price=$request->accidental_death_price;
        $insurance->country=$request->country;
        $insurance->detail=$request->detail;
        $picture = $this->uploadMed($request->picture); 
        $insurance->picture =$picture; 
        $insurance->save();
        return redirect()->route('admin.insurance.index');
    }
     private function uploadMed($filename)
    {
       
      $temp = $filename->getClientOriginalName();
      $name=$this->renameFile($temp);
      $listOfFiles = $name;
      $destinationPath = public_path('image\admin\insurances');
      $filename->move($destinationPath, $name);
        return $listOfFiles;
    
    }

    public function renameFile($fileName)
    {
        $ext = substr(strtolower(strrchr($fileName, '.')), 1);
        $newFileName =$this->generateRandomCode($fileName) . '.' . $ext;
        return $newFileName;
    }
    public function generateRandomCode($fileName)
    {
        return $this->clean(str_shuffle($fileName) . date("Y-m-d-h-i-sa"));
    }

    public function clean($string)
    {
      $string = str_replace('-', '', $string); // Replaces all spaces with hyphens.

       return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function show(Insurance $insurance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function edit(Insurance $insurance)
    {
        return view('admin.insurance.edit', compact('insurance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Insurance $insurance)
    {
       
        $insurance->company_name=$request->company_name;
        $insurance->picture=$request->picture;
        $insurance->price=$request->price;
        $insurance->trip_cancelatiom_price=$request->trip_cancelatiom_price;
        $insurance->trip_intuption_price=$request->trip_intuption_price;
        $insurance->number=$request->number;
        $insurance->email=$request->email;
        $insurance->medical_evacuation_price=$request->medical_evacuation_price;
        $insurance->flight_accident_price=$request->flight_accident_price;
        $insurance->accidental_death_price=$request->accidental_death_price;
        $insurance->country=$request->country;
        $insurance->detail=$request->detail;
        $picture = $this->uploadMed($request->picture); 
        $insurance->picture =$picture; 
        $insurance->save();
        return redirect()->route('admin.insurance.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\insurance  $insurance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Insurance $insurance)
    {
         $insurance->delete();
        return redirect()->route('admin.insurance.index');
    }
}
