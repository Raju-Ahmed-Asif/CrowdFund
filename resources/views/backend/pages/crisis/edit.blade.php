@extends('backend.master')
@section('content')
<form action="" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text"  name="name" value="{{$crisis->name}}" class="form-control" id="formGroupExampleInput" placeholder="Enter crisis name...">
  </div>
  <div class="form-group">
    <label for="">Description</label>
    <input type="text" name="description" value="{{$crisis->description}}" class="form-control" id="" placeholder="Enter description">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Image</label>
    <input type="file" name="image" value="{{$crisis->image}}" class="form-control" id="formGroupExampleInput2">
  </div>

  <div>
  <label for="donor"> Donor:</label>
  <select class="form-select" name="donor" value="{{$crisis->donor}}">
  <option value="" selected >Select Donor</option>

  <option value=""></option>

</select>
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">From_Date</label>
    <input type="date" name="from_date" value="{{$crisis->description}}" class="form-control" id="formGroupExampleInput2" placeholder=" Write please">
  </div>
   <div class="form-group">
    <label for="formGroupExampleInput2">To_Date</label>
    <input type="date" name="to_date" value="{{$crisis->description}}" class="form-control" id="formGroupExampleInput2" placeholder="Write Please">
  </div>
   <div class="form-group">
    <label for="">Amount_Need</label>
    <input type="number" name="amount_need" value="{{$crisis->amount_need}}" class="form-control" id="" placeholder=" ">
  </div>
   <div class="form-group">
    <label for="">Amount_Raised</label>
    <input type="number" name="amount_raised" value="{{$crisis->amount_raised}}" class="form-control" id="" placeholder=" ">
  </div>
  <div class="form-group">
    <label for="">About_crisis</label>
    <input type="text" name="about_crisis" value="{{$crisis->description}}" class="form-control" id="" placeholder=" ">
  </div>


            <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
