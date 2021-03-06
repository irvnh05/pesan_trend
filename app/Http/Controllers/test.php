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
                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                     </ul>
                   </div>
                @endif
              <form action="{{ route('checkout-store', $cek->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label>Nama Lengkap</label>
                    <input 
                    type="text" 
                    class="form-control" 
                    name="name" 
                    placeholder="Nama Lengkap"
                    >
                </div>
                <div class="form-group">
                  <label>Tgl Lahir</label>
                    <input 
                    type="date" 
                    class="form-control" 
                    name="tgl_lahir" 
                    placeholder="Tanggal Lahir"
                    >
                </div>    
                <div class="form-group">
                  <label>Negara</label>
                   <select class="form-control" name="negara" style="width: 100%; "  type="text"  disabled>
                    <option value="INDONESIA"  name="negara" >INDONESIA</option>
                  </select>
                </div> 
                <div class="form-group">
                  <label>Alamat</label>
                    <input 
                    type="text" 
                    class="form-control" 
                    name="alamat" 
                    placeholder="Alamat Contoh (Jl.Awibitung no.1)"
                    >
                </div>       
                <div class="form-group">
                  <label>Provinsi</label>
                     <select class="custom-select form-control-border" name="provinves_id" id="province" >
                      <option value="">== Pilih Provinsi ==</option>
                      @foreach ($provinces as $id => $name)
                          <option value="{{ $id }}">{{ $name }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label>Kab/Kota</label>
                        <select class="custom-select form-control-border regencies" name="regency_id" id="city" >
                       <option value="">-- pilih Kab/Kota --</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Kecamatan</label>
                        <select class="custom-select form-control-border" name="district_id" id="districts" >
                       <option value="">-- pilih Kecamatan --</option>
                  </select>
                </div>                      
                <div class="form-group">
                  <label>Kode Pos</label>
                    <input 
                    type="text" 
                    class="form-control" 
                    name="zip_code" 
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
               
                <div>
                  <button type="submit" class="btn btn-login btn-block mt-4">
                    Daftar Sekarang
                  </button>
                </div>
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