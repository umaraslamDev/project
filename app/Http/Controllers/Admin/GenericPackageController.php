<?php

namespace App\Http\Controllers\Admin;

use App\GenericPackage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Image;

class GenericPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genericpackages = GenericPackage::all();

            return view('admin.generic_packages.index', compact('genericpackages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.generic_packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $genericpackage =new GenericPackage();
        $genericpackage->flight_name=$request->flight_name;
        $genericpackage->hotel_name=$request->hotel_name;
        $genericpackage->rental=$request->rental;
        $genericpackage->insurance=$request->insurance;
        $genericpackage->sdays=$request->sdays;
        $genericpackage->edays=$request->edays;
        $genericpackage->price=$request->price;
        $genericpackage->picture=$request->picture;
        $genericpackage->class=$request->class;
        $genericpackage->room_type=$request->room_type;
        $genericpackage->number=$request->number;
        $genericpackage->email=$request->email;
        $genericpackage->from=$request->from;
        $genericpackage->where=$request->where;
        $genericpackage->address=$request->address;
        $genericpackage->detail=$request->detail;
        $picture = $this->uploadMed($request->picture); 
        $genericpackage->picture =$picture; 
        $genericpackage->save();
        return redirect()->route('admin.genericpackage.index');
    }
    private function uploadMed($filename)
    {
          $images=array();
      foreach($filename as $file)
      {
      $temp = $file->getClientOriginalName();
      $name=$this->renameFile($temp);
      $listOfFiles = $name;
      $destinationPath = public_path('image\admin\generic');
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
     * @param  \App\Generic_package  $generic_package
     * @return \Illuminate\Http\Response
     */
    public function show(GenericPackage $genericpackage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Generic_package  $generic_package
     * @return \Illuminate\Http\Response
     */
    public function edit(GenericPackage $genericpackage)
    {
        return view('admin.generic_packages.edit', compact('genericpackage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Generic_package  $generic_package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GenericPackage $genericpackage)
    {
        
        $genericpackage->flight_name=$request->flight_name;
        $genericpackage->hotel_name=$request->hotel_name;
        $genericpackage->rental=$request->rental;
        $genericpackage->insurance=$request->insurance;
        $genericpackage->sdays=$request->sdays;
        $genericpackage->edays=$request->edays;
        $genericpackage->price=$request->price;
        $genericpackage->picture=$request->picture;
        $genericpackage->class=$request->class;
        $genericpackage->room_type=$request->room_type;
        $genericpackage->number=$request->number;
        $genericpackage->email=$request->email;
        $genericpackage->from=$request->from;
        $genericpackage->where=$request->where;
        $genericpackage->address=$request->address;
        $genericpackage->detail=$request->detail;
        $picture = $this->uploadMed($request->picture); 
        $genericpackage->picture =$picture; 
        $genericpackage->save();
        return redirect()->route('admin.genericpackage.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Generic_package  $generic_package
     * @return \Illuminate\Http\Response
     */
    public function destroy(GenericPackage $genericpackage)
    {
        $genericpackage->delete();
        return redirect()->route('admin.genericpackage.index');
    }
}
