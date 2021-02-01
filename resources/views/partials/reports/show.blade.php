@extends('layouts.admin')

@include($class->views['header'])

@section('content')
    <div class="card">
        @include($class->views['filter'])

        @if(!empty($class->model->settings->chart))
            @include($class->views['chart'])
        @endif

        @include($class->views['content'])
    </div>
@endsection

@push('scripts_start')
    <script src="{{ asset('js/common/reports.js?v=' . version('short')) }}"></script>
@endpush
