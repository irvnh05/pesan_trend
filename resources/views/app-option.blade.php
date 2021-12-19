@extends('layouts.home-option')

@section('title')
Pesan_Trend
@endsection

@section('content')
<!-- caraousel -->
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
              <div class="carousel-inner">
                <div class="carousel-item active ">
                  <div class="container ">
                    <div class="row mr-5 mb-2">
                      <div class="col-lg-8 mt-4 p-0 ">
                        <h1 class="cocogoose display3 p-0 col-12">
                          (Audio) Penyemangat hidup, mengupas 
                          <span class="text-black">
                            problematika 
                          </span>
                          <span class="text-black">
                            hidup sehari-hari
                          </span>
                        </h2>
                        <p class="text-black mt-5 h4 text-justify col-10 p-0 mb-5">
                          Ada yang mau tiap minggu ikutan live 
                          streaming bersama ustadz @hanan_attaki ? 
                          Dan tiap malam dapet konten booster ustadz 
                          Hanan Attaki dg durasi lebih panjang (5 - 20 menit)?
                        </p>
                        <form action="{{ route('checkout-create', $id) }}" method="post">
                          @csrf
                          <button class="btn btn-gabung mt-4" type="submit">
                              Bergabung Sekarang
                          </button>
                        </form>
                        {{-- <button href="#" class="btn btn-gabung mt-3">Bergabung Sekarang</button> --}}
                      </div> 
                      <div class="col-4 mb-4 p-0 ">
                            <img class="d-none d-xl-block " width="480";  src="pesantrend-template/frontend/images/Ust-UHA.png" alt="" >
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
        <div class="container mt-5 col ">
          <div class="row">
            <div class="container-fluid col-lg-5 lahan ">
                <img class="d-none d-sm-block img-fluid"  src="pesantrend-template/frontend/images/lahan.png" alt="">
            </div>
            <div class="col-lg-7 mt-1 ">
              <h1 class="cocogoose  ml-3">
                <span class="text-black ">
                  Kawasan 
                  <span class="artichoke"> 
                    Pesan_Trend
                  </span>
                </span>
              </h1>
             <div class="mt-4 col-lg-12 ">
                <h4 class="text-justify text-black col-12 p-0">
                  Pesan Trend Pemuda adalah sebuah fasilitas 
                  yang kita siapkan untuk menjadi bi'ah solihah 
                  atau lingkungan yang baik. Sehingga, fasilitas 
                  ini menjadi tempat berkumpulnya anak muda dalam 
                  belajar Islam, belajar dakwah, dan membentuk Life 
                  Skill mereka untuk bisa berkarya bagi bangsa dan agama.
                  Kebutuhan akan bi'ah solihah atau lingkungan yang baik 
                  ini adalah sesuatu yang sangat penting dalam pendidikan 
                  pendidikan non formal. maka sesungguhnya lingkungan inilah 
                  yang paling berpengaruh dalam membentuk prilaku (behaviour) 
                  dan juga karakter para pemuda. Selama ini kita sangat antuasias 
                  dalam membangun fasilitas-fasilitas pendidikan formal untuk 
                  memenuhi kebutuhan akademis dan wawasan anak muda Indonesia 
                  tetapi sayangnya masih sangat sedikit sekali yang mencoba 
                  untuk lebih serius menyediakan fasilitas-fasilitas pendidikan 
                  non formal (bi'ah solihah). 
                </h4>
             {{-- <form action="#" method="post"> --}}
               {{-- @csrf --}}
                <button href="#" class="btn btn-gabung mt-4 " type="submit">
                  Selengkapnya tentang Pesan_Trend
                </button>
              {{-- </form> --}}
             </div>
            </div>
          </div>
        </div>
      </section>
@endsection
