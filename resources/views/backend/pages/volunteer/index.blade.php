@extends('backend.master')
@section('content')
<a href="{{route('create.volunteer')}}"button type="button" class="btn btn-primary">Create-Volunteer</button>  </a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($volunteer as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->phone}}</td>
    
      <td>
        <a class="btn btn-primary"  href="">View</a>
        <a class="btn btn-warning"  href="">Edit</a>
        <a  class="btn btn-danger" href="">Delete</a>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
{{$volunteer -> links()}}
@endsection