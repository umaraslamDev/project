@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-header">insurance</div>
                <a href="{{ route('admin.insurance.create')}}" class="btn btn-primary ">Add insurance</a>
                <br>


                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>picture</th>
                            <th>Company Name</th>
                            <th>Trip Cancelatiom Price</th>
                            <th>Trip Intuption Price</th>
                            <th>Medical Evacuation Price</th>
                            <th>Flight Accident Price</th>
                            <th>Accidental Death Price</th>
                            <th>country</th>
                            <th>Email</th>
                            <th>Number</th>
                            <th>Details</th>
                            <th>Price</th>
                        

                        </tr>
                        @forelse( $insurances as $insurance )
                        <tr>
                            <td>
                                <img src="/image/admin/insurances/{{ $insurance->picture }}" height="100" width="100">
                            </td>
                            <td>
                                {{ $insurance->company_name }}
                            </td>

                            <td>
                                {{ $insurance->trip_cancelatiom_price }}
                            </td>

                            <td>
                                {{ $insurance->trip_intuption_price }}
                            </td>
                            <td>
                                {{ $insurance->medical_evacuation_price }}
                            </td>
                            <td>
                                {{ $insurance->flight_accident_price }}
                            </td>
                            <td>
                                {{ $insurance->accidental_death_price }}
                            </td>
                            <td>
                                {{ $insurance->country }}
                            </td>
                            <td>
                                {{ $insurance->email }}
                            </td>
                            <td>
                                {{ $insurance->number }}
                            </td>
                            <td>
                                {{ $insurance->detail }}
                            </td>
                            
                            <td>
                                {{ $insurance->price }}
                            </td>
                            <td><a href="{{ route('admin.insurance.edit' ,$insurance->id) }}" class="btn btn-info">Edit</a></td>
                            <td>
                            <form   action="{{ route('admin.insurance.destroy',$insurance->id)}}" method="post"  >
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
