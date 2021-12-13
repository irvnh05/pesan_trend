@extends('layouts.home-alternate')

@section('title')
Pesan_Trend
@endsection

@section('content')
<!-- br -->
  <section >

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
      </section>

  <!--form  -->
  <section>
  <section>
  <!-- Page Content -->
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <h2>
                Dapatkan konten-konten (audio) penyemangat hidup, <br>
                mengupas problematika hidup sehari-hari </h3>
              </h2>
              <form class="mt-3">
                 <div class="form-group">
                  <label>Nama Lengkap</label>
                    <input 
                    type="text" 
                    class="form-control" 
                    id="nama" 
                    placeholder="Nama Lengkap"
                    >
                </div>
                <div class="form-group">
                  <label>Tgl Lahir</label>
                    <input 
                    type="date" 
                    class="form-control" 
                    id="tgl-lahir" 
                    placeholder="Tanggal Lahir"
                    >
                </div>    
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
                     <select class="custom-select form-control-border" id="exampleSelectBorder">
                     <option value="" selected disabled>Pilih Kecamatan</option>
                     <option>Value 1</option>
                     <option>Value 2</option>
                     <option>Value 3</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Kabupaten/Kota</label>
                     <select class="custom-select form-control-border" id="exampleSelectBorder" disabled>
                     <option value="" selected disabled>Pilih Kabupaten/Kota</option>
                     <option>Value 1</option>
                     <option>Value 2</option>
                     <option>Value 3</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Provinsi</label>
                     <select class="custom-select form-control-border" id="exampleSelectBorder" disabled>
                     <option value="" selected disabled>Pilih Provinsi</option>
                     <option>Value 1</option>
                     <option>Value 2</option>
                     <option>Value 3</option>
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
                          id="email" 
                          placeholder="Email"
                          >
                              <div>    
                              <div class="form-group">
                                <label>Nomor HP</label>
                                  <input 
                                  type="nohp" 
                                  class="form-control" 
                                  id="nohp" 
                                  placeholder="No Hp Contoh (082199038375)"
                                  >
                              </div>  
                <button type="submit" class="btn btn-login btn-block mt-4">
                  Sign Up Now
                </button>
              </form>
            </div>
          </div>
        </div>

  </section>

  
@endsection
