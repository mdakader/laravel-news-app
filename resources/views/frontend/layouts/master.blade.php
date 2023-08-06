<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Top News App</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('frontend/assets/css/styles.css')}}" rel="stylesheet">
</head>

<body>

<!-- Header news -->
@include('frontend.layouts.header')
<!-- End Header news -->

    @yield('content')

<!-- Footer Section -->
    @include('frontend.layouts.footer')
<!-- Footer Section End -->

<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

<script type="text/javascript" src="{{ asset('frontend/assets/js/index.bundle.js') }}"></script>
@include('sweetalert::alert')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })


    // Add csrf token in ajax request
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function() {
        /** change language **/
        $('#site-language').on('change', function() {
            let languageCode = $(this).val();
            $.ajax({
                method: 'GET',
                url: "{{ route('language') }}",
                data: {
                    language_code: languageCode
                },
                success: function(data) {
                    if (data.status === 'success') {
                        window.location.href = "{{ url('/') }}";
                    }
                },
                error: function(data) {
                    console.error(data);
                }
            })
        })

    })
</script>

@stack('content')

</body>

</html>
