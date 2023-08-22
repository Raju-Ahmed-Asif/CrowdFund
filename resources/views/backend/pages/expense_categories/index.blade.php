@extends('backend.master')
@section('content')
<a href="{{route('create.expense_categories')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create Expense Category</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($expense as $key=> $item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->description}}</td>

      <td>
      <a class="btn btn-primary"href="">Edit</a>
      <a class="btn btn-danger"href="" >Delete </a>
      <a class="btn btn-danger"href="" >Update</a>
      </td>

    </tr>

    @endforeach

  </tbody>
</table>

@endsection
