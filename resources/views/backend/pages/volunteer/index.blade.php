@extends('backend.master')
@section('content')


<table class="table table-striped">
  <thead>


    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

    <tr>
        @foreach ($volunteers as $volunteer)
      <th scope="row">{{$volunteer->id}}</th>
      <td>{{$volunteer->name}}</td>
      <td>{{$volunteer->email}}</td>
      <td>{{$volunteer->phone}}</td>
      <td>{{$volunteer->address}}</td>


      <td>


        <a  class="btn btn-danger" href="{{route('volunteer.delete',$volunteer->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

@endsection
