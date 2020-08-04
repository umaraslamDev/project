<?php

namespace App\Http\Controllers\Admin;

use App\Flight;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        $flights = Flight::all();

            return view('admin.flight.index', compact('flights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.flight.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $flight =new Flight();
        $flight->name=$request->name;
        $flight->price=$request->price;
        $flight->picture=$request->picture;
        $flight->class=$request->class;
        $flight->number=$request->number;
        $flight->email=$request->email;
        $flight->from=$request->from;
        $flight->stops=$request->stops;
        $flight->stop_location=$request->stop_location;
        $flight->where=$request->where;
        $flight->departure_date=$request->departure_date;
        $flight->arrival_date=$request->arrival_date;
        $flight->address=$request->address;
        $flight->detail=$request->detail;
        $picture = $this->uploadMed($request->picture); 
        $flight->picture =$picture; 
        $flight->save();
        return redirect()->route('admin.flight.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\flights  $flights
     * @return \Illuminate\Http\Response

     */

     private function uploadMed($filename)
    {
      
      $temp = $filename->getClientOriginalName();
      $name=$this->renameFile($temp);
      $listOfFiles = $name;
      $destinationPath = public_path('image\admin\flights');
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

    public function show(Flight $flight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\flights  $flights
     * @return \Illuminate\Http\Response
     */
    public function edit(Flight $flight)
    {
        return view('admin.flight.edit', compact('flight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\flights  $flights
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Flight $flight)
    {
        $flight->name=$request->name;
        $flight->price=$request->price;
        $flight->picture=$request->picture;
        $flight->class=$request->class;
        $flight->number=$request->number;
        $flight->email=$request->email;
        $flight->from=$request->from;
        $flight->stops=$request->stops;
        $flight->stop_location=$request->stop_location;
        $flight->where=$request->where;
        $flight->departure_date=$request->departure_date;
        $flight->arrival_date=$request->arrival_date;
        $flight->address=$request->address;
        $flight->detail=$request->detail;
        $picture = $this->uploadMed($request->picture); 
        $flight->picture =$picture; 
        $flight->save();
        return redirect()->route('admin.flight.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\flights  $flights
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flight $flight)
    {
        $flight->delete();
        return redirect()->route('admin.flight.index');
    }
}
