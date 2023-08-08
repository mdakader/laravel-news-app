@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{  __('Ads') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{  __('Update Ads') }}</h4>

            </div>
            <div class="card-body">
                <form action="{{ route('admin.ad.update', 1) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h5 class="text-primary">{{  __('Home Page Ads') }}</h5>

                    <div class="form-group">
                        <label for="">{{  __('Top bar ad') }}</label>
                        <input name="home_top_bar_ad" type="file" class="form-control" >
                        @error('home_top_bar_ad')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <label for="" class="mt-3">{{  __('Top bar ad url') }}</label>
                        <input name="home_top_bar_ad_url" value="" type="text" class="form-control" >
                        @error('home_top_bar_ad_url')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <label class="custom-switch mt-2">
                            <input
                                name="home_top_bar_ad_status"
                                value="1" type="checkbox" class="custom-switch-input toggle-status">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="">{{  __('Middle Ad') }}</label>
                        <input name="home_middle_ad" type="file" class="form-control" >
                        @error('home_middle_ad')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <label for="" class="mt-3">{{  __('Middle Ad Url') }}</label>
                        <input name="home_middle_ad_url" value="" type="text" class="form-control" >
                        @error('home_middle_ad_url')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <label class="custom-switch mt-2">
                            <input

                                name="home_middle_ad_status"
                                value="1" type="checkbox" class="custom-switch-input toggle-status">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </div>

                    <h5 class="text-primary">{{  __('News View Page Ads') }}</h5>

                    <div class="form-group">
                        <label for="">{{  __('Bottom Ad') }}</label>
                        <input name="view_page_ad" type="file" class="form-control" >
                        @error('view_page_ad')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <label for="" class="mt-3">{{  __('Bottom Ad Url') }}</label>
                        <input name="view_page_ad_url" value=""  type="text" class="form-control" >
                        @error('view_page_ad_url')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <label class="custom-switch mt-2">
                            <input
                                name="view_page_ad_status"
                                value="1" type="checkbox" class="custom-switch-input toggle-status">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </div>

                    <h5 class="text-primary">{{  __('News Page Ads') }}</h5>

                    <div class="form-group">
                        <label for="">{{  __('Bottom Ad') }}</label>
                        <input name="news_page_ad" type="file" class="form-control" >
                        @error('news_page_ad')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <label for="" class="mt-3">{{  __('Bottom Ad Url') }}</label>
                        <input name="news_page_ad_url"  value="" type="text" class="form-control" >
                        @error('news_page_ad_url')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror


                        <label class="custom-switch mt-2">
                            <input
                                name="news_page_ad_status"
                                value="1" type="checkbox" class="custom-switch-input toggle-status">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </div>

                    <h5 class="text-primary">{{  __('Sidebar Ad') }}</h5>

                    <div class="form-group">
                        <label for="">{{  __('Sidebar Ad') }}</label>
                        <input name="side_bar_ad" type="file" class="form-control" >
                        @error('side_bar_ad')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <label for="" class="mt-3">{{  __('Sidebar Ad Url') }}</label>
                        <input name="side_bar_ad_url" value="" type="text" class="form-control" >
                        @error('side_bar_ad_url')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <label class="custom-switch mt-2">
                            <input
                                name="side_bar_ad_status"
                                value="1" type="checkbox" class="custom-switch-input toggle-status">
                            <span class="custom-switch-indicator"></span>
                        </label>
                    </div>


                    <button type="submit" class="btn btn-primary">{{  __('Update') }}</button>
                </form>
            </div>
        </div>
    </section>
@endsection
