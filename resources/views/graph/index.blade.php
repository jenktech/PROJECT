@extends('layouts.main')
@section('title','Blog')
  

@section('styles')

@endsection
@section('content')
<div class="container py-3">
    <div class="title h1 text-center">Blood Bank News and Publication</div>
    <!-- Card Start -->
    <div class="card">
      <div class="row ">
  
        <div class="col-md-7 px-3">
          <div class="card-block px-6">
            <h4 class="card-title"> WHY BLOOD BANK</h4>
            <p class="card-text">
                To excel and become The best organization in nothern zone regions as driving force to make that blood is always available to those whose lives depend on it
            </p>
            <h4 class="card-title">WHY TO DONATE</h4>
            <p class="card-text">.Saving lives by creating awareness among on safe blood donation through Sensitization,Education & Motivational Talks </p>
            
        
          </div>
        </div>
        <!-- Carousel start -->
        <div class="col-md-5">
          <div id="CarouselTest" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#CarouselTest" data-slide-to="0" class="active"></li>
              <li data-target="#CarouselTest" data-slide-to="1"></li>
              <li data-target="#CarouselTest" data-slide-to="2"></li>
  
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block"  src="{{asset('assets/asset/assets/images/a.png')}}" width="200" height="100" class="light-logo" />
                
              </div>
             
            
              <a class="carousel-control-prev" href="#CarouselTest" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
              <a class="carousel-control-next" href="#CarouselTest" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
            </div>
          </div>
        </div>
        <!-- End of carousel -->
      </div>
    </div>
    <!-- End of card -->
  
  </div>

  <div class="container py-3">
    <div class="title h1 text-center">Blood Bank News and Publication</div>
    <!-- Card Start -->
    <div class="card">
      <div class="row ">
        @foreach ($posts as $post)
        <div class="col-md-12 px-3">
          <div class="card-block px-6">
            <h4 class="card-title">{{$post->title}}</h4>
            <p class="card-text">
               {{$post->news}}
            </p>
          
       
      
           
              
  @endforeach
  
   
     
        </div>
      </div>
    </div>
   
   <br>
  <br>
   
    
@endsection
@section('scrpts')


@endsection


  



<!-- Team -->