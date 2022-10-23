@extends('app.layouts.app')
@section('head-tag')
<title>about us</title>
@endsection
@section('content')
<div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
   <div class="overlay"></div>
   <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
         <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="<?= route('home.index') ?>">Home</a></span> <span>about us</span></p>
            <h1 class="mb-3 bread">about us</h1>
         </div>
      </div>
   </div>
</div>
<section class="ftco-section ftc-no-pb">
   <div class="container">
      <div class="row no-gutters">
         <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
            <!-- <a href="" class="icon popup-vimeo d-flex justify-content-center align-items-center">
            <span class="icon-play"></span>
            </a> -->
         </div>
         <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
            <div class="heading-section heading-section-wo-line mb-5 pl-md-5">
               <div class="pl-md-5 ml-md-5">
                  <span class="subheading">GET TO KNOW US</span>
                  <h2 class="mb-4">Deluxe Real Property</h2>
               </div>
            </div>
            <div style="direction: ltr;" class="pl-md-5 ml-md-5 mb-5">
               <p style="direction: ltr!important;">
               Deluxe Real Estate will provide you a seamless experience so you can achieve your real estate goals. We offer a wide range of professional services, and our experienced agents will work with you to achieve your real estate goals.
               We’ll guide you every step of the way, whether you’re looking to buy, sell, or rent.
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection