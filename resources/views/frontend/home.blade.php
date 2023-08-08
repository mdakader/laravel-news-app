@extends('frontend.layouts.master')
@section('content')
<!-- Trending news  carousel-->
@include('frontend.home-components.breaking-news')
<!-- End Trending news carousel -->

<!-- Hero  news section-->
@include('frontend.home-components.hero-slider')
<!-- Hero news section -->

    <!-- End Hero news Section-->
    @if ($ad->home_top_bar_ad_status == 1)
        <a href="{{ $ad->home_top_bar_ad_url }}">
            <div class="large_add_banner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="large_add_banner_img">
                                <img src="{{ $ad->home_top_bar_ad }}" alt="adds">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @endif
    </div>

<!-- Popular news category -->
@include('frontend.home-components.main-news')
<!-- End Popular news category -->
@endsection
