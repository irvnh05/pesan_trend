@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@once
    {{-- @vite(['resources/css/app-frontend.css']) --}}
@endonce

@section('content')
        @include("frontend.includes.landing_page.shared.main")
@endsection