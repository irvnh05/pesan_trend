{{-- @extends('layouts.home-alternate')  --}}

@extends('layouts.none') 


@section('title')
Pesan_Trend
@endsection

@section('content')
<!-- br -->
  {{-- <section >

        <div class="container mt-3">
          <div class="row">
            <div class="col-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item "><a class="text-black-100"href="#">Home</a></li>
                  <li class="breadcrumb-item "><a class="text-black-100"href="#">Program Detail</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Checkout
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section> --}}

  <!--form  -->
  
  <!-- Page Content -->
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5 mt-5 mb-4">
              <h2 class="text-justify ">
                Dapatkan konten-konten (audio) penyemangat hidup,
                mengupas problematika hidup sehari-hari </h3>
              </h2>
                <form action="{{ route('checkout-store',$cek) }}" method="POST" enctype="multipart/form-data " >
                      @csrf
                 <div class="form-group">
                  <label>Nama Lengkap</label>
                    <input 
                    type="text" 
                    class="form-control" 
                    name="name" 
                    placeholder="Nama Lengkap"
                    >
                </div>
                {{-- <div class="form-group">
                  <label>Tgl Lahir</label>
                    <input 
                    type="date" 
                    class="form-control" 
                    id="tgl-lahir" 
                    placeholder="Tanggal Lahir"
                    >
                </div>     --}}
                <div class="form-group">
                  <label>Alamat</label>
                    <input 
                    type="alamat" 
                    class="form-control" 
                    id="alamat" 
                    placeholder="Alamat Contoh (Jl.Awibitung no.1)"
                    >
                </div>
                <div class="form-group">
                  <label>Kecamatan</label>
                        <select class="custom-select form-control-border" name="districts" id="districts" >
                       <option value="">-- pilih Kecamatan --</option>
                  </select>
                  </select>
                </div>
                <div class="form-group">
                  <label>Kabupaten/Kota</label>
                     <select class="custom-select form-control-border regencies" name="city" id="city">
                         <option value="">-- pilih kota asal --</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Provinsi</label>
                     <select class="custom-select form-control-border" id="province" name="province">
                      <option value="">== Select Province ==</option>
                      @foreach ($provinces as $id => $name)
                          <option value="{{ $id }}">{{ $name }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Negara</label>
                    <input 
                    type="text" 
                    class="form-control" 
                    id="negara" 
                    placeholder="Negara (indonesia)"
                    >
                </div>                
                <div class="form-group">
                  <label>Kode Pos</label>
                    <input 
                    type="kodepos" 
                    class="form-control" 
                    id="kodepos" 
                    placeholder="Kode Pos Contoh (40234)"
                    >
                </div>
                <div class="form-group">
                         <label>Email</label>
                          <input 
                          type="email" 
                          class="form-control" 
                          name="email" 
                          placeholder="Email"
                          >
                              <div>    
                              <div class="form-group">
                                <label>Nomor HP</label>
                                  <input 
                                  type="number" 
                                  class="form-control" 
                                  name="phone_number" 
                                  placeholder="No Hp Contoh (082199038375)"
                                  >
                              </div>  
                <button type="submit" class="btn btn-login btn-block mt-4">
                  Sign Up Now
                </button>
                  {{-- <a href="{{ route('checkout-store') }}" class="btn btn-login btn-block mt-4">
               Sign Up Now
            </a> --}}
              </form>
            </div>
          </div>
        </div>

  </section>

  
@endsection

@push('addon-script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script type="text/javascript">
     $(function () {
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

    $('#province').on('change', function () {
        $.ajax({
            url: '{{ route('regencies') }}',
            method: 'POST',
            data: {id: $(this).val() , _token: '{{csrf_token()}}'},
            success: function (response) {
                $('#city').empty();

                $.each(response, function (id, name) {
                    $('#city').append(new Option(name, id))
                })
            }
        })
    });

    $('.regencies').on('change', function () {
        $.ajax({
            url: '{{ route('districts') }}',
            method: 'POST',
            data: {id: $(this).val() , _token: '{{csrf_token()}}'},
            success: function (response) {
                $('#districts').empty();

                $.each(response, function (id, name) {
                    $('#districts').append(new Option(name, id))
                })
            }
        })
    });

});

</script>

 @endpush