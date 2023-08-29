
@extends('frontend.master');

@section('content')
<br><br><br><section>
    <div class="container">
        <h1 class="text-center"><strong>Volunteer Info</strong></h1>
        <hr>
        <div class="row">
           @foreach ($volunteers as $value )
            <div class="col-md-4">
                <div class="card bg-success mb-5">
                    <div class="card-header">
                         <div class="card-body">
                            <p class="text-white"><span>Volunteer Name:</span> <strong>{{$value->name}}</strong> </p>
                            <p class="text-white"> <span>volunteer Email:</span></span> {{$value->email}} .</p>

                        </div>
                    </div>
                </div>
            </div>
             @endforeach
        </div>
    </div>
</section>

@endsection
