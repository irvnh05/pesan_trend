
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @include("frontend.includes.landing_page.shared.head_style")
<body>
    <!-- ======= Header ======= -->
    @include("frontend.includes.landing_page.shared.header")
    <!-- ======= Hero Section ======= -->
    @include("frontend.includes.landing_page.shared.hero_section")

    <main>
        @yield('content')
    </main>

    @include("frontend.includes.landing_page.shared.footer")

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" class="bi bi-arrow-up-short" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"style="fill: #fff"/>
      </svg>
    </a>

      
</body>

<!-- Scripts -->
@stack('before-scripts')
    @include("frontend.includes.landing_page.shared.script")
@stack('after-scripts')

</html>
