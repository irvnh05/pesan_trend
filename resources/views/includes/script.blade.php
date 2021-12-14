


 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="{{ asset('pesantrend-template/frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
 <link rel="stylesheet" href="{{ asset('pesantrend-template/frontend/libraries/jquery/jquery-3.6.0.min.js') }}"></script>
 <link rel="stylesheet" href="{{ asset('pesantrend-template/frontend/libraries/plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
 <script rel="stylesheet" src="{{ asset('pesantrend-template/frontend/libraries/xzoom/xzoom.min.js') }}"></script>
{{-- <script>
//  document.addEventListener('DOMContentLoaded', function () {
//     window.stepper = new Stepper(document.querySelector('.bs-stepper'))
//   })
  document.addEventListener('DOMContentLoaded',function () {
 window.stepper = new Stepper(document.querySelector('.bs-stepper'))
})
</script> --}}
    
    <script>
      $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
          zoomWidth: 500,
          title: false,
          tint: '#333',
          Xoffset: 15
        });
      });
    </script>