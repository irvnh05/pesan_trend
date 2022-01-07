@extends('layouts.home-option')

@section('title')
Pesan_Trend
@endsection

@section('content')
{{-- <div class="container">
  <div class="col-lg-12 text-center mt-5 mb-5">
    <h1 class="header-primary mb-3">
    Artikel 
    </h1><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <p class="subtitle-primary">
    Tingkatkan literasi <br class="desktop"> dari artikel yang kamu baca
    </p>
  </div>

    <div class="row my-3">
      <div class="col-md-4 col-sm-12 mb-3">
		<div class="card">
			<img src="pesantrend-template/frontend/images/study.png"  class="card-img-top p-3" alt="...">
 
			<div class="card-body">
				<div class="card-title"><h4>Tutorial Bootstrap 4 bagian 1</h4></div>
				Selamat datang di tutorial bootstrap 4 lengkap dari paling dasar sampai mahir, untuk pemula sampai expert.
			</div>
		</div>
	</div>
 
	<div class="col-md-4 col-sm-6 mb-3">
		<div class="card">
			<img src="pesantrend-template/frontend/images/study.png" class="card-img-top p-3" alt="...">
 
			<div class="card-body">
				<div class="card-title"><h4>Tutorial Bootstrap 4 bagian 2</h4></div>
				Selamat datang di tutorial bootstrap 4 lengkap dari paling dasar sampai mahir, untuk pemula sampai expert.
			</div>
		</div>
	</div>
 
	<div class="col-md-4 col-sm-6 mb-3">
		<div class="card">
			<img src="pesantrend-template/frontend/images/study.png" class="card-img-top p-3" alt="...">
 
			<div class="card-body">
				<div class="card-title"><h4>Tutorial Bootstrap 4 bagian 3</h4></div>
				Selamat datang di tutorial bootstrap 4 lengkap dari paling dasar sampai mahir, untuk pemula sampai expert.
			</div>
		</div>
	</div>
        {{-- <div class="col-md-3">
         test
        </div>   
         --}}
        {{-- <div class=" col-md-12 mt-5">
          <div class="text-center ">
            <button id="#" class="w-100 btn btn-regis my-3 col-lg-2 ">
            Load More
            </button>
          </div>
         </div>
    </div>          
</div> --}} 

    <div class="container">
      <div class="col-lg-12 text-center mt-5 mb-5">
        <h1 class="header-primary mb-3">
          Artikel 
        </h1> 
        <p class="">
        Tingkatkan literasi <br class=""> dari artikel yang kamu baca
        </p>
      </div>

      <div class="row my-3"  id="post">
        
      </div>
        <div class="text-center col-md-12 ">
          <button class="btn btn-regis" id="load-more" data-paginate="2">Load more...</button>
            <p class="invisible">No more posts...</p>
        </div>
    </div>
@endsection
@push('addon-script')
   <script>
      var paginate = 1;
        loadMoreData(paginate);

        $('#load-more').click(function() {
            var page = $(this).data('paginate');
            loadMoreData(page);
            $(this).data('paginate', page+1);
        });
        // run function when user click load more button
        function loadMoreData(paginate) {
            $.ajax({
                url: '?page=' + paginate,
                type: 'get',
                datatype: 'html',
                beforeSend: function() {
                    $('#load-more').text('Loading...');
                }
            })
            .done(function(data) {
                if(data.length == 0) {
                    $('.invisible').removeClass('invisible');
                    $('#load-more').hide();
                    return;
                  } else {
                    $('#load-more').text('Load more...');
                    $('#post').append(data);
                  }
            })
               .fail(function(jqXHR, ajaxOptions, thrownError) {
                  alert('Something went wrong.');
               });
        }
    </script>
@endpush