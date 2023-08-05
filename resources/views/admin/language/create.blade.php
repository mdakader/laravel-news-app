@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('Language') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('Create Language') }}</h4>

            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">{{ __('Language') }}</label>
                        <select name="lang" id="language-select" class="form-control select2">
                            <option value="">--{{ __('Select') }}--</option>
                                <option value=""></option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="">{{ __('Name') }}</label>
                        <input readonly name="name" type="text" class="form-control" id="name">

                    </div>
                    <div class="form-group">
                        <label for="">{{ __('Slug') }}</label>
                        <input readonly name="slug" type="text" class="form-control" id="slug">
                    </div>
                    <div class="form-group">
                        <label for="">{{ __('Is it default?') }} </label>
                        <select name="default" id="" class="form-control">
                            <option value="0">{{ __('No') }}</option>
                            <option value="1">{{ __('Yes') }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">{{ __('Status') }}</label>
                        <select name="status" id="" class="form-control">
                            <option value="1">{{ __('Active') }}</option>
                            <option value="0">{{ __('Inactive') }}</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
                </form>
            </div>
        </div>
    </section>
@endsection
