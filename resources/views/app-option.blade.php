@extends('layouts.home-option')

@section('title')
Pesan_Trend
@endsection

@section('content')
     <section>
       <div class="container mt-4 ">
         <div class="row">
           <div class="col-lg-12">
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
              <div class="">
                <div class=" ">
                  <div class="container ">
                    <div class="row mb-2">
                      <div class="col-lg-8 mt-4 p-0 ">
                        <span class="cocogoose display3 p-0 mt-3">
                          (Audio) Penyemangat hidup, mengupas 
                          <span class="text-black">
                            problematika 
                          </span>
                          <span class="text-black">
                            hidup sehari-hari
                          </span>
                        </span>
                        <p class="text-black mt-5 h4 text-justify col-sm-12 col-lg-8 p-0 mb-5">
                          Ada yang mau tiap minggu ikutan live 
                          streaming bersama ustadz @hanan_attaki  ? 
                          Dan tiap malam dapet konten booster ustadz 
                          Hanan Attaki dg durasi lebih panjang (5 - 20 menit)?
                        </p>
                        
                        <div>
                             <a class="btn btn-gabung mt-1 col-lg-5 w-100" href="{{ route('checkout-create', $id->slug) }}">Bergabung Sekarang</a>
                        </div>
                      </div> 
                      <div class="col-4 mb-4 p-0 mt-4">
                        <img class="d-none d-xl-block header-ust" width="370";  src="pesantrend-template/frontend/images/ust.png" alt="" >
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
      
<!-- galeri -->
      <section>
            <div class="container mt-5">
            <!--Carousel Wrapper-->
              <div id="carousel-example-1z" class="carousel slide carousel-fade d-none d-xl-block" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                  <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                  <!--First slide-->
                  <div class="carousel-item active">
                    <img class="d-block w-100 img-fluid" style="height: 550px;" src="pesantrend-template/frontend/images/1.jpg"
                      alt="First slide">
                  </div>
                  <!--/First slide-->
                  <!--Second slide-->
                  <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" style="height: 550px;" src="pesantrend-template/frontend/images/3.jpg"
                      alt="Second slide">
                  </div>
                  <!--/Second slide-->
                  <!--Third slide-->
                  <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" style="height: 550px;" src="pesantrend-template/frontend/images/4.jpg"
                      alt="Third slide">
                  </div>
                  <!--/Third slide-->
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
              </div>
              <!--/.Carousel Wrapper-->
            </div>
      </section>

<!-- about -->
      <section>
        <div class="container mt-5">
          <div class="row">
            <div class="col-lg-5 mt-1">
              <picture>
                <img class=" w-100 img-fluid"   src="pesantrend-template/frontend/images/about.png" alt="">
              </picture>
            </div>
            <div class="col-lg-7 mt-4">
              <h2 class="cocogoose">
                <span class="text-black ">
                  Kawasan 
                  <span class="artichoke"> 
                    Pesan_Trend
                  </span>
                </span>
              </h2>
              <p class="text-justify text-black h5 mt-3">
               Pesan Trend Pemuda adalah sebuah fasilitas yang kita 
               siapkan untuk menjadi bi'ah solihah atau lingkungan 
               yang baik. Sehingga, fasilitas ini menjadi tempat 
               berkumpulnya anak muda dalam belajar Islam, belajar
               dakwah, dan membentuk Life Skill mereka untuk bisa
               berkarya bagi bangsa dan agama. Kebutuhan akan bi'ah 
               solihah atau lingkungan yang baik ini adalah sesuatu 
               yang sangat penting dalam pendidikan pendidikan non formal.  
              </p>
               <a class="col-lg-5 btn btn-gabung mt-3 w-100 " href="http://demo.pemudahijrah.id/tentang-kami">Selengkapnya</a>
            </div>
          </div>
        </div>
      </section>

@endsection
