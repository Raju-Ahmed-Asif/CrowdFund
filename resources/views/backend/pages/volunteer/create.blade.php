@extends('backend.master')
@section('content')

<form action="{{route('store.volunteer')}}" method="POST">

  @csrf
  <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" required name="name" class="form-control" id="formGroupExampleInput" placeholder="Enter Volunteer name...">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Address</label>
    <input type="text" name="address" class="form-control" id="formGroupExampleInput2" placeholder="Enter Address please">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Email</label>
    <input type="email" required name="email" class="form-control" id="formGroupExampleInput2" placeholder="Enter Email please">
  </div>
 
   <div class="form-group">
    <label for="formGroupExampleInput2">Phone</label>
    <input type="number" required name="phone" class="form-control" id="formGroupExampleInput2" placeholder="Write Please">
  </div>
   
    
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




@endsection