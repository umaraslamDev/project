<?php

namespace App\Http\Controllers\Admin;

use App\Accomodation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;

use Image;

class AccomodationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    private $upload = 'image/logo';
    public function index()
    {
        $accomodations = Accomodation::all();

            return view('admin.accomodation.index', compact('accomodations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        return view('admin.accomodation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $accomodation =new Accomodation();
     
        $accomodation->name=$request->name;
        $accomodation->price=$request->price;
        $accomodation->picture=$request->picture;
        $accomodation->class=$request->class;
        $accomodation->room_type=$request->room_type;
        $accomodation->number=$request->number;
        $accomodation->email=$request->email;
        $accomodation->no_of_persons=$request->no_of_persons;
        $accomodation->location=$request->location;
        $accomodation->address=$request->address;
        $accomodation->detail=$request->detail;
        $picture = $this->uploadMed($request->picture); 
        $accomodation->picture =$picture; 
        $accomodation->save();
        return redirect()->route('admin.accomodation.index');
    }

    

    private function uploadMed($filename)
    {
        $images=array();
      foreach($filename as $file)
      {
      $temp = $file->getClientOriginalName();
      $name=$this->renameFile($temp);
      $listOfFiles = $name;
      $destinationPath = public_path('image\admin\accomodation');
      $file->move($destinationPath, $name);
      $images[]=$name;
        return $listOfFiles;
    }

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
     * @param  \App\accomodation  $accomodation
     * @return \Illuminate\Http\Response
     */
    public function show(Accomodation $accomodation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\accomodation  $accomodation
     * @return \Illuminate\Http\Response
     */
    public function edit(Accomodation $accomodation)
    {
       return view('admin.accomodation.edit', compact('accomodation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\accomodation  $accomodation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accomodation $accomodation)
    {
       
        $accomodation->name=$request->name;
        $accomodation->price=$request->price;
        $accomodation->picture=$request->picture;
        $accomodation->class=$request->class;
        $accomodation->room_type=$request->room_type;
        $accomodation->number=$request->number;
        $accomodation->email=$request->email;
        $accomodation->no_of_persons=$request->no_of_persons;
        $accomodation->location=$request->location;
        $accomodation->address=$request->address;
        $accomodation->detail=$request->detail;
        $picture = $this->uploadMed($request->picture); 
        $accomodation->picture =$picture; 
        $accomodation->save();
        return redirect()->route('admin.accomodation.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\accomodation  $accomodation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accomodation $accomodation)
    {
        $accomodation->delete();
        return redirect()->route('admin.accomodation.index');
    }
}
