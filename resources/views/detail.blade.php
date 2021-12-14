@extends('layouts.home-alternate')

@section('title')
Pesan_Trend
@endsection

@section('content')
  <!-- detail konten -->
    <section >
        <div class="container mt-5">
          <div class="row">
            <div class="col-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item "><a class="text-black-100"href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Program Detail
                  </li>
                </ol>
              </nav>
            </div>
               <div class="col-lg-8">
                <h1 class="text-black"> {{ $programs->nama }}   </h1>
                <h4 class="text-black-100"> {{ $programs->kategori_program->nama }}   </h4>
              </div>
          </div>
        </div>
         @if($programs->galeri_program->count() > 0)
        <div class="container ">
          <div class="row">
            <div class="col-lg-8 gallery">
              <div class="xzoom-container">
                <img
                  src="{{ Storage::url($programs->galeri_program->first()->assets) }}"
                  xoriginal="{{ Storage::url($programs->galeri_program->first()->assets) }}"
                  class="xzoom"
                  id="xzoom-default"
                  alt=""
                />
              </div>
            </div>
            <div class="col-lg-2">
              <div class="row">
                    <div class="xzoom-thumbs mt-2">
                        @foreach($programs->galeri_program as $gallery)
                      <a href="{{ Storage::url($gallery->assets) }}"
                        ><img
                          class="xzoom-gallery mb-3"
                          width="128"
                          src="{{ Storage::url($gallery->assets) }}"
                          xpreview="{{ Storage::url($gallery->assets) }}"
                      /></a>
                       @endforeach
                      {{-- <a href="pesantrend-template/frontend/images/header-1.png"
                        ><img
                          class="xzoom-gallery mb-3"
                          width="128"
                          src="pesantrend-template/frontend/images/header-1.png"
                          xpreview="pesantrend-template/frontend/images/header-1.png"
                      /></a>
                      <a href="pesantrend-template/frontend/images/header-1.png"
                        ><img
                          class="xzoom-gallery mb-3"
                          width="128"
                          src="pesantrend-template/frontend/images/header-1.png"
                          xpreview="pesantrend-template/frontend/images/header-1.png"
                      /></a>
                      <a href="pesantrend-template/frontend/images/header-1.png"
                        ><img
                          class="xzoom-gallery mb-3"
                          width="128"
                          src="pesantrend-template/frontend/images/header-1.png"
                          xpreview="pesantrend-template/frontend/images/header-1.png"
                      /></a>                       --}}
                </div>
              </div>
            </div>
          </div>
        </div>
        @endif
        
        <div class="pesantrend-details-container"> 
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mt-3">
                <h6 class="text-black">Mulai Program</h6>
                <h7 class="text-black-50">{{ $programs->date }}</h7>
              </div>
              <div class="col-lg-2 ">
                {{-- <a href="{{ route('checkout_process', $programs->id) }}"  method="post" class="btn btn-login ml-1 nav-link px-4 text-white btn-block mb-3">
                  Join Now
                </a> --}}
                <form action="{{ route('checkout_process', $programs->id) }}" method="post">
                  @csrf
                  <button class="btn btn-login ml-1 nav-link px-4 text-white btn-block mb-3" type="submit">
                      Join Now
                  </button>
              </form>
              </div>
            </div>
          </div>
        </div>
  
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-8">
              <p>
               {!!strlen($programs->keterangan) > 500 ? substr($programs->keterangan,0,500) : $programs->keterangan!!}
              </p>
              {{-- <p>
                  Lorem Ipsum is simply dummy text of the printing and 
                  typesetting industry. Lorem Ipsum has been the industry's 
                  standard dummy text ever since the 1500s, when an unknown 
                  printer took a galley of type and scrambled it to make a 
                  type specimen book.Lorem Ipsum is simply dummy text of 
                  the printing and typesetting industry. Lorem Ipsum has 
                  been the industry's standard dummy text ever since the 
                  1500s, when an unknown printer took a galley of type and 
                  scrambled it to make a type specimen book. 
              </p> --}}
              <div class="features row">
                <div class="col-md-4">
                  <img
                    src="/pesantrend-template/frontend/images/logo.png"
                    alt=""
                    class="features-image"
                  />
                  <div class="description">
                    <h3>Lorem </h3>
                    <p>Lorem</p>
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <div class="description">
                    <img
                      src="/pesantrend-template/frontend/images/logo.png"
                      alt=""
                      class="features-image"
                    />
                    <div class="description">
                      <h3>Lorem</h3>
                      <p>Lorem</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <div class="description">
                    <img
                      src="/pesantrend-template/frontend/images/logo.png"
                      alt=""
                      class="features-image"
                    />
                    <div class="description">
                      <h3>Lorem</h3>
                      <p>Lorem</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

@endsection


