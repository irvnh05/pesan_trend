
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/favicon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ setting('meta_description') }}">
    <meta name="keyword" content="{{ setting('meta_keyword') }}">

    @include('frontend.includes.meta')

    <!-- Shortcut Icon -->
    <link
        rel="shortcut icon"
        href="/play-tailwind-main/assets/images/favicon.png"
        type="image/x-icon"
    />
    <link rel="stylesheet" href="/play-tailwind-main/assets/css/animate.css" />
    <link rel="stylesheet" href="/play-tailwind-main/assets/css/tailwind.css" />

    <!-- ==== WOW JS ==== -->
    <script src="/play-tailwind-main/assets/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('before-styles')

    {{-- @vite(['resources/css/app-frontend.css']) --}}
    {{-- @vite(['resources/js/app-frontend.js']) --}}
    {{-- @include("frontend.includes.landing_page.script") --}}
    @include('frontend.includes.landing_page.script')

    @stack('after-styles')

    <x-google-analytics />
</head>

<body>
    <!-- ======= Header ======= -->
    @include("frontend.includes.landing_page.header")
    <!-- ======= Hero Section ======= -->
    @include("frontend.includes.landing_page.hero_section")

    <main>
        @yield('content')
        {{-- @include("layouts.partials.landing_page.main") --}}
    </main>

    @include("frontend.includes.landing_page.footer")

</body>

<!-- Scripts -->
@stack('before-scripts')


@stack('after-scripts')

</html>
