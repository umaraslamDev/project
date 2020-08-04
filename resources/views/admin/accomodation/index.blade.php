@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-header">Accomodation</div>
                <a href="{{ route('admin.accomodation.create')}}" class="btn btn-primary ">Add Accomodation</a>
                <br>


                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Flight id</th>
                            <th>Picture</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Room type</th>
                            <th>No# persons</th>
                            <th>Location</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone no#</th>
                            <th>Details</th>
                            
                            <th>Price</th>

                        </tr>
                        @forelse( $accomodations as $accomodation )
                        <tr>
                            <td>
                                {{ $accomodation->flight_id }}
                            </td>
                            <td>
                                <img src="/image/admin/accomodation/{{ $accomodation->picture }}" height="100" width="100">
                            </td>
                            <td>
                                {{ $accomodation->name }}
                            </td>

                            <td>
                                {{ $accomodation->class }}
                            </td>

                            <td>
                                {{ $accomodation->room_type }}
                            </td>
                            <td>
                                {{ $accomodation->no_of_persons }}
                            </td>
                            <td>
                                {{ $accomodation->location }}
                            </td>
                            <td>
                                {{ $accomodation->address }}
                            </td>
                            <td>
                                {{ $accomodation->email }}
                            </td>
                            <td>
                                {{ $accomodation->number }}
                            </td>
                            <td>
                                {{ $accomodation->detail }}
                            </td>
                            <td>
                                {{ $accomodation->price }}
                            </td>
                            <td><a href="{{ route('admin.accomodation.edit' ,$accomodation->id) }}" class="btn btn-info">Edit</a></td>
                            <td>
                            <form   action="{{ route('admin.accomodation.destroy',$accomodation->id)}}" method="post"  >
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
