@extends('layouts.home-option')

@section('title')
Pesan_Trend
@endsection

@section('content')

<section class="py-5 my-5">
  <div class="container">
    <div class="row justify-content-center text-black">
      <div class="col-lg-12 col-11 text-center">
        {{-- <div class="col-lg-4 mx-auto d-block">
           <img 
           src="{{ Storage::url($artikel->	assets ?? '') }}"
           alt=""
           class="d-block w-100 img-fluid"
           />
        </div>    --}}
        <h1 class="mb-3 artichoke">
          {{ $artikel->nama }}
        </h1>
        {{-- <p>Sebuah fasilitas yang menjadi tempat berkumpulnya <br>
          anak muda dalam belajar Islam, belajar dakwah, dan membentuk Life Skill 
        </p> --}}
        <div class="row">
          <div class="col-lg-8 offset-lg-2 text-left ">
            {{-- <h5 class="artichoke">
              Mukadimah 
            </h5> --}}
            <p class="text-justify">
                {!! $artikel->keterangan !!}
            </p>
            <h5 >
              Salam Hangat 
            </h5>
            <h5 class="artichoke"><strong>
              Redaktur</strong>
            </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
