@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{  __('Social Links') }}</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>{{  __('All social links') }}</h4>

            </div>
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-sub">
                        <thead>
                        <tr>
                            <th class="text-center">
                                #
                            </th>
                            <th>{{  __('Email') }}</th>

                            <th>{{  __('Action') }}</th>
                        </tr>
                        </thead>
                        <tbody>
{{--                        @foreach ($subs as $sub)--}}
{{--                            <tr>--}}
{{--                                <td>{{ $sub->id }}</td>--}}
{{--                                <td>{{ $sub->email }}</td>--}}


{{--                                <td>--}}
{{--                                    <a href="{{ route('admin.subscribers.destroy', $sub->id) }}"--}}
{{--                                       class="btn btn-danger delete-item"><i class="fas fa-trash-alt"></i></a>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}


                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $("#table-sub").dataTable({
            "columnDefs": [{
                "sortable": false,
                "targets": [1]
            }]
        });
    </script>
@endpush
