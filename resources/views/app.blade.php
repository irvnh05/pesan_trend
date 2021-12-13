@extends('layouts.home')

@section('title')
Pesan_Trend
@endsection

@section('content')
<!-- caraousel -->
      <section>
       <div class="mt-4">
         <div class="row">
           <div class="col-lg-12" data-aos="zoom-in">
             <div 
             id="pesantrendCarousel"
             class="carousel-slide"
             data-ride="carousel"
             >
            <ol class="carousel-indicators">
              <li 
              class="active"
              data-target="#pesantrendCarousel"
              data-slide-to="0">
              </li>
              <li 
              data-target="#pesantrendCarousel" 
              data-slide-to="1"
              >
              </li>
              <li 
              data-target="#pesantrendCarousel" 
              data-slide-to="2"
              >
              </li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 mt-2">
                      <h1 class="cocogoose display2">
                        Find next
                        <span class="text-black">
                          program
                        </span>
                        <br>
                        <span class="text-black">
                          to Visit
                        </span>
                      </h1>
                      <p class="text-black mt-5 h3-c">
                         let's learning at the Pesan_Trend with pleasure 
                         <br> 
                         to know new and interesting thnigs you can learn and you can.
                      </p>
                      <div class="row">
                        <div class="d-flex ml-3">
                          <img src="pesantrend-template/frontend/images/Calendar.svg" alt="">
                            <a href="#" class="ml-1 disabled text-black">
                              Schedule Your Time
                            </a>
                        </div>
                        <div class="d-flex ml-3">
                          <img src="pesantrend-template/frontend/images/Heart.svg" alt="">
                            <a href="#" class="ml-1 disabled text-black">
                              Living With Nature
                            </a>
                        </div>
                      </div>
                       <!-- <pre>     -->
                      <div class="booking flex-row flex-wrap   d-flex  justify-content-center " >
                           <div class="row col-11  mr-4">
                        <div class="col-12 col-lg-4  ">
                            <label class="mt-3">
                              <img src="pesantrend-template/frontend/images/Search.svg" alt="">
                              Looking For Program
                            </label>
                            </div>
                            <div class="col-12 col-lg-4 mt-2">
                                <select class="custom-select bg-transparent form-control" id="#">
                                  <option value="" selected disabled>Enter Your Program</option>
                                  <option>Value 1</option>
                                  <option>Value 2</option>
                                  <option>Value 3</option>
                                </select>
                              </div>
                              <div class="col-12 col-lg-4">  
                            <button type="button" class="btn btn-booking ">Reservasi!</button>
                          </div> 
                        </div>
                      </div>
                    <!-- </pre>  -->
                    </div> 
                    <div class="col-lg-6 mt-3">
                        <picture>
                                <img class="d-block w-100"  src="pesantrend-template/frontend/images/header-1.png" alt="">
                             </picture>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             </div>
           </div>
         </div>
       </div>
      </section>

<!-- about -->
      <section>
        <div class="container mt-5">
          <div class="row">
            <div class="col-lg-6 mt-2">
              <picture>
                <img class="d-block w-100 "  src="pesantrend-template/frontend/images/about.png" alt="">
              </picture>
            </div>
            <div class="col-lg-6">
              <h2 class="cocogoose font-wight-normal">
                <span class="text-black">
                  Take The Best
                  <span class="artichoke">
                    Everyday And
                  </span>
                </span>
                <br>
                   Enjon Your Program
              </h2>
              <h5 class="text-justify text-black mt-4">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since 
                  the 1500s, when an unknown printer took a galley of type and scrambled it 
                  to make a type specimen book. took a galley of type and scrambled it 
                  to make a type specimen book. took a galley of type and scrambled it 
                  to make a type specimen book.                 
              </h5>
              <div class="row mb01">
                <div class="d-flex"> 
                  <label for="" class="btn btn-default text-center">
                    <span class="h2 seal-brown">
                      5
                    </span>
                    <br>
                    Lorem Ipsum
                  </label>
                </div>
                <div class="d-flex"> 
                  <label for="" class="btn btn-default text-center">
                    <span class="h2 seal-brown">
                      5
                    </span>
                    <br>
                    Lorem Ipsum
                  </label>
                </div>
                <div class="d-flex"> 
                  <label for="" class="btn btn-default text-center">
                    <span class="h2 seal-brown">
                      5
                    </span>
                    <br>
                    Lorem Ipsum
                  </label>
                </div>
              </div>
              <button class="btn btn-about">Explore About Us</button>
            </div>
          </div>
        </div>
      </section>

<!-- kategori -->
      <section>
        <div class="container mt-5">
          <div class="row">
            <div class="col-lg-6 mt-2">
              <h5 class="seal-brown font-weight-semi">
                Start Learning Today
              </h5>
              <h3 class="text-black font-weight-bold">
                Temui Program Berdasrkan
                <span class="artichoke font-weight-bold">
                  Kategori
                </span>
                Yang Kami Sediakan
              </h3>
              <div class="mt-5 row course-categories">
              {{-- @foreach($items as $item) 
                <div class="col-lg-4 col-sm-6 col-12">
                  <div class="item-category">
                    <img src="#"  class="icon " alt="">
                    <div class="mt-4">
                      <a href="#">
                        <h2 class="categories-text">
                          {{  $category->name }}
                        </h2>
                      </a>
                    </div>
                  </div>
                </div>
              @endforeach --}}
                {{-- <div class="col-lg-4 col-sm-6 col-12">
                  <div class="item-category">
                    <img src="pesantrend-template/frontend/images/event.svg" class="icon" alt="">
                    <div class="mt-4">
                      <a href="#">
                        <h2 class="categories-text">
                          Event
                        </h2>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                  <div class="item-category">
                    <img src="pesantrend-template/frontend/images/visit.svg" class="icon" alt="">
                    <div class="mt-4">
                      <a href="#">
                        <h2 class="categories-text">
                          Visit
                        </h2>
                      </a>
                    </div>
                  </div>
                </div> --}}
              </div>
            </div>
              <div class="col-lg-6 mt-3">
                <picture>
                  <img class="d-block w-100"  src="pesantrend-template/frontend/images/hourse.png" alt="Sukses Tanpa Batas dengan Hosting Indonesia">
                </picture>
              </div>
          </div>
        </div>                  
      </section>

<!-- program -->
      <section>
        <div class="container mt-5">
          <div class="row">
            <div class="col-lg-6 mt-2">
              <h5 class="seal-brown font-weight-semi">
                Program
              </h5>
              <h3 class="text-black font-weight-bold">
                Kumpulan Program Yang Dijalanin 
                <br>
                sama
                <span class="artichoke">
                  Pesan_Trend
                </span>
              </h3>
            </div>
            <div class="col-lg-2 col-12 d-none d-sm-block offset-lg-4 ">
              <button class="btn btn-login ml-5">
                All Program
              </button>
            </div>
          </div>
            <div class="card-body">
              <div class="row">
                 @forelse ($programs as $program)
                <div class="col-md-12 col-lg-6 col-xl-4">
                  <div class="card mb-2 bg-gradient-dark">
                    <img class="card-img-top" src="pesantrend-template/frontend/images/study.png" alt="">
                      <div class="card-body kategori-card ">
                      <!-- <div class="d-sm-block"> -->
                        <button class="btn btn-block btn-card  btn-xs disabled">
                            {{ $program->kategori_program->nama }}          
                        </button>
                        <p class="card-title text-black h5 font-weight-bold">
                            {{ $program->nama }}    
                        </p>
                        <p class="card-text text-black h6 text-justify mr-2 mb-3">
                           {!!strlen($program->keterangan) > 500 ? substr($program->keterangan,0,500) : $program->keterangan!!}
                        </p>
                        <a href="{{ route('detail', $program->slug) }}" class="seal-brown">lihat selengkapnya</a>
                        {{-- {{ route('pengumuman', $pengumuman->id) }} --}}
                      </div>
                    </div>   
                  </div>
                      @empty
                        <div
                                class="col-12 text-center py-5"
                                data-aos="fade-up"
                                data-aos-delay="100"
                            >
                                No Program Found
                            </div>
                    @endforelse
                 {{-- <div class="col-md-12 col-lg-6 col-xl-4">
                  <div class="card mb-2 bg-gradient-dark">
                    <img class="card-img-top" src="pesantrend-template/frontend/images/study.png" alt="">
                      <div class="card-body kategori-card ">
                      <!-- <div class="d-sm-block"> -->
                        <button type="button" class="btn btn-block btn-card  btn-xs disabled">
                            Study          
                        </button>
                        <p class="card-title text-black h5 font-weight-bold">
                          Post votum promissa
                        </p>
                        <p class="card-text text-black h6 text-justify mr-2 mb-3">
                          Neque porro quisquam est qui dolorem 
                          ipsum quia dolor sit amet Neque porro 
                          quisquam est qui dolorem  ipsum quia dolor.
                        </p>
                        <a href="#" class="seal-brown">lihat selengkapnya</a>
                      </div>
                    </div>   
                  </div>
                    <div class="col-md-12 col-lg-6 col-xl-4">
                      <div class="card mb-2 bg-gradient-dark">
                        <img class="card-img-top" src="pesantrend-template/frontend/images/study.png" alt="">
                          <div class="card-body kategori-card ">
                          <!-- <div class="d-sm-block"> -->
                            <button class="btn btn-block btn-card  btn-xs disabled">
                                Study          
                            </button>
                            <p class="card-title text-black h5 font-weight-bold">
                              Post votum promissa
                            </p>
                            <p class="card-text text-black h6 text-justify mr-2 mb-3">
                              Neque porro quisquam est qui dolorem 
                              ipsum quia dolor sit amet Neque porro 
                              quisquam est qui dolorem  ipsum quia dolor.
                            </p>
                            <a href="#" class="seal-brown">lihat selengkapnya</a>
                          </div>
                        </div>   
                      </div> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </section>

@endsection
