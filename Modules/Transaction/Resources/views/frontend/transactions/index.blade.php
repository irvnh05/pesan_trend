@extends('frontend.layouts.app')
@vite(['resources/css/app-frontend.css'])
@vite(['resources/js/app-frontend.js']) 
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" /> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
@section('title') {{ __("Tags") }} @endsection

@section('content')

<section class="bg-gray-100 text-gray-600 py-20">
    <div class="container mx-auto flex px-5 items-center justify-center flex-col">

    </div>
</section>
<section class="bg-gray-100 text-gray-600 p-6 sm:p-15">
    <div class="container mx-auto">
      <div class="flex flex-wrap justify-center">
        <div class="w-full sm:w-8/12 md:w-9/12 lg:w-7/12 xl:w-8/12 mb-4 p-3">
            <div class="card card-details p-5">
                <!-- Content for the wider card -->
                <h1 class="text-3xl font-bold mb-3 text-gray-900">Who is Going?</h1>
                <p class="text-gray-500">Advanture to event {{$module_name_singular}}, Bandung</p>
                <style>
                    .overflow-x-auto {
                    overflow-x: auto;
                    white-space: nowrap;
                    }
                </style>
              @if ($package && $package != 'test' && $slug != 'forest camp')
                <div class="attendee mt-4 overflow-x-auto">
                  <table class="w-full table-auto">
                    <thead class="bg-gray-50">
                      <tr>
                        {{-- <th class="px-4 py-2">Picture</th> --}}
                        <th class="px-4 py-2">Nama</th>
                        <th class="px-4 py-2">No Whatsapp</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Kota/Kecamatan</th>
                        @if ($package && $package != 'test') 
                          <th class="px-4 py-2">Action</th> 
                        @endif
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="hover:bg-gray-100">
                        {{-- <td class="px-4 py-2">
                          <img src="https://source.unsplash.com/60x60/?portrait" alt="" height="60" class="rounded-full">
                        </td> --}}
                        <td class="px-4 py-2">irvan</td>
                        <td class="px-4 py-2">CN</td>
                        <td class="px-4 py-2">N/A</td>
                        <td class="px-4 py-2">Bandung Kota</td>
                        @if ($package && $package != 'test') 
                          <td class="px-4 py-2">
                                <a href="#">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-red-500">
                                    <path d="M19 5L5 19M12 6v12" />
                                  </svg>
                                </a>
                                
                          </td>
                        @endif
                      </tr>

                    </tbody>
                  </table>
                </div>
                  <div class="member mt-3">
                    {{-- @if ($package && $package != 'test') --}}
                      <h2 class="text-lg font-semibold mb-2">Add Member</h2>
                      <form class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            {{-- <div>
                              <label for="inputUsername" class="sr-only">Name</label>
                              <input type="text" class="form-input w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="inputUsername" placeholder="Username">
                            </div>
                        
                            <div>
                              <label for="inlineFormCustomSelectPref" class="sr-only">Preference</label>
                              <select class="form-select w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="inlineFormCustomSelectPref">
                                <option selected="" value="">VISA</option>
                                <option value="2">30 Days</option>
                                <option value="3">N/A</option>
                              </select>
                            </div>
                        
                            <div>
                              <label for="doePassport" class="sr-only">DOE Passport</label>
                              <div class="relative">
                                <input type="text" class="form-input w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="doePassport" placeholder="DOE Passport">
                              </div>
                            </div>
                        --}}
                      
                        <!-- Modal toggle -->
                        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                            Toggle Modal
                        </button>
                        
                        <!-- Main modal -->
                        <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 bottom-0 flex items-center justify-center z-50 hidden">
                            <div class="bg-white rounded-lg shadow-lg w-full col-6 max-w-md p-6">
                                <!-- Modal content -->
                                <h2 class="text-2xl font-bold mb-4">Login</h2>
                                <form id="wizard-form">
                                    <div class="step hidden" id="step1">
                                        <div class="mb-4">
                                            <label for="email" class="block mb-2 font-semibold text-gray-800">Email</label>
                                            <input type="email" id="email" placeholder="Enter your email" class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        </div>
                                    </div>
                                    <div class="step hidden" id="step2">
                                        <div class="mb-4">
                                            <label for="password" class=" block mb-2 font-semibold text-gray-800">Password</label>
                                            <input type="password" id="password" placeholder="Enter your password" class=" w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        </div>
                                    </div>
                                    <div class="flex justify-between mt-6">
                                        <button type="button" id="previousBtn" class="bg-gray-300 text-gray-600 font-medium rounded-lg px-4 py-2 focus:outline-none">Previous</button>
                                        <button type="button" id="nextBtn" class="bg-blue-500 hover:bg-blue-600 text-white font-medium rounded-lg px-4 py-2 focus:outline-none">Next</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <script>
                            const form = document.getElementById('wizard-form');
                            const steps = Array.from(document.getElementsByClassName('step'));
                            let currentStep = 0;
                            const previousBtn = document.getElementById('previousBtn');
                            const nextBtn = document.getElementById('nextBtn');
                        
                            function showStep(stepIndex) {
                                steps.forEach((step, index) => {
                                    if (index === stepIndex) {
                                        step.classList.add('active');
                                    } else {
                                        step.classList.remove('active');
                                    }
                                });
                        
                                // Hide or show Previous/Next buttons based on current step
                                if (stepIndex === 0) {
                                    previousBtn.style.display = 'none';
                                } else {
                                    previousBtn.style.display = 'block';
                                }
                        
                                if (stepIndex === steps.length - 1) {
                                    nextBtn.textContent = 'Submit';
                                } else {
                                    nextBtn.textContent = 'Next';
                                }
                                if (stepIndex === 1) {
                                    document.getElementById('step2').classList.remove('hidden');
                                    document.getElementById('step1').classList.add('hidden');
                                } else if (stepIndex === 0) {
                                    document.getElementById('step2').classList.add('hidden');
                                    document.getElementById('step1').classList.remove('hidden');
                                }
                            }
                        
                            function previousStep() {
                                if (currentStep > 0) {
                                    currentStep--;
                                    showStep(currentStep);
                                }
                            }
                        
                            function nextStep() {
                                if (currentStep < steps.length - 1) {
                                    currentStep++;
                                    showStep(currentStep);
                                } else {
                                    // Handle form submission
                                    form.submit();
                                }
                            }
                        
                            // Initialize the form
                            showStep(currentStep);
                            previousBtn.addEventListener('click', previousStep);
                            nextBtn.addEventListener('click', nextStep);
                        </script>
                        
                      
    
                      </form>
                    {{-- @endif --}}
                    <h3 class="text-base font-semibold mt-2 mb-0">Note</h3>
                    <p class="disclaimer mb-0">
                      You are only able to invite members who have registered in Nomads.
                    </p>
                  </div>
              @else
              <form id="default"class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4">
                <div>
                  <label for="inputUsername" class="sr-only">Nama Lengkap</label>
                  <input type="text" class="form-input w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="inputUsername" placeholder="Nama Lengkap">
                </div>
              
                <div>
                  <label for="doePassport" class="sr-only">Tanggal Lahir</label>
                  <div class="relative">
                    <input type="date" class="form-input w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="doePassport" placeholder="Tanggal Lahir">
                  </div>
                </div>
       
                <div>
                  <label for="inputProvince" class="sr-only">Provinsi</label>
                  <select id="inputProvince" class="form-select w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="" disabled selected>Pilih Provinsi</option>
                    <!-- Daftar provinsi -->
                  </select>
                </div>

                <div>
                  <label for="inputCity" class="sr-only">Kota/Kabupaten</label>
                  <select id="inputCity" class="form-select w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="" disabled selected>Pilih Kota/Kabupaten</option>
                    <!-- Daftar kota/kabupaten -->
                  </select>
                </div>

                <div>
                  <label for="inputKecamatan" class="sr-only">Kecamatan</label>
                  <select id="inputKecamatan" class="form-select w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="" disabled selected>Pilih Kecamatan</option>
                    <!-- Daftar kecamatan -->
                  </select>
                </div>
                
                <div>
                  <label for="inputKelurahan" class="sr-only">Kelurahan</label>
                  <select id="inputKelurahan" class="form-select w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="" disabled selected>Pilih Kelurahan</option>
                    <!-- Daftar kelurahan -->
                  </select>
                </div>

              
                <div>
                  <label for="inputPostalCode" class="sr-only">Kode Pos</label>
                  <input type="text" class="form-input w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="inputPostalCode" placeholder="Kode Pos">
                </div>
              
                <div>
                  <label for="inputAddress" class="sr-only">Alamat Rumah</label>
                  <input type="text" class="form-input w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="inputAddress" placeholder="Alamat Rumah">
                </div>

                              
                <style>
                  /* Hide the spinner arrows for number input */
                  input[type="number"]::-webkit-inner-spin-button,
                  input[type="number"]::-webkit-outer-spin-button {
                    -webkit-appearance: none;
                    margin: 0;
                  }
                  input[type="number"] {
                    -moz-appearance: textfield; /* Firefox */
                  }
                </style>
                
                <div>
                  <label for="inputPostalCode" class="sr-only">No Handphone/Whatsapp</label>
                  <input type="number" class="form-input w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="inputPostalCode" placeholder="No Handphone/Whatsapp">
                </div>
                
                <div>
                  <label for="inputAddress" class="sr-only">Email</label>
                  <input type="email" class="form-input w-full px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" id="inputAddress" placeholder="Email">
                </div>
              </form>
              <h3 class="text-base font-semibold mt-2 mb-0">Note</h3>
              <p class="disclaimer mb-0">
                Sebelum melanjutkan, harap lengkapi data Anda terlebih dahulu. Setelah itu, Anda dapat memilih metode pembayaran manual atau otomatis menggunakan layanan Midtrans. Terima kasih atas kerjasamanya.
              </p>
              @endif
              </div>
              
        </div>
        <div class="w-full sm:w-4/12 md:w-3/12 lg:w-5/12 xl:w-4/12 p-3">
          <div class="card">
            <div class="card-body">
                <h2 class="text-2xl font-semibold mb-4">Checkout Information</h2>
                <table class="trip-informations w-full">
                  <tbody>
                    <tr>
                      <th class="w-1/2">Members</th>
                      <td class="w-1/2 text-right">    '
                        @if ($package && $package != 'test' && $slug != 'forest camp')
                         {{$module_name_singular}}
                        @else
                          1 
                        @endif
                      </td>
                    </tr>
                    {{-- <tr>
                      <th class="w-1/2">Additional Visa</th>
                      <td class="w-1/2 text-right">$ 190.00</td>
                    </tr> --}}
                    <tr>
                      <th class="w-1/2">Harga Tiket Event</th>
                      <td class="w-1/2 text-right">Rp.  / orang</td>
                    </tr>
                    <tr>
                      <th class="w-1/2">Total Harga</th>
                      <td class="w-1/2 text-right">Rp.  </td>
                    </tr>
                    {{-- <tr>
                      <th class="w-1/2">Total (+Unique)</th>
                      <td class="w-1/2 text-right text-total">
                        <span class="text-blue">$ 279,</span><span class="text-orange">33</span>
                      </td>
                    </tr> --}}
                  </tbody>
                </table>
              
                <hr class="my-6">
                  <h4 class="text-1xl font-semibold mb-4">Pembayaran</h4>
                  <style>
                    .tab-link {
                      transition: background-color 0.3s ease;
                    }
                  
                    .tab-link.active {
                      background-color: #6B4A1F;
                      color: #fff;
                    }
                  
                    .tab-pane {
                      display: none;
                    }
                  
                    .tab-pane.active {
                      display: block;
                    }
                  </style>
                  
                  <div class="flex flex-col">
                    <nav class="flex space-x-4">
                      <a href="#" class="tab-link px-4 py-2 bg-gray-200 text-gray-600 font-medium border-b-2 border-gray-200" onclick="openTab(event, 'tab1')">Otomatis (Midtrans)</a>
                      <a href="#" class="tab-link px-4 py-2 text-gray-500 font-medium" onclick="openTab(event, 'tab2')">Manual</a>
                    </nav>
                    <div class="mt-4">
                      <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                          <div class="px-6 py-4 bg-gray-100 my-4">
                              <a   id="konfirm-midtrans" href="{{ route("frontend.$module_name.checkout") }}" style="background-color: #6B4A1F;"onclick class="block text-white text-center font-semibold py-3 px-4 rounded">
                                  Bergabung Sekarang
                              </a>
                          
                              <a href="#" class="mt-4 block bg-white hover:bg-white text-black text-center font-semibold py-3 px-4 rounded">
                                Tanya Admin
                              </a>
                          </div>
                        </div>
                        <div class="tab-pane" id="tab2">
                          <div class="bank grid grid-cols-1 md:grid-cols-1 gap-6 my-4">
                            <div class="bank-item bg-white rounded-lg shadow-lg p-6 flex items-center">
                              <img src="https://source.unsplash.com/200x200/?bank" alt="" class="bank-image w-16 h-16 rounded-full">
                              <div class="ml-4">
                                <h3 class="text-xl font-semibold mb-2">PT Nomads ID</h3>
                                <p class="text-gray-600">
                                  0881 8829 8800
                                  <br>
                                  Bank Central Asia
                                </p>
                              </div>
                            </div>
                            <div class="bank-item bg-white rounded-lg shadow-lg p-6 flex items-center my-1">
                              <img src="https://source.unsplash.com/200x200/?bank" alt="" class="bank-image w-16 h-16 rounded-full">
                              <div class="ml-4">
                                <h3 class="text-xl font-semibold mb-2">PT Nomads ID</h3>
                                <p class="text-gray-600">
                                  0899 8501 7888
                                  <br>
                                  Bank HSBC
                                </p>
                              </div>
                            </div>
                          </div>
                            <hr class="my-6">
                          <div class="px-6 py-4 bg-gray-100 my-4">
                              <a id="konfirm" href="{{ route("frontend.$module_name.checkout") }}" style="background-color: #6B4A1F;"onclick class="block  text-white text-center font-semibold py-3 px-4 rounded">
                                Konfirmasi Pembayaran
                              </a>
                              <a href="#" class="mt-4 block bg-white hover:bg-white text-black text-center font-semibold py-3 px-4 rounded">
                                Tanya Admin
                              </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <script>
                      const form = document.getElementById('default');
                      const confirmationButton = document.getElementById('konfirm');
                      const confirmationmidtransButton = document.getElementById('konfirm-midtrans');

                      // Fungsi untuk memeriksa apakah semua inputan terisi
                      function validateForm() {
                        const inputs = form.querySelectorAll('input');

                        for (let i = 0; i < inputs.length; i++) {
                          if (!inputs[i].value) {
                            return false;
                          }
                        }

                        return true;
                      }

                      // Fungsi untuk menangani klik tombol "Konfirmasi Pembayaran"
                      function handleConfirmation(event) {
                        event.preventDefault();

                        if (validateForm()) {
                          // Lakukan proses pembayaran atau tindakan lainnya
                          // console.log('Form is valid. Proceed with payment.');
                          if (event.target === confirmationButton) {
                            // Redirect ke halaman checkout menggunakan href dari confirmationButton
                            window.location.href = confirmationButton.href;
                          } else if (event.target === confirmationmidtransButton) {
                            // Redirect ke halaman checkout menggunakan href dari confirmationmidtransButton
                            window.location.href = confirmationmidtransButton.href;
                          }
                        } else {
                          // Tampilkan pesan kesalahan atau instruksi kepada pengguna
                          alert('Lengkapi dulu data di form sebelum melakukan konfirmasi pembayaran.');
                        }
                      }

                      // Tambahkan event listener untuk tombol "Konfirmasi Pembayaran"
                      confirmationButton.addEventListener('click', handleConfirmation);
                      confirmationmidtransButton.addEventListener('click', handleConfirmation);
                      // Tambahkan event listener untuk memeriksa apakah semua inputan terisi saat input berubah
                      form.addEventListener('input', function() {
                        confirmationButton.disabled = !validateForm();
                        confirmationmidtransButton.disabled = !validateForm();
                      });

                    function openTab(event, tabId) {
                      event.preventDefault();
                  
                      // Hide all tab content
                      var tabContent = document.getElementsByClassName("tab-pane");
                      for (var i = 0; i < tabContent.length; i++) {
                        tabContent[i].classList.remove("active");
                      }
                  
                      // Remove active class from all tab links
                      var tabLinks = document.getElementsByClassName("tab-link");
                      for (var i = 0; i < tabLinks.length; i++) {
                        tabLinks[i].classList.remove("active");
                      }
                  
                      // Show the selected tab content
                      document.getElementById(tabId).classList.add("active");
                  
                      // Add active class to the clicked tab link
                      event.target.classList.add("active");
                    }
                  </script>
            </div>
              
          </div>
        </div>
      </div>
    </div>
  </section>
  
@endsection


</script>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>

  
  
  document.addEventListener('DOMContentLoaded', function() {
    const inputCity = document.getElementById('inputCity');
    const inputProvince = document.getElementById('inputProvince');

    function getCities(provinceId) {
      axios
        .get(`https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=${provinceId}`)
        .then(response => {
          const cities = response.data.kota_kabupaten;
          console.log(cities);
          populateCities(cities);
        })
        .catch(error => {
          console.error('Error:', error.message);
          console.error('Response:', error.response.data);
        });
    }

    function populateCities(cities) {
      inputCity.innerHTML = '';
      cities.forEach(city => {
        const option = document.createElement('option');
        option.value = city.id;
        option.textContent = city.nama;
        inputCity.appendChild(option);
      });
    }

    function populateProvinces(provinces) {
      provinces.forEach(province => {
        const option = document.createElement('option');
        option.value = province.id;
        option.textContent = province.nama;
        inputProvince.appendChild(option);
      });
    }

    function getProvinces() {
      axios
        .get('https://dev.farizdotid.com/api/daerahindonesia/provinsi')
        .then(response => {
          const provinces = response.data.provinsi;
          console.log(provinces);
          populateProvinces(provinces);
        })
        .catch(error => {
          console.error('Error:', error.message);
          console.error('Response:', error.response.data);
        });
    }

    getProvinces();

    inputProvince.addEventListener('change', function() {
      const provinceId = this.value;
      getCities(provinceId);
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    const inputCity = document.getElementById('inputCity');
    const inputKecamatan = document.getElementById('inputKecamatan');
    const inputKelurahan = document.getElementById('inputKelurahan');

    function getKecamatan(cityId) {
      axios
        .get(`https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=${cityId}`)
        .then(response => {
          const kecamatan = response.data.kecamatan;
          console.log(kecamatan);
          populateKecamatan(kecamatan);
        })
        .catch(error => {
          console.error('Error:', error.message);
          console.error('Response:', error.response.data);
        });
    }

    function getKelurahan(kecamatanId) {
      axios
        .get(`https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=${kecamatanId}`)
        .then(response => {
          const kelurahan = response.data.kelurahan;
          console.log(kelurahan);
          populateKelurahan(kelurahan);
        })
        .catch(error => {
          console.error('Error:', error.message);
          console.error('Response:', error.response.data);
        });
    }

    function populateKecamatan(kecamatan) {
      inputKecamatan.innerHTML = '';
      kecamatan.forEach(k => {
        const option = document.createElement('option');
        option.value = k.id;
        option.textContent = k.nama;
        inputKecamatan.appendChild(option);
      });
    }

    function populateKelurahan(kelurahan) {
      inputKelurahan.innerHTML = '';
      kelurahan.forEach(k => {
        const option = document.createElement('option');
        option.value = k.id;
        option.textContent = k.nama;
        inputKelurahan.appendChild(option);
      });
    }

    inputCity.addEventListener('change', function() {
      const cityId = this.value;
      getKecamatan(cityId);
    });

    inputKecamatan.addEventListener('change', function() {
      const kecamatanId = this.value;
      getKelurahan(kecamatanId);
    });
  });
</script>