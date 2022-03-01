@extends('layouts.home-option') 

@section('title')
Pesan_Trend
@endsection

@section('content')
      <section>
        <div class="container col-11">
          <div class="row">
            <div class="col-12 ">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 ">
                  <li class="breadcrumb-item"><a class="text-black-50" href="/">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Detail
                  </li>
                </ol>
              </nav>
            </div>
          </div>
          {{-- <p class="my-0">
            Who is program?
          </p> --}}
          <div class="row aos-init aos-animate" >
            <div class="col-12 table-responsive">
              <table class="table table-borderless mb-0">
                <thead>
                  <tr style="border-bottom: 1px solid rgb(219, 219, 219);">
                    {{-- <th scope="col">Image</th> --}}
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">No Whatsapp</th>
                    <th scope="col">Menu</th>
                  </tr>
                  <hr style="border-bottom: 1px solid rgb(219, 219, 219);" class="mb-0">
                </thead>
                <tbody>
                  <tr>
                    {{-- <td style="width: 25%;">
                      <img src="/images/product-cart-1.jpg" alt="" class="cart-image">
                    </td> --}}
                    <td style="width: 35%;">
                      <div class="subtitle"> Andi Sukka</div>
                    </td>
                    <td style="width: 35%;">
                      <div class="subtitle">andi@gmail.com</div>
                    </td>
                    <td style="width: 25%;">
                      <div class="subtitle">081563245698</div>
                    </td>
                    <td style="width: 20%;">
                      <a href="#" class="btn btn-nose">
                        Remove
                      </a>
                    </td>
                  </tr>
                  <tr>
                    {{-- <td style="width: 25%;">
                      <img src="/images/cart-2.jpg" alt="" class="cart-image">
                    </td> --}}
                    <td style="width: 25%;">
                      <div class="subtitle"> Angga</div>
                    </td>
                    <td style="width: 25%;">
                      <div class="subtitle">angga@gmail.com</div>
                    </td>
                    <td style="width: 25%;">
                      <div class="subtitle">081563245698</div>
                    </td>
                    <td style="width: 25%;">
                      <a href="#" class="btn btn-nose">
                        Remove
                      </a>
                    </td>
                  </tr>
                  <tr>
                    {{-- <td style="width: 25%;">
                      <img src="/images/product-cart-3.jpg" alt="" class="cart-image">
                    </td> --}}
                    <td style="width: 25%;">
                      <div class="product-subtitle">Addictex</div>
                    </td>
                    <td style="width: 25%;">
                      <div class="product-subtitle">add@gmail.com</div>
                    </td>
                    <td style="width: 25%;">
                      <div class="product-subtitle">081563245698</div>
                    </td>
                    <td style="width: 25%;">
                      <a href="#" class="btn btn-nose">
                        Remove
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row aos-init" data-aos="fade-up" data-aos-delay="150">
            <div class="col-12">
              <hr>
            </div>
            <div class="col-12">
              <h2 class="mb-4">Add Member</h2>
            </div>
          </div>
          <div class="row mb-2 aos-init" data-aos="fade-up" data-aos-delay="200">
            <div class="col-md-4">
              <div class="form-group">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="nama">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                {{-- <input type="text" class="form-control" id="email" name="email" placeholder="email"> --}}
                 <select class="custom-select form-control-border @error('provinves_id') is-invalid @enderror" name="provinves_id" id="province" >
                  <option value="">== Pilih Paket ==</option>
                  {{-- @foreach ($provinces as $id => $name) --}}
                      <option value="" disabled class="black-50">--Family--</option>
                      <option value="">Dewasa</option>
                      <option value="">Anak</option>
                      <option value="" disabled class="black-50">--Personal--</option>
                      <option value="">Gender</option>
                  {{-- @endforeach --}}
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="email">
              </div>
            </div>
            <div class="col-md-12">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Bawa Kendaraan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tidak Bawa</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                          <div class="mt-3">
                      <h7 class="text-black">Informasi Penting</h7>
                      <p class="text-black-50">Proses konfirmasi pembayaran  akan membutuhkan waktu sekitar - menit (dari pesan WhatsApp dikirim)
                          . Mohon menunggu dengan sabar dan terima kasih.
                      </p>
                    </div>
                  <div class="row">
                    <div class="col-md-4 " style="padding-right: 20px;">
                      <div class="form-group ">
                      <select class="custom-select form-control-border @error('provinves_id') is-invalid @enderror" name="provinves_id" id="province" >
                       <option value="">== Pilih Jenis Kendaraan ==</option>
                        {{-- @foreach ($provinces as $id => $name) --}}
                       <option value="" >Mobil</option>
                       <option value="" >Motor</option>
                      {{-- @endforeach --}}
                      </select>
                    </div>
                   </div> 
                     <div class="col-md-4"  style="padding-right: 20px;">
                       <div class="form-group" >
                            <select class="custom-select form-control-border @error('provinves_id') is-invalid @enderror" name="provinves_id" id="province" >
                            <option value="">== Pilih Tipe Kendaraan ==</option>
                            {{-- @foreach ($provinces as $id => $name) --}}
                                <option value="" >Honda Civic</option>
                                <option value="" >Yamaha Nmax</option>
                                <option value="" >Lainnya</option>
                            {{-- @endforeach --}}
                          </select>
                       </div>
                    </div>  
                    <div class="col-md-4">
                        <div class="form-group ">
                          <input type="text" class="form-control" id="email" name="email" placeholder="plat nomor">
                        </div>
                    </div>
                      <div class="col-md-12 mb-0 ">
                        <div class="form-group">
                        <a href="#" class=" btn btn-nature  btn-block">
                          Add Now
                        </a>
                        </div>
                      </div>
                  </div>
                 </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="mt-3">
                      <h7 class="text-black">Informasi Penting</h7>
                      <p class="text-black-50">Proses konfirmasi pembayaran  akan membutuhkan waktu sekitar - menit (dari pesan WhatsApp dikirim)
                          . Mohon menunggu dengan sabar dan terima kasih.
                      </p>
                    </div>
                      <div class="col-md-12 mb-0 mt-3">
                        <div class="form-group">
                        <a href="#" class=" btn btn-nature  btn-block">
                          Add Now
                        </a>
                        </div>
                      </div>
                </div>
              </div>
            </div>
            {{-- <div class="col-md-3">
              <div class="form-group">
               <a href="#" class="btn btn-nature btn-block">
                Add Now
               </a>
              </div>
            </div> --}}
            {{-- <div class="col-md-5">
              <div class="form-group">
                <label for="country">Country</label>
                <input type="text" class="form-control" id="country" name="country" value="Indonesia">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" class="form-control" id="mobile" name="mobile" value="+628 2020 11111">
              </div>
            </div> --}}
            {{-- <div class="col-md-3 mt-4">
              <div class="form-group">
               <a href="#" class=" disabled btn btn-success mt-2 btn-block">
                Add Now
               </a>
              </div>
            </div> --}}
          </div>
          <div class="row aos-init" data-aos="fade-up" data-aos-delay="150">
            <div class="col-12">
              <hr>
            </div>
            <div class="col-12 mb-4">
              <h2>Pilih Metode Pembayaran</h2>
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active text-black" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                    Manual Transfer
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-black" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                    Virtual Account
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <h7 class="text-black">Informasi Pembayaran</h7>
          <div class="tab-content mt-1" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <div class="row" >
            <div class="col-4 col-md-3">
              <div class="product-title ">$10</div>
              <div class="product-subtitle text-black-50">Orang</div>
            </div>
            <div class="col-4 col-md-3">
              <div class="product-title">$280</div>
              <div class="product-subtitle text-black-50">Infaq/orang</div>
            </div>
            <div class="col-4 col-md-3">
              <div class="product-title seal-brown">$280</div>
              <div class="product-subtitle text-black-50">Total Infaq</div>
            </div>
          </div>
             <h7 class="text-black">Transfer Pembayaran</h7>
              <div class="row mt-2">
                <div class="mt-1 col-4 col-md-3">
                  <img src="/storage/assets/images/logo_bank_mandiri_buildwithangga.png" class="mb-2 logo">
                    <p class="info">
                      Yayasan Pemuda Hijrah
                    </p>
                    <p class="info">
                    <strong>1030007801844</strong>
                    </p>
                  </div>
                  <div class="mt-1 col-4 col-md-3">
                   <img src="/storage/assets/images/logo_bank_mandiri_buildwithangga.png" class="mb-2 logo">
                    <p class="info">
                      Yayasan Pemuda Hijrah
                    </p>
                    <p class="info">
                    <strong>1030007801844</strong>
                    </p>
                  </div>
                  <div class="mt-1 col-4 col-md-3">
                   <img src="/storage/assets/images/logo_bank_mandiri_buildwithangga.png" class="mb-2 logo">
                    <p class="info">
                      Yayasan Pemuda Hijrah
                    </p>
                    <p class="info">
                    <strong>1030007801844</strong>
                    </p>
                  </div>
                <div class="col-md-3 my-2">
                  <div class="form-group">
                  <a href="#" class="btn btn-nature btn-block">
                    Konfirmasi Pembayaran 
                  </a>
                  <a href="#" class="btn btn-outline-nature  btn-block">
                     Lihat Jam Operasioanal 
                   </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row" >
            <div class="col-4 col-md-3">
              <div class="product-title ">$10</div>
              <div class="product-subtitle text-black-50">Orang</div>
            </div>
            <div class="col-4 col-md-3">
              <div class="product-title">$280</div>
              <div class="product-subtitle text-black-50">Infaq/orang</div>
            </div>
            <div class="col-4 col-md-3">
              <div class="product-title seal-brown">$280</div>
              <div class="product-subtitle text-black-50">Total Infaq</div>
            </div>
            {{-- <div class="col-4 col-md-2">
              <div class="product-title text-success">$392,409</div>
              <div class="product-subtitle">Total</div>
            </div> --}}
            <div class="col-md-3 my-2">
              <div class="form-group">
               <a href="#" class="btn btn-nature btn-block">
                Bayar Menggunakan Midtrans
               </a>
              </div>
            </div>
          </div>
              {{-- <div class="form-group ">
                <a href="#" class="btn btn-nature btn-block col-lg-3 w-100  ">
                  Bayar Menggunakan Midtrans 
                </a>
              </div> --}}
            </div>
          </div>
          <div>
             <h7 class="text-black">Informasi Penting</h7>
             <p class="text-black-50">Proses konfirmasi pembayaran  akan membutuhkan waktu sekitar - menit (dari pesan WhatsApp dikirim)
                . Mohon menunggu dengan sabar dan terima kasih.
             </p>
          </div>
             <h7 class="text-black">Butuh bantuan? hubungi kami</h7>
                <div class="row" >
            <div class="col-4 col-md-3">
              <div class="product-subtitle">Nama Admin </div>
              <div class="product-title text-black-50">Humas</div>
            </div>
            <div class="col-4 col-md-3">
              <div class="product-subtitle">humas@gmail.com</div>
              <div class="product-title text-black-50">Gmail</div>
            </div>
            <div class="col-4 col-md-3">
              <div class="product-subtitle">@shift</div>
              <div class="product-title text-black-50">Instagram</div>
            </div>
             <div class="col-md-3 my-2">
              <div class="form-group">
               <a href="#" class="btn btn-nature btn-block">
                WhatsApp Ke Admin
               </a>
              </div>
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


$("#form-input").css("display","none"); //Menghilangkan form-input ketika pertama kali dijalankan
$(".detail").click(function(){ //Memberikan even ketika class detail di klik (class detail ialah class radio button)
if ($("input[name='open']:checked").val() == "yes" ) { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
$("#form-input").slideDown("fast"); //Efek Slide Down (Menampilkan Form Input)
} else {
$("#form-input").slideUp("fast"); //Efek Slide Up (Menghilangkan Form Input)
}
});

});

</script>

 @endpush