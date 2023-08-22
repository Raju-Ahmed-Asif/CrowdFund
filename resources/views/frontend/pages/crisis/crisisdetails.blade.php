@extends('frontend.master')

@section('content')


   <main>
      <!--? Hero Start -->
      <div class="slider-area2">
         <div class="slider-height2 d-flex align-items-center">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                           <div class="hero-cap hero-cap2 pt-20 text-center">
                              <h2>Blog Details</h2>
                           </div>
                     </div>
                  </div>
               </div>
         </div>
      </div>
      <!-- Hero End -->
      <!--? Blog Area Start -->
      <section class="blog_area single-post-area section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 posts-list">
                  <div class="single-post">
                    <div class="feature-img">
                        <img height="200px" width="250px" class="img-fluid" src="{{ asset('/public/uploads/'.$crisisDetails->image) }}" alt="">
                    </div>
                     <div class="blog_details">
                        <h2 style="color: #2d2d2d;">{{$crisisDetails->description }}
                        </h2><br>
                        <a href="{{ route('donate.form',['crisisId' => $crisisDetails->id]) }}" class="btn btn-success" style="color: aliceblue">DONATE NOW</a><br>

                        <p class="excert">{{$crisisDetails->about_crisis }}
                        </p>
                     </div>
                  </div>



      </section>
      <!-- Blog Area End -->
   </main>




@endsection
