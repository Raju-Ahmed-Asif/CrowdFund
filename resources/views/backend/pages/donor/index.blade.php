@extends('backend.master')
@section('content')
<a href="{{route('create.donor')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create Donor</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Date_of_Birth</th>
      <th scope="col">Gender</th>
      <th scope="col">Phone</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($donor as $key=>$item)
  
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->date_of_birth}}</td>
      <td>{{$item->gender}}</td>
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
       @endsection            
