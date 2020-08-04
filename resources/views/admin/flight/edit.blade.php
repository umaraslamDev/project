
@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">Edit flight</div>


    <div class="card-body">
        <form   action="{{ route('admin.flight.update' ,  $flight->id)}}" method="post"  enctype="multipart/form-data">
                        {{method_field('PUT')}}
                    @csrf
            <table>
             <tr>
                <td>
                    Name:
                </td>
                <td>
                    <input type="text" name="name" value="{{$flight->name}}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Class:
                </td>
                <td>
                    <input type="text" name="class" value="{{$flight->class}}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    From:
                </td>
                <td>
                    <input type="text" name="from" value="{{$flight->from}}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Where:
                </td>
                <td>
                    <input type="text" name="where" value="{{$flight->where}}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Number of Stops:
                </td>
                <td>
                    <input type="text" name="stops" value="{{$flight->stops}}" class="form-control">
                </td>
            </tr>
             <tr>
                <td>
                    Stop location:
                </td>
                <td>
                    <input type="text" name="stop_location" value="{{$flight->stop_location}}" class="form-control">
                </td>
            </tr>
             
            <tr>
                <td>
                    Departure date:
                </td>
                <td>
                    <input type="datetime-local" name="departure_date" value="{{$flight->departure_date}}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Arrival date:
                </td>
                <td>
                    <input type="datetime-local" name="arrival_date" value="{{$flight->arrival_date}}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Address:
                </td>
                <td>
                    <input type="text" name="address" value="{{$flight->address}}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <input type="text" name="email" value="{{$flight->email}}" class="form-control">
                </td>
            </tr>
             <td>
                    Phone:
                </td>
                <td>
                    <input type="tel" name="number" value="{{$flight->number}}" class="form-control">
                </td>
            </tr>
            <td>
                    Price:
                </td>
                <td>
                    <input type="text" name="price" value="{{$flight->price}}" class="form-control">
                </td>
            </tr>
            
            <tr>
                <td>
                    Picture:
                </td>
                <td>
                    <img src="/image/admin/flights/{{$flight->picture}}" height="200" width="300">
                    <input type="file" name="picture" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Details:
                </td>
                <td>
                    <textarea cols="80" rows="10" name="detail" value="{{$flight->detail}}" class="form-control"></textarea>
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
