@extends('frontend.master')

@section('content')

<div class="our-cases-area section-padding30">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                <!-- Section Tittle -->
                <div class="section-tittle text-center mb-80">
                    <span>Our Crisis you can see</span>
                    <h2>Explore our latest Crisis that we work on</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($crisis as $item)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img">
                            <a href="{{ route('crisis.details', $item->id) }}"><img src="{{ asset('/public/uploads/'.$item->image) }}" alt=""></a>
                        </div>
                        <div class="cases-caption">
                            <h3><a href="#">{{ $item->name }}</a></h3>
                            <!-- Progress Bar -->
                            <div class="single-skill mb-15">
                                <div class="bar-progress">
                                    <div id="bar{{ $loop->index }}" class="barfiller" style="background: #f1f1f1;">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <strong>{{ intval($item->percentage) }} %</strong>
                                        <span class="fill" data-percentage="{{ $item->percentage }}" style="background: #0fb863;"></span>

                                    </div>
                                </div>
                            </div>
                            <!-- / progress -->
                            <div class="prices d-flex justify-content-between">
                                <p>Raised: <span> Tk.</span></p>
                                <p>Goal: <span>{{ $item->amount_need }} Tk.</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
