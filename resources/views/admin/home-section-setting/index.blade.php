@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ __('Home Section Setting') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{ __('Home Section Setting') }}</h4>

            </div>

            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab2" role="tablist">
                    @foreach ($languages as $language)
                        <li class="nav-item">
                            <a class="nav-link {{ $loop->index === 0 ? 'active' : '' }}" id="home-tab2" data-toggle="tab"
                               href="#home-{{ $language->lang }}" role="tab" aria-controls="home"
                               aria-selected="true">{{ $language->name }}</a>
                        </li>
                    @endforeach

                </ul>
                <div class="tab-content tab-bordered" id="myTab3Content">
                        
                </div>
            </div>


        </div>
    </section>
@endsection

@push('scripts')
    <script>
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        Toast.fire({
            icon: 'error',
            title: "{{ $error }}"
        });
        @endforeach
        @endif
    </script>
@endpush
