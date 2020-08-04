@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header">Edit generic package</div>


                <div class="card-body">
                    <form   action="{{ route('admin.genericpackage.update',$genericpackage->id)}}" method="post" enctype="multipart/form-data" >
                        {{method_field('PUT')}}
                    @csrf
        <table>
            
            <tr>
            <td>
                    From:
                </td>
                <td>
                    <input type="text" value="{{ $genericpackage->from }}" name="from"  class="form-control">
                </td>
            </tr>
            <tr>
            <td>
                    Where:
                </td>
                <td>
                    <input type="text" value="{{ $genericpackage->where }}" name="where" class="form-control">
                </td>
            </tr>
            <tr>
            <td>
                    Start Date:
                </td>
                <td>
                    <input type="date" value="{{ $genericpackage->sdays }}" name="sdays" class="form-control">
                </td>
            </tr>
            <tr>
            <td>
                    End Date:
                </td>
                <td>
                    <input type="date" value="{{ $genericpackage->edays }}" name="edays" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Flight Name:
                </td>
                <td>
                    <input type="text" value="{{ $genericpackage->flight_name }}" name="flight_name" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Hotel Name:
                </td>
                <td>
                    <input type="text" value="{{ $genericpackage->hotel_name }}" name="hotel_name" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Hotel Class:
                </td>
                <td>
                    <input type="text" value="{{ $genericpackage->class }}" name="class" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Room type:
                </td>
                <td>
                    <input type="text" value="{{ $genericpackage->room_type }}" name="room_type" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    car rental name:
                </td>
                <td>
                    <input type="text" value="{{ $genericpackage->rental }}" name="rental" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Insurance:
                </td>
                <td>
                    <input type="text" value="{{ $genericpackage->insurance }}" name="insurance" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Address:
                </td>
                <td>
                    <input type="text" value="{{ $genericpackage->address }}" name="address" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <input type="text" value="{{ $genericpackage->email }}" name="email" class="form-control">
                </td>
            </tr>
            <tr>
             <td>
                    Phone:
                </td>
                <td>
                    <input type="tel" value="{{ $genericpackage->number }}" name="number" class="form-control">
                </td>
            </tr>
            <tr>
            <td>
                    Price:
                </td>
                <td>
                    <input type="text" value="{{ $genericpackage->price }}" name="price" class="form-control">
                </td>
            </tr>
            
            <tr>
                <td>
                    Picture:
                </td>
                <td>
                    <img src="/image/admin/generic/{{$genericpackage->picture}}" height="200" width="300">
                    <input type="file" name="picture[]"value="" class="form-control" placeholder="address" multiple>
                </td>
            </tr>
            <tr>
                <td>
                    Details:
                </td>
                <td>
                    <textarea cols="80" rows="10" value="{{ $genericpackage->detail }}" name="detail" class="form-control"></textarea>
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
