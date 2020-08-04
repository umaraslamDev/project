@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">Edit accomodation</div>


                <div class="card-body">
                    <form   action="{{ route('admin.accomodation.update',$accomodation->id)}}" method="post" enctype="multipart/form-data"  >
                        {{method_field('PUT')}}
                    @csrf
        <table>
            <tr>
                <td>
                    Flight id:
                </td>
                <td>
                    <input type="number" name="flight_id" value="{{$accomodation->flight_id}}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Name:
                </td>
                <td>
                    <input type="text" name="name" value="{{$accomodation->name}}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Class:
                </td>
                <td>
                    <input type="text" name="class"  value="{{$accomodation->class}}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Room type:
                </td>
                <td>
                    <input type="text" name="room_type"  value="{{$accomodation->room_type}}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Number of persons:
                </td>
                <td>
                    <input type="Number" name="no_of_persons"  value="{{$accomodation->no_of_persons}}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Location:
                </td>
                <td>
                    <input type="text" name="location"  value="{{$accomodation->location}}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Address:
                </td>
                <td>
                    <input type="text" name="address"  value="{{$accomodation->address}}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <input type="text" name="email"  value="{{$accomodation->email}}" class="form-control">
                </td>
            </tr>
             <td>
                    Phone:
                </td>
                <td>
                    <input type="tel" name="number"  value="{{$accomodation->phone}}" class="form-control">
                </td>
            </tr>
            <td>
                    Price:
                </td>
                <td>
                    <input type="text" name="price"  value="{{$accomodation->price}}" class="form-control">
                </td>
            </tr>
            
            <tr>
                <td>
                    Picture:
                </td>
                <td>
                    <img src="/image/admin/accomodation/{{$accomodation->picture}}" height="200" width="300">
                    <input type="file" name="picture[]" value="" class="form-control" placeholder="address" multiple>
                </td>
            </tr>
            <tr>
                <td>
                    Details:
                </td>
                <td>
                    <textarea cols="80" rows="10" name="detail"  value="{{$accomodation->detail}}" class="form-control"></textarea>
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
