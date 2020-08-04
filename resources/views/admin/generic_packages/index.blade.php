@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-header">generic package</div>
                <a href="{{ route('admin.genericpackage.create')}}" class="btn btn-primary ">Add generic package</a>
                <br>


                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Picture</th>
                            <th>Hotel Name</th>
                            <th>Flight Name</th>
                            <th>Car Rental Name</th>
                            <th>Insurance</th>
                            <th>From</th>
                            <th>Where</th>
                            <th>Class</th>
                            <th>Room type</th>
                            <th>Start date</th>
                            <th>End date</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone no#</th>
                            <th>Details</th>
                            <th>Price</th>

                        </tr>
                        @forelse( $genericpackages as $genericpackage )
                        <tr>
                            <td>
                                <img src="/image/admin/generic/{{ $genericpackage->picture }}" height="100" width="100">
                            </td>
                            <td>
                                {{ $genericpackage->hotel_name }}
                            </td>
                            <td>
                                {{ $genericpackage->flight_name }}
                            </td>
                            <td>
                                {{ $genericpackage->rental }}
                            </td>
                            <td>
                                {{ $genericpackage->insurance }}
                            </td>
                            <td>
                                {{ $genericpackage->from }}
                            </td>
                            <td>
                                {{ $genericpackage->where }}
                            </td>

                            <td>
                                {{ $genericpackage->class }}
                            </td>

                            <td>
                                {{ $genericpackage->room_type }}
                            </td>
                            
                            <td>
                                {{ $genericpackage->sdays }}
                            </td>
                            <td>
                                {{ $genericpackage->edays }}
                            </td>
                            <td>
                                {{ $genericpackage->address }}
                            </td>
                            <td>
                                {{ $genericpackage->email }}
                            </td>
                            <td>
                                {{ $genericpackage->number }}
                            </td>
                            <td>
                                {{ $genericpackage->detail }}
                            </td>
                            <td>
                                {{ $genericpackage->price }}
                            </td>
                            <td><a href="{{ route('admin.genericpackage.edit' ,$genericpackage->id) }}" class="btn btn-info">Edit</a></td>
                            <td>
                            <form action="{{ route('admin.genericpackage.destroy',$genericpackage->id)}}" method="post"  >
                                 @csrf
                           {{method_field('DELETE')}}
                           <input type="submit" value="DELETE"  class="btn btn-sm btn-danger">
                   
                </form>
            </td>
                            
                            
                        </tr>
                            @empty
                            <tr>
                                <td>empty</td>
                            </tr>
                            @endforelse

                    </table>
                    

  </div>
</div>
</div>
</div>
</div>

    
@endsection
