@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-header">Rentals</div>
                <a href="{{ route('admin.rentals.create')}}" class="btn btn-primary ">Add Rentals</a>
                <br>


                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Picture</th>
                            <th>Availability</th>
                            <th>Company Name</th>
                            <th>Type</th>
                            <th>Vehicle Name</th>
                            <th>Seats</th>
                            <th>Country</th>
                            <th>Pick-Up Address</th>
                            <th>Email</th>
                            <th>Phone no#</th>
                            <th>Details</th>
                            <th>Price</th>

                        </tr>
                        @forelse( $rentals as $rental )
                        <tr>
                            <td>
                                <img src="/image/admin/rentals/{{ $rental->picture }}" height="100" width="100">
                            </td>
                            <td>
                                {{ $rental->availability }}
                            </td>

                            <td>
                                {{ $rental->company_name }}
                            </td>
                            <td>
                                {{ $rental->type }}
                            </td>
                            <td>
                                {{ $rental->name }}
                            </td>
                            <td>
                                {{ $rental->seats }}
                            </td>
                            <td>
                                {{ $rental->country }}
                            </td>
                            <td>
                                {{ $rental->pick_up_address }}
                            </td>
                             <td>
                                {{ $rental->email }}
                            </td>
                             <td>
                                {{ $rental->number }}
                            </td>
                            <td>
                                {{ $rental->detail }}
                            </td>
                            
                            <td>
                                {{ $rental->price }}
                            </td>
                            <td><a href="{{ route('admin.rentals.edit' ,$rental->id) }}" class="btn btn-info">Edit</a></td>
                            <td>
                            <form   action="{{ route('admin.rentals.destroy',$rental->id)}}" method="post"  >
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
