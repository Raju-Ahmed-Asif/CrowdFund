@extends('backend.master')
@section('content')
<a href="{{route('create.expense')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create Expense</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Crisis Name</th>
      <th scope="col">Amount</th>
      <th scope="col">Details</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
 <tbody>
  @foreach($expenses as $key=>$item)

    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->expenseCrisis->name}}</td>
      <td>{{$item->amount}}</td>
      <td>{{$item->details}}</td>

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
