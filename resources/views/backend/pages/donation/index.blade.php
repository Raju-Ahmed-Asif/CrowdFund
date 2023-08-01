@extends('backend.master')
@section('content')
<a href="{{route(('index.donation'))}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create Expense</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Donate Amount</th>
      <th scope="col">Transaction Id</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
 <tbody>
 
      </tbody>
</table>
@endsection