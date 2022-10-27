@extends('base.base')

@section('styles')
    <link href="{{ asset('demo1/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('demo1/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    {{ $slot }}
@endsection


@section('scripts')
    <script src="{{ asset('demo1/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('demo1/js/scripts.bundle.js') }}"></script>

    <script src="{{ asset('demo1/js/custom/utilities/modals/create-account.js') }}"></script>
@endsection
