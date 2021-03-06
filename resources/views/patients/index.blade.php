@extends('patients.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Patients</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('patients.create') }}"> Create New Patient</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <!-- <th>No</th> -->
            <th>Names</th>
            <th>Last names</th>
            <th>DNI</th>
            <th>Phone</th>
            <th>City</th>
            <th>Address</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($patients as $patient)
        <tr>
            <!-- <td>{{ ++$i }}</td> -->
            <td>{{ $patient->names }}</td>
            <td>{{ $patient->last_names }}</td>
            <td>{{ $patient->dni }}</td>
            <td>{{ $patient->phone }}</td>
            <td>{{ $patient->city_id }}</td>
            <td>{{ $patient->address }}</td>
            <td>
                <form action="{{ route('patients.destroy',$patient->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('patients.show',$patient->id) }}">Show</a>

 
    
                    <a class="btn btn-primary" href="{{ route('patients.edit',$patient->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $patients->links() !!}
      
@endsection