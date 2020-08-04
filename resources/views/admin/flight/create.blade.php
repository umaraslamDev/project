@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">Add Flights</div>


                <div class="card-body">
                    <form  action="{{ route('admin.flight.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf
        <table>
            <tr>
                <td>
                    Name:
                </td>
                <td>
                    <input type="text" name="name" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Class:
                </td>
                <td>
                    <input type="text" name="class" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    From:
                </td>
                <td>
                    <input type="text" name="from" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Where:
                </td>
                <td>
                    <input type="text" name="where" class="form-control">
                </td>
            </tr>
             <tr>
                <td>
                    Number of Stops:
                </td>
                <td>
                    <input type="text" name="stops" class="form-control">
                </td>
            </tr>
             <tr>
                <td>
                    Stop location:
                </td>
                <td>
                    <input type="text" name="stop_location" class="form-control">
                </td>
            </tr>
             
            <tr>
                <td>
                    Departure date:
                </td>
                <td>
                    <input type="datetime-local" name="departure_date" value="2019-06-12T19:30" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Arrival date:
                </td>
                <td>
                    <input type="datetime-local" name="arrival_date" value="2019-06-12T19:30" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Address:
                </td>
                <td>
                    <input type="text" name="address" class="form-control">
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
             <td>
                    Phone:
                </td>
                <td>
                    <input type="tel" name="number" class="form-control">
                </td>
            </tr>
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
