@extends('layouts.home-option')

@section('title')
Pesan_Trend
@endsection

@section('content')
<section class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1>
          Start To Infaq 100%
        </h1>
        <p>
          lorem ipsum
        </p>
      </div>
    </div>
    <div class="row justify-content-center mt-5 ">
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Family</h5>
              <h2> Rp. <span>6.000.000 </span></h2>
              <p class="card-text">With supporting text below as a <span class="text-black-50">natural lead-in to additional. </span></p>
              <hr>
              <a href="{{ route('family')}}" class="btn btn-login btn-block mt-4">Lihat Paket Family</a>
              <a href="#" class="btn btn-block mt-3 btn-light text-black-50">Tanya Admin di WA</a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Person</h5>
              <h2> Rp. <span>6.000.000 </span></h2>
              <p class="card-text">With supporting text below as a <span class="text-black-50">natural lead-in to additional. </span></p>
              <hr>
              <a href="#" class="btn btn-login btn-block mt-4">Daftar Sekarang</a>
              <a href="#" class="btn btn-block mt-3 btn-light text-black-50">Tanya Admin di WA</a>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
@endsection
{{-- 
@push('addon-script')
<script>
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })
</script>
@endpush --}}