@extends('backend.master')
@section('content')
<form action="{{route('store.crisis')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" required name="name" class="form-control" id="formGroupExampleInput" placeholder="Enter crisis name...">
  </div>
  <div class="form-group">
    <label for="">Description</label>
    <input type="text" name="description" class="form-control" id="" placeholder="Enter description">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Image</label>
    <input type="file" name="image" class="form-control" id="formGroupExampleInput2">
  </div>



  <div class="form-group">
    <label for="formGroupExampleInput2">From Date</label>
    <input type="date" name="from_date" class="form-control" id="formGroupExampleInput2" placeholder=" Write please">
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">To Date</label>
    <input type="date" name="to_date" class="form-control" id="formGroupExampleInput2" placeholder="Write Please">
  </div>
   <div class="form-group">
    <label for="">Amount Need</label>
    <input type="number" name="amount_need" class="form-control" id="" placeholder=" ">
  </div>

   <div class="form-group">
    <label for="">Amount Raised</label>
    <input type="number" name="amount_raised" class="form-control" id="" placeholder=" ">
  </div>

  <div class="form-group">
    <label for="">Amount Due</label>
    <input type="number" name="amount_raised" class="form-control" id="" placeholder=" ">
  </div>


  <div class="form-group">
    <label for="">About_crisis</label>
    <input type="text" name="about_crisis" class="form-control" id="" placeholder=" ">
  </div>


            <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
