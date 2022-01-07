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
                {{-- @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                     </ul>
                   </div>
                @endif --}}
              <form action="{{ route('checkout-store', $cek->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label>Nama Lengkap</label>
                    <input 
                    type="text" 
                    class="form-control  @error('name') is-invalid @enderror" 
                    name="name" 
                    placeholder="Nama Lengkap"
                    value="{{ old('name') }}">
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label>Tgl Lahir</label>
                    <input 
                    type="date" 
                    class="form-control @error('tgl_lahir') is-invalid @enderror" 
                    name="tgl_lahir" 
                    placeholder="Tanggal Lahir"
                    value="{{ old('tgl_lahir') }}"
                    >
                    @error('tgl_lahir')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
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
                    class="form-control @error('name') is-invalid @enderror" 
                    name="alamat" 
                    placeholder="Alamat Contoh (Jl.Awibitung no.1)"
                    value="{{ old('alamat') }}">
                    @error('alamat')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>       
                <div class="form-group">
                  <label>Provinsi</label>
                     <select class="custom-select form-control-border @error('provinves_id') is-invalid @enderror" name="provinves_id" id="province" >
                      <option value="">== Pilih Provinsi ==</option>
                      @foreach ($provinces as $id => $name)
                          <option value="{{ $id }}" {{old('provinves_id') == $id ? "selected" : "" }}>{{ $name }} </option>
                      @endforeach
                  </select>
                    @error('provinves_id')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label>Kab/Kota</label>
                        <select class="custom-select form-control-border regencies @error('regency_id') is-invalid @enderror" name="regency_id" id="city" >
                        <option value="" >-- pilih Kab/Kota --</option>
                        @foreach ($regency as $id => $name)
                          <option value="{{ $id }}" {{old('regency_id') == $id ? "selected" : "" }}>{{ $name }} </option>
                        @endforeach
                  </select>
                    @error('regency_id')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label>Kecamatan</label>
                        <select class="custom-select form-control-border @error('district_id') is-invalid @enderror" name="district_id" id="districts" >
                       <option value="">-- pilih Kecamatan --</option>
                       @foreach ($district as $id => $name)
                          <option value="{{ $id }}" {{old('district_id') == $id ? "selected" : "" }}>{{ $name }} </option>
                       @endforeach
                  </select>
                    @error('district_id')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>               
                <div class="form-group">
                  <p class="text-muted">
                    Apakah Anda juga ingin menuliskan kode pos? 
                  </p>
                  <div class="icheck-primary d-inline " for="open">
                    <input type="radio" class="detail" name="open" value="yes"/>
                    <label>
                      Iya, boleh
                    </label>
                  </div>
                  <div class="icheck-primary d-inline ml-4">
                    <input type="radio" class="detail" name="open" value="no"/>
                    <label>
                      Enggak, makasih
                    </label>
                  </div>
                </div>
                <div class="form-group" id="form-input">
                  <label>Kode Pos</label>
                    <input 
                    type="text" 
                    class="form-control @error('zip_code') is-invalid @enderror" 
                    name="zip_code" 
                    placeholder="Kode Pos Contoh (40234)"
                    >
                    @error('zip_code')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>

                <div class="form-group" >
                  <label>Email</label>
                    <input 
                    type="email" 
                    class="form-control @error('email') is-invalid @enderror" 
                    name="email" 
                    placeholder="Email"
                    value="{{ old('email') }}">
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                <div>    
                <div class="form-group">
                  <label>Nomor HP</label>
                    <input 
                    type="number" 
                    class="form-control @error('phone_number') is-invalid @enderror" 
                    name="phone_number" 
                    placeholder="No Hp Contoh (082199038375)"
                    value="{{ old('phone_number') }}">
                    @error('phone_number')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
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

    $("#form-input").css("display","none"); //Menghilangkan form-input ketika pertama kali dijalankan
$(".detail").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
if ($("input[name='open']:checked").val() == "yes" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
$("#form-input").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
} else {
$("#form-input").slideUp("fast"); //Efek Slide Up (Menghilangkan Form Input)
}
});

});

// $(document).ready(function(){
// $("#form-input").css("display","none"); //Menghilangkan form-input ketika pertama kali dijalankan
// $(".detail").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
// if ($("input[name='open']:checked").val() == "yes" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
// $("#form-input").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
// } else {
// $("#form-input").slideUp("fast"); //Efek Slide Up (Menghilangkan Form Input)
// }
// });
// });

</script>

 @endpush