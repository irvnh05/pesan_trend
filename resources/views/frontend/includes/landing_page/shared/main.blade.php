  
  
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Apa itu Pesan Trend?</h3>
              <h2>Pesan Trend bukan pondok pesantren pada umumnya, dia adalah sebuah kawasan untuk menjadi tempat belajar anak muda, yang sifatnya bukan cuman belajar agama, tapi juga belajar tentang hidup
              </h2>
              <p> </p>
              <div class="text-center text-lg-start">
                <a href="https://linktr.ee/pesantrend.id" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Seputar Pesan_Trend</span>
                  <i class=""> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                    </svg>
                  </i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{ asset('/landing-page/assets/img/living.png') }}" style="height: 450px;" class="img-fluid   animate__animated animate__fadeInUp">
          </div>
          

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Event Information</h2>
          <p>Aktivitas Seru - Seruan, Maen, RIding, Belajar Ilmu, Sholat, Doa bareng</p>
        </header>

        <div class="row">

          <div class="col-lg-12">
            <div class="section-body">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header flex items-center justify-between">
                      <div class="text-left">
                        <h4 class="text-xl">Calendar</h4>
                      </div>
                      <div class="text-left">
                        <h6 class="text-sm text-danger">Note: Refresh website jika event gagal tampil di calendar</h6>
                      </div>
                    </div>
                    
                    
                    <div class="card-body">
                      <div class="fc-overflow">
                        <div id="myEvent"></div>
                      </div>
                    </div>
                  </div>
                </div>                
              </div>
            </div>
          </div>
          
        </div><!-- End Feature Tabs -->

                <!-- Feature Tabs -->
                <div class="row feture-tabs" data-aos="fade-up">
                  <div class="col-lg-6">
                    <h3>
                      Aktivitas seru dengan penuh nilai-nilai tetang kehidupan
                    </h3>
        
                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                      <li>
                        <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Spiritual</a>
                      </li>
                      <li>
                        <a class="nav-link" data-bs-toggle="pill" href="#tab2">Nature</a>
                      </li>
                      <li>
                        <a class="nav-link" data-bs-toggle="pill" href="#tab3">Belajar skill</a>
                      </li>
                    </ul><!-- End Tabs -->
        
                    <!-- Tab Content -->
                    <div class="tab-content">
        
                      <div class="tab-pane fade show active" id="tab1">
                        <p>
                         yaitu belajar mengenal Allah, Syariat Allah. Yang kita kenal dengan istilah Muslim Ways.
                        </p>
                      </div><!-- End Tab 1 Content -->
        
                      <div class="tab-pane fade show" id="tab2">
                        <p>
                        mengenal alam atau hidup bersama alam. Konsep hidup bersama alam ini kita menggunakan istilah Living With Nature.
                        </p>
                      </div><!-- End Tab 2 Content -->
        
                      <div class="tab-pane fade show" id="tab3">
                        <p>
                        kenapa harus mempelajari skill? supaya bisa mandiri, supaya bisa bermanfaat untuk orang lain. Dalam konsep belajar skill ini yang di pelajari ada dua hal, yaitu softskill dan hardskill. Nah, ini istilahnya Raheela, artinya mengangkat beban. Apa yang diangkat? Yang diangkat adalah beban ummat.  Tapi, mengangkat beban ini bukan hanya dengan ceramah dan juga narasi, tapi dengan skill yang mereka miliki.
                        </p>
                      </div><!-- End Tab 3 Content -->
        
                    </div>
        
                  </div>
        
                  {{-- example loop ruby --}}
                    {{-- <% @progam.each_slice((@progam.count / 2.0).ceil).with_index do |slice, index| %>
                    <div class="tools-slideshow <%= index.zero? ? 'toRight' : '' %> mt-<%= index.zero? ? '50' : '30' %>">
                      <div id="toolsRow<%= index + 1 %>">
                        <% slice.each do |p| %>
                          <div class="card bg-light mt-3">
                            <img src="/assets/logo-brown-2.png" alt="">
                            <div>
                              <h5 class="title">
                                <%= p.try(:name) %>
                              </h5>
                              <p class="subtitle">
                                <%= p.try(:category) %>
                              </p>
                              <a href="#" class="stretched-link"></a>
                            </div>
                          </div>
                        <% end %>
                      </div>
                    </div>
                  <% end %> --}}

                  {{-- end --}}
                  <div class="col-lg-6 row align-self-center ">
  <div class="mastering-tools pt-50 pb-50">
    <div class="tools-slideshow mt-50">
      <div id="toolsRow1" class="carousel"></div>
    </div>
    <div class="tools-slideshow toRight mt-30">
      <div id="toolsRow2" class="carousel"></div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick.min.js"></script>
<script>
  const toolsRow1 = document.getElementById('toolsRow1');
  const toolsRow2 = document.getElementById('toolsRow2');

  fetch('http://pesan_trend.test/api/programs')
    .then(response => response.json())
    .then(data => {
      const generateCard = (program) => {
        const card = document.createElement('div');
        card.classList.add('card', 'bg-light', 'mt-3');

        const image = document.createElement('img');
        image.src = '/landing-page/assets/img/logo-brown.png';
        card.appendChild(image);

        const content = document.createElement('div');

        const title = document.createElement('h5');
        title.classList.add('title');
        title.textContent = program.name;
        content.appendChild(title);

        const subtitle = document.createElement('p');
        subtitle.classList.add('subtitle');
        subtitle.textContent = program.category.name;
        content.appendChild(subtitle);

        const link = document.createElement('a');
        link.href = '#';
        link.classList.add('stretched-link');
        content.appendChild(link);

        card.appendChild(content);

        return card;
      };

      const initCarousel = (containerId) => {
        $(`#${containerId}`).slick({
          slidesToShow: 2,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 0,
          arrows: false,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
              },
            },
          ],
        });
      };

      data.forEach((program, index) => {
        const card = generateCard(program);
        if (index % 3 === 0) {
          toolsRow1.appendChild(card);
        } else {
          toolsRow2.appendChild(card);
        }
      });

      initCarousel('toolsRow1');
      initCarousel('toolsRow2');
    })
    .catch(error => {
      console.error(error);
    });
</script>

                    </div>
                  </div>
        
                </div><!-- End Feature Tabs -->
        
      </div>

      

    </section><!-- End Features Section -->

    

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <!-- F.A.Q List 1-->
            <div class="accordion accordion-flush" id="faqlist1">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    Apakah wajib konfirmasi kalo udah donasi/transfer?
                  </button>
                </h2>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Sangat di sarankan untuk konfirmasi di whatsapp ya kak ☺️ karna info lebih lengkap dan bisa tanya tanya tentang pesantrend di wa ya kak 🙏🏻
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    Kenapa harus konfirmasi?
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                     1. Karena akan dilist dan diprioritaskan untuk diikutsertakan ke program program terbaru bersama Ustadz Hanan Attaki salah satu program khususnya yaitu yg sudah berjalan ada live streaming khusus Sahabat UHA yg akan dishare secara japri info lanjutan nya oleh MinTrend <br>
                     2. Dan akan dimasukkan oleh MinTrend 1 ke Grup Channel Telegram SAHABAT UHA (Grup Khusus yg sudah support pesan_trend)
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    Kapan dibuka untuk umum? Boleh berkunjung ke Pesan Trend ga? Lokasinya dimana?
                  </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Untuk saat ini lokasi Pesan_trend belum di buka untuk umum kak🙂 Karna masih banyak proses pembangunan yang belum selesai 🙏🏻 Insyaallah saat pesan_trend sudah layak, fasilitas sudah memadai akan di buka secara umum kak ☺️
                  saat sudah di buka kami info kan ya 🙏🏻 mohon pengertian nya
                  </div>
                </div>
              </div>

            </div>
          </div>


        </div>

      </div>

    </section>
    <!-- End F.A.Q Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Kontak</h2>
          <p>Hubungi Kami</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                      <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"/>
                      <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z"/>
                    </svg>
                  </i>
                  <h3>Email</h3>
                  <p>pesan_trend@gmail.com</p>
                </div>
              </div>
              <div class="col-md-12">
                <div class="info-box">
                  <i class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                      <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                    </svg>
                  </i>
                  <h3>Alamat</h3>
                  <p> Jl. Panyawangan Raya No 72,<br> Pasir Angin,<br>RT. 02 / RW 06 Kec. Cilengkrang,<br>Kab. Bandung 40615</p>
                </div>
              </div>

          
            </div>

          </div>

          <div class="col-lg-6">
          <form method="post" id="contactForm" action="/api/contacts" class="php-email-form">
  <div class="row gy-4">
    <div class="col-md-6">
      <input type="text" name="name" class="form-control" placeholder="Your Name" required>
    </div>
    <div class="col-md-6">
      <input type="email" name="email" class="form-control" placeholder="Your Email" required>
    </div>
    <div class="col-md-12">
      <input type="tel" name="no_handphone" class="form-control" placeholder="Your No Handphone" required>
    </div>
    <div class="col-md-12">
      <textarea name="description" class="form-control" rows="5" placeholder="Your Pesan" required></textarea>
    </div>
    <div class="col-md-12 text-center">
      <button type="submit" class="btn btn-light">Kirim Pesan</button>
    </div>
  </div>
</form>

<script>
  document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting

    var form = event.target;
    var formData = new FormData(form);

    fetch('/api/contacts', {
        method: 'POST',
        body: formData,
        headers: {
            'Accept': 'application/json', // Menentukan header 'Accept' sebagai 'application/json'
        },
    })
    .then(function(response) {
        if (!response.ok) {
            throw new Error('Request failed: ' + response.status);
        }
        return response.json();
    })
    .then(function(data) {
        // console.log(data);
        alert('Your message has been sent.');
        // Handle the successful response here
    })
    .catch(function(error) {
        console.error(error);
        // Handle any errors that occur during the request
    });
  });
</script>

          </div>
          
        </div>

      </div>

    </section><!-- End Contact Section -->




    <section id="invoice" class="footer">
      <div class="footer-newsletter">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
              <h4>Periksa Pesanan</h4>
              <p>Segera periksa pesana Anda sekarang juga dengan memasukkan kode transaksi.</p>
            </div>
            <div class="col-lg-6">
              <form action="" method="post"> 
                <input type="email" name="email">
                <input type="submit" value="Periksa Pesanan">
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>