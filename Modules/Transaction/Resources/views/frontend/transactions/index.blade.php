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
        <div class="w-full sm:w-8/12 md:w-9/12 lg:w-7/12 xl:w-8/12 mb-4 sm:mb-0 sm:mr-4 p-3">
            <div class="card card-details p-5">
                <!-- Content for the wider card -->
                <h1 class="text-3xl font-bold mb-3 text-gray-900">Who is Going?</h1>
                <p class="text-gray-500">Trip to Ubud, Bali, Indonesia</p>
                <style>
                    .overflow-x-auto {
                    overflow-x: auto;
                    white-space: nowrap;
                    }
                </style>
                <div class="attendee mt-4 overflow-x-auto">
                  <table class="w-full table-auto">
                    <thead class="bg-gray-50">
                      <tr>
                        <th class="px-4 py-2">Picture</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Nationality</th>
                        <th class="px-4 py-2">Visa</th>
                        <th class="px-4 py-2">Passport</th>
                        <th class="px-4 py-2">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2">
                          <img src="https://source.unsplash.com/60x60/?portrait" alt="" height="60" class="rounded-full">
                        </td>
                        <td class="px-4 py-2">Angga Risky</td>
                        <td class="px-4 py-2">CN</td>
                        <td class="px-4 py-2">N/A</td>
                        <td class="px-4 py-2">Active</td>
                        <td class="px-4 py-2">
                              <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-red-500">
                                  <path d="M19 5L5 19M12 6v12" />
                                </svg>
                              </a>
                              
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2">
                          <img src="https://source.unsplash.com/60x60/?portrait" alt="" height="60" class="rounded-full">
                        </td>
                        <td class="px-4 py-2">Galih Pratama</td>
                        <td class="px-4 py-2">SG</td>
                        <td class="px-4 py-2">30 Days</td>
                        <td class="px-4 py-2">Active</td>
                        <td class="px-4 py-2">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 text-red-500">
                                  <path d="M19 5L5 19M12 6v12" />
                                </svg>
                              </a>
                              
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="member mt-3">
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
                    <h3 class="text-base font-semibold mt-2 mb-0">Note</h3>
                    <p class="disclaimer mb-0">
                      You are only able to invite members who have registered in Nomads.
                    </p>
                  </div>
                  
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
                      <td class="w-1/2 text-right">2 person</td>
                    </tr>
                    <tr>
                      <th class="w-1/2">Additional Visa</th>
                      <td class="w-1/2 text-right">$ 190.00</td>
                    </tr>
                    <tr>
                      <th class="w-1/2">Trip Price</th>
                      <td class="w-1/2 text-right">$ 80.00 / person</td>
                    </tr>
                    <tr>
                      <th class="w-1/2">Sub Total</th>
                      <td class="w-1/2 text-right">$ 280.00</td>
                    </tr>
                    <tr>
                      <th class="w-1/2">Total (+Unique)</th>
                      <td class="w-1/2 text-right text-total">
                        <span class="text-blue">$ 279,</span><span class="text-orange">33</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              
                <hr class="my-6">
                <h4 class="text-1xl font-semibold mb-4">Pembayaran</h4>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="midtrans-tab" data-toggle="tab" href="#midtrans" role="tab" aria-controls="midtrans" aria-selected="true">Otomatis (Midtrans)</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="manual-tab" data-toggle="tab" href="#manual" role="tab" aria-controls="manual" aria-selected="false">Manual</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="midtrans" role="tabpanel" aria-labelledby="midtrans-tab">
                        <div class="px-6 py-4 bg-gray-100 my-4">
                            <a href="{{ route("frontend.$module_name.checkout") }}" class="block bg-blue-600 hover:bg-blue-700 text-white text-center font-semibold py-3 px-4 rounded">
                                Bergabung Sekarang
                            </a>
                        
                            <a href="#" class="mt-4 block bg-white hover:bg-white text-black text-center font-semibold py-3 px-4 rounded">
                              Tanya Admin
                            </a>
                        </div>
                    </div>
                   
                    <div class="tab-pane fade" id="manual" role="tabpanel" aria-labelledby="manual-tab">
                        <div class="bank grid grid-cols-1 md:grid-cols-2 gap-6 my-4">
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
                          <div class="bank-item bg-white rounded-lg shadow-lg p-6 flex items-center">
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
                            <a href="#" class="block bg-blue-600 hover:bg-blue-700 text-white text-center font-semibold py-3 px-4 rounded">
                              Konfirmasi Pembayaran 
                            </a>
                            <a href="#" class="mt-4 block bg-white hover:bg-white text-black text-center font-semibold py-3 px-4 rounded">
                              Tanya Admin
                            </a>
                        </div>
                    </div>
                      
                  </div>
                {{-- <hr class="my-6"> --}}
                {{-- <h2 class="text-2xl font-semibold mb-4">Payment Instructions</h2>
                <p class="payment-instructions">
                  Please complete your payment before to continue the wonderful trip
                </p> --}}
              
                {{-- <div class="bank">
                  <div class="bank-item pb-3">
                    <img src="frontend/images/ic_bank.png" alt="" class="bank-image">
                    <div class="description">
                      <h3 class="text-lg font-semibold">PT Nomads ID</h3>
                      <p>
                        0881 8829 8800
                        <br>
                        Bank Central Asia
                      </p>
                    </div>
                  </div>
                  <div class="bank-item">
                    <img src="frontend/images/ic_bank.png" alt="" class="bank-image">
                    <div class="description">
                      <h3 class="text-lg font-semibold">PT Nomads ID</h3>
                      <p>
                        0899 8501 7888
                        <br>
                        Bank HSBC
                      </p>
                    </div>
                  </div>
                </div> --}}
              
              </div>
              
          </div>
        </div>
      </div>
    </div>
  </section>
  
@endsection