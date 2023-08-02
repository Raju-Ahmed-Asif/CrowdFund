@extends('frontend.master')

@section('content')

<div class="our-cases-area section-padding30">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                <!-- Section Tittle -->
                <div class="section-tittle text-center mb-80">
                    <span>Our Cases you can see</span>
                    <h2>Explore our latest causes that we works </h2>
                </div>
            </div>
        </div>
        <div class="row">


            @foreach ($crisis as $item)

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-cases mb-40">
                    <div class="cases-img">
                        <img src="{{ asset('frontend/assets/img/gallery/case1.png') }}" alt="">
                    </div>
                    <div class="cases-caption">
                        <h3><a href="#">Ensure Education For Every Poor Children</a></h3>
                        <!-- Progress Bar -->
                        <div class="single-skill mb-15">
                            <div class="bar-progress">
                                <div id="bar1" class="barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                    <span class="fill" data-percentage="70"></span>
                                </div>
                            </div>
                        </div>
                        <!-- / progress -->
                        <div class="prices d-flex justify-content-between">
                            <p>Raised:<span>{{$item->amount_raised  }} Tk. </span></p>
                            <p>Goal:<span> {{$item->amount_need  }} Tk.</span></p>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach





        </div>
    </div>
</div>
@endsection
