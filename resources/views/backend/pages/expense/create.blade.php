@extends('backend.master')
@section('content')
<form action="{{route('store.expense')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="formGroupExampleInput">Amount</label>
    <input type="number" required name="amount" class="form-control" id="formGroupExampleInput" placeholder="Enter Amount...">
  </div>
  <div class="form-group">
    <label for="">Details</label>
    <input type="text" name="details" class="form-control" id="" placeholder="Enter details">
  </div>
 

  <button type="submit" class="btn btn-primary">Submit</button>
  

    
  
 </form>
 @endsection
