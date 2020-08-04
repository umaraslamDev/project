@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">Add accomodation</div>


                <div class="card-body">
                    <form  action="{{ route('admin.accomodation.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf
        <table>
            <tr>
                <td>
                    Flight id:
                </td>
                <td>
                    <input type="number" name="flight_id" class="form-control">
                </td>
            </tr>
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
                    Room type:
                </td>
                <td>
                    <input type="text" name="room_type" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Number of persons:
                </td>
                <td>
                    <input type="Number" name="no_of_persons" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Location:
                </td>
                <td>
                    <input type="text" name="location" class="form-control">
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
                    <input type="file" name="picture[]" value="" class="form-control" placeholder="address" multiple>
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
