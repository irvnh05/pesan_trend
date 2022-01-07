

 {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
 <link type="text/javascript" href="{{ asset('pesantrend-template/frontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
 <link type="text/javascript" href="{{ asset('pesantrend-template/frontend/libraries/jquery/jquery-3.6.0.min.js') }}" ></script>
 <link type="text/javascript" href="{{ asset('pesantrend-template/frontend/libraries/plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 {{-- <script rel="stylesheet" src="{{ asset('pesantrend-template/frontend/libraries/xzoom/xzoom.min.js') }}"></script> --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 {{-- <script>
//  document.addEventListener('DOMContentLoaded', function () {
//     window.stepper = new Stepper(document.querySelector('.bs-stepper'))
//   })
  document.addEventListener('DOMContentLoaded',function () {
 window.stepper = new Stepper(document.querySelector('.bs-stepper'))
})
</script> --}}
    
    {{-- <script>
      $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
          zoomWidth: 500,
          title: false,
          tint: '#333',
          Xoffset: 15
        });
      });
    </script> --}}

      {{-- <script type="text/javascript">
      window.addEventListener('DOMContentLoaded', function() {
    $(function () {
        $('#province').on('change', function () {
            $.ajax({
            url: '{{ route('regencies') }}',
            method: 'POST',
            data: {id: $(this).val()},
            success: function (response) {
                $('#city').empty();

                $.each(response, function (id, name) {
                    $('#city').append(new Option(name, id))
                })
            }
          });  
        });
    });
});

// $(function () {
//     $.ajaxSetup({
//         headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
//     });

//     $('#province').on('change', function () {
//         $.ajax({
//             url: '{{ route('regencies') }}',
//             method: 'POST',
//             data: {id: $(this).val()},
//             success: function (response) {
//                 $('#city').empty();

//                 $.each(response, function (id, name) {
//                     $('#city').append(new Option(name, id))
//                 })
//             }
//         })
//     });
// });
</script> --}}
 {{-- <script type="text/javascript">
      window.addEventListener('DOMContentLoaded', function() {
    $(function () {
        $('#province').on('change', function () {
            $.ajax({
            url: '{{ route('regencies') }}',
            method: 'POST',
            data: {id: $(this).val()},
            success: function (response) {
                $('#city').empty();

                $.each(response, function (id, name) {
                    $('#city').append(new Option(name, id))
                })
            }
          });  
        });
    });
});
</script> --}}