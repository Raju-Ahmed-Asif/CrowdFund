@extends('backend.master')
@section('content')
<a href="{{route('create.crisis')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create Crisis</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">image</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">From_date</th>
      <th scope="col">To_date</th>
      <th scope="col">Amount_need</th>
      <th scope="col">Amount_raised</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($crisis as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td><img height="100px" width="100px" src="{{ asset('/public/uploads/'.$item->image) }}" alt=""></td>
      <td>{{$item->name}}</td>
      <td>{{$item->description}}</td>
      <td>{{$item->from_date}}</td>
      <td>{{$item->to_date}}</td>
      <td>{{$item->amount_need}}</td>
      <td>{{$item->amount_raised}} </td>

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
