@extends('frontend.layouts.master')
@section('content')
<!-- Trending news  carousel-->
@include('frontend.home-components.breaking-news')
<!-- End Trending news carousel -->

<!-- Hero  news section-->
@include('frontend.home-components.hero-slider')
<!-- Hero news section -->

<div class="large_add_banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="large_add_banner_img">
                    <img src="{{asset('frontend/assets/images/placeholder_large.jpg')}}" alt="adds">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Popular news category -->
@include('frontend.home-components.main-news')
<!-- End Popular news category -->
@endsection
