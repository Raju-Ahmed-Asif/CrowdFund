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
      
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

  </tbody>
</table>
@endsection
