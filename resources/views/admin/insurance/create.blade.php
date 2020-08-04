@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">Add insurance</div>


                <div class="card-body">
                    <form  action="{{ route('admin.insurance.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf
        <table>
            <tr>
                <td>
                   Company Name:
                </td>
                <td>
                    <input type="text" name="company_name" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Trip Cancelatiom Price:
                </td>
                <td>
                    <input type="text" name="trip_cancelatiom_price" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Trip Intuption Price:
                </td>
                <td>
                    <input type="text" name="trip_intuption_price" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Medical Evacuation Price:
                </td>
                <td>
                    <input type="text" name="medical_evacuation_price" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Flight Accident Price:
                </td>
                <td>
                    <input type="text" name="flight_accident_price" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Accidental Death Price:
                </td>
                <td>
                    <input type="text" name="accidental_death_price" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Country:
                </td>
                <td>
                    <input type="text" name="country" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <input type="text" name="email" class="form-control">
                </td>
            </tr>
            <tr>
             <td>
                    Phone:
                </td>
                <td>
                    <input type="tel" name="number" class="form-control">
                </td>
            </tr>
            <tr>
            <td>
                    Price:
                </td>
                <td>
                    <input type="text" name="price" class="form-control">
                </td>
            </tr>
            
            <tr>
                <td>
                    Picture:
                </td>
                <td>
                    <input type="file" name="picture" value="" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Details:
                </td>
                <td>
                    <textarea cols="80" rows="10" name="detail" class="form-control"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <button  class="btn btn-default" value="save">Submit</button>
                </td>
            </tr>
        </table>
    </form>
                    
                    

  </div>
</div>
</div>
</div>
</div>
    
@endsection
