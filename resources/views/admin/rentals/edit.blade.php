@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">Edit Rentals</div>


                <div class="card-body">
                    <form   action="{{ route('admin.rentals.update',$rental->id)}}" method="post" enctype="multipart/form-data" >
                        {{method_field('PUT')}}
                    @csrf
        <table>
            <tr>
                <td>
                    Company Name:
                </td>
                <td>
                    <input type="text" name="company_name" value="{{$rental->company_name}}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Vehicle Name:
                </td>
                <td>
                    <input type="text" name="name" value="{{$rental->name}}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Type:
                </td>
                <td>
                    <input type="text" name="type" value="{{$rental->type}}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Seats:
                </td>
                <td>
                    <input type="Number" name="seats" value="{{$rental->seats}}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Country:
                </td>
                <td>
                    <input type="text" name="country"  value="{{$rental->country}}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                  Pick up Address:
                </td>
                <td>
                    <input type="text" name="pick_up_address" value="{{$rental->pick_up_address}}" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                  Availability:
                </td>
                <td>
                    <input type="text" name="availability" value="{{$rental->availability}}" class="form-control">
                </td>
            </tr>
           
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <input type="text" name="email" value="{{$rental->email}}" class="form-control">
                </td>
            </tr>
            <tr>
             <td>
                    Phone:
                </td>
                <td>
                    <input type="tel" name="number" value="{{$rental->Phone}}" class="form-control">
                </td>
            </tr>
            <tr>
            <td>
                    Price:
                </td>
                <td>
                    <input type="text" name="price" value="{{$rental->price}}" class="form-control">
                </td>
            </tr>
            
            <tr>
                <td>
                    Picture:
                </td>
                <td>
                    <img src="/image/admin/rentals/{{$rental->picture}}" height="200" width="300">
                    <input type="file" name="picture[]" value="" class="form-control" placeholder="address" multiple>
                </td>
            </tr>
            <tr>
                <td>
                    Details:
                </td>
                <td>
                    <textarea cols="80" rows="10" name="detail" value="{{$rental->detail}}" class="form-control"></textarea>
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
