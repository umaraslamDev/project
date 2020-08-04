@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-header">Flights</div>
                <a href="{{ route('admin.flight.create')}}" class="btn btn-primary ">Add Flights</a>
                <br>


                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>Picture</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>From</th>
                            <th>Where</th>
                            <th>Stops</th>
                            <th>Stop location</th>
                            <th>Departure date</th>
                            <th>Arrival date</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone no#</th>
                            <th>Details</th>
                            <th>Price</th>

                        </tr>
                        @forelse( $flights as $flight )
                        <tr>
                            <td>
                                {{ $flight->id }}
                            </td>
                            <td>
                                <img src="/image/admin/flights/{{ $flight->picture }}" height="100" width="100">
                            </td>
                            <td>
                                {{ $flight->name }}
                            </td>

                            <td>
                                {{ $flight->class }}
                            </td>

                            <td>
                                {{ $flight->from }}
                            </td>
                            <td>
                                {{ $flight->where }}
                            </td>
                            <td>
                                {{$flight->stops}}
                            </td>
                            <td>
                                {{$flight->stop_location}}
                            </td>
                           
                            <td>
                                {{ $flight->departure_date }}
                            </td>
                            <td>
                                {{ $flight->arrival_date }}
                            </td>
                            <td>
                                {{ $flight->address }}
                            </td>
                            <td>
                                {{ $flight->email }}
                            </td>
                            <td>
                                {{ $flight->number }}
                            </td>
                            <td>
                                {{ $flight->detail }}
                            </td>
                              <td>
                                {{ $flight->price }}
                            </td>
                            <td><a href="{{ route('admin.flight.edit' , $flight->id) }}" class="btn btn-info">Edit</a></td>
                            <td>
                            <form   action="{{ route('admin.flight.destroy',$flight->id)}}" method="post"  >
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
