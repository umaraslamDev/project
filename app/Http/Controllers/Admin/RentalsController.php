<?php

namespace App\Http\Controllers\Admin;

use App\Rentals;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Image;

class RentalsController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $rentals = Rentals::all();

            return view('admin.rentals.index', compact('rentals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rentals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rental =new Rentals();
        $rental->name=$request->name;
        $rental->price=$request->price;
        $rental->picture=$request->picture;
        $rental->company_name=$request->company_name;
        $rental->seats=$request->seats;
        $rental->number=$request->number;
        $rental->email=$request->email;
        $rental->type=$request->type;
        $rental->availability=$request->availability;
        $rental->pick_up_address=$request->pick_up_address;
        $rental->country=$request->country;
        $rental->detail=$request->detail;
        $picture = $this->uploadMed($request->picture); 
        $rental->picture =$picture; 
        $rental->save();
        return redirect()->route('admin.rentals.index');
    }

     
    /**
     * Display the specified resource.
     *
     * @param  \App\rentals  $rentals
     * @return \Illuminate\Http\Response
     */
    public function show(Rentals $rentals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rentals  $rentals
     * @return \Illuminate\Http\Response
     */
     private function uploadMed($filename)
    {
       $images=array();
      foreach($filename as $file)
      {
      $temp = $file->getClientOriginalName();
      $name=$this->renameFile($temp);
      $listOfFiles = $name;
      $destinationPath = public_path('image\admin\rentals');
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
    public function edit(Rentals $rental)
    {
        return view('admin.rentals.edit', compact('rental'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rentals  $rentals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rentals $rental)
    {
        
        $rental->name=$request->name;
        $rental->price=$request->price;
        $rental->picture=$request->picture;
        $rental->company_name=$request->company_name;
        $rental->seats=$request->seats;
        $rental->number=$request->number;
        $rental->email=$request->email;
        $rental->type=$request->type;
        $rental->availability=$request->availability;
        $rental->pick_up_address=$request->pick_up_address;
        $rental->country=$request->country;
        $rental->detail=$request->detail;
        $picture = $this->uploadMed($request->picture); 
        $rental->picture =$picture; 
        $rental->save();
        return redirect()->route('admin.rentals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rentals  $rentals
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rentals $rental)
    {
         $rental->delete();
        return redirect()->route('admin.rentals.index');
    }
}
