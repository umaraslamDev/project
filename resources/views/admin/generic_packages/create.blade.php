@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">Add Package</div>


                <div class="card-body">
                    <form  action="{{ route('admin.genericpackage.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf
        <table>
            
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
                    Start Date:
                </td>
                <td>
                    <input type="date" name="sdays" class="form-control">
                </td>
            </tr>
            <tr>
            <td>
                    End Date:
                </td>
                <td>
                    <input type="date" name="edays" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Flight Name:
                </td>
                <td>
                    <input type="text" name="flight_name" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Hotel Name:
                </td>
                <td>
                    <input type="text" name="hotel_name" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Hotel Class:
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
                    car rental name:
                </td>
                <td>
                    <input type="text" name="rental" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Insurance:
                </td>
                <td>
                    <input type="text" name="insurance" class="form-control">
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
