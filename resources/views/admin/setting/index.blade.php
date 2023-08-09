@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{__('Settings') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{__('Setting') }}</h4>

            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-2">
                        <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true">{{__('General Settings') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile" aria-selected="false">{{__('SEO Settings') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#contact4" role="tab" aria-controls="contact" aria-selected="false">{{__('Appearance Settings') }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-10">
                        <div class="tab-content no-padding" id="myTab2Content">
                            <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab4">
                                <div class="card border border-primary">
                                    <div class="card-body">
                                        <form action="{{ route('admin.general-setting.update') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="form-group">
                                                <label for="">{{ __('admin.Site Name') }}</label>
                                                <input type="text" name="site_name" class="form-control" value="{{ $settings['site_name'] }}">
                                                @error('site_name')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <img src="{{ asset($settings['site_logo']) }}" alt="" width="150px"> <br>
                                                <label for="">{{ __('admin.Site Logo') }}</label>
                                                <input type="file" name="site_logo" class="form-control">
                                                @error('site_logo')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <img src="{{ asset($settings['site_favicon']) }}" alt="" width="150px"> <br>
                                                <label for="">{{ __('admin.Site Favicon') }}</label>
                                                <input type="file" name="site_favicon" class="form-control">
                                                @error('site_favicon')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary">{{__('Save') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="profile4" role="tabpanel" aria-labelledby="home-tab4">
                                <div class="card border border-primary">
                                    <div class="card-body">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="form-group">
                                                <label for="">{{__('SEO Settings') }}</label>
                                                <input type="text" name="site_name" class="form-control" value="">
                                                @error('site_name')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <img src="" alt="" width="150px"> <br>
                                                <label for="">{{__('Site Logo') }}</label>
                                                <input type="file" name="site_logo" class="form-control">
                                                @error('site_logo')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <img src="" alt="" width="150px"> <br>
                                                <label for="">{{__('Site Favicon') }}</label>
                                                <input type="file" name="site_favicon" class="form-control">
                                                @error('site_favicon')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary">{{__('Save') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="contact4" role="tabpanel" aria-labelledby="home-tab4">
                                <div class="card border border-primary">
                                    <div class="card-body">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="form-group">
                                                <label for="">{{__('Appearance Settings') }}</label>
                                                <input type="text" name="site_name" class="form-control" value="">
                                                @error('site_name')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <img src="" alt="" width="150px"> <br>
                                                <label for="">{{__('Site Logo') }}</label>
                                                <input type="file" name="site_logo" class="form-control">
                                                @error('site_logo')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <img src="" alt="" width="150px"> <br>
                                                <label for="">{{__('Site Favicon') }}</label>
                                                <input type="file" name="site_favicon" class="form-control">
                                                @error('site_favicon')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary">{{__('Save') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



