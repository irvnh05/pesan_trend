    <!-- ====== Navbar Section Start -->
    <div
      class="ud-header absolute top-0 left-0 z-40 flex w-full items-center bg-transparent"
    >
      <div class="container">
        <div class="relative -mx-4 flex items-center justify-between">
          <div class="w-60 max-w-full px-4">
            <a href="index.html" class="navbar-logo block w-full py-5">
              <img
                src="https://masjidraheela.com/wp-content/uploads/2023/03/Asset-3@4x-1024x698.png"
                alt="logo"
                class="header-logo w-full object-contain"
                style="height: 100px; object-position: center top; object-fit: cover;"
              />
            </a>
          </div>
         
          <div class="flex w-full items-center justify-between px-4">
            <div>
              <button
                id="navbarToggler"
                class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden"
              >
                <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-white"
                ></span>
                <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-white"
                ></span>
                <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-white"
                ></span>
              </button>
              <nav
                id="navbarCollapse"
                class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:py-0 lg:px-4 lg:shadow-none xl:px-6"
              >
                <ul class="blcok lg:flex">
                  <li class="group relative">
                    <a
                      href="{{ route('frontend.index') }}"
                      class=" mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70"
                    >
                       {{__('Home')}}
                    </a>
                  </li>
                  <li class="group relative">
                    <a
                      href="#about"
                      class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12"
                    >
                      Profile
                    </a>
                  </li>
                  <li class="group relative">
                    <a
                      href="{{ route('frontend.posts.index') }}"
                      class=" mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70"
                    >
                       {{__('Articles')}}
                    </a>
                  </li>
                  <li class="group relative">
                    <a
                      href="{{ route('frontend.comments.index') }}"
                      class=" mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70"
                    >
                       {{-- {{__('Testimoni')}} --}}
                       Activity
                    </a>
                  </li>
                  <li class="group relative">
                    <a
                      href="#FAQ"
                      class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12"
                    >
                      FAQ
                    </a>
                  </li>
                  {{--  <li class="group relative">
                    <a
                      href="#team"
                      class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12"
                    >
                      Team
                    </a>
                  </li>
                  <li class="group relative">
                    <a
                      href="#contact"
                      class="ud-menu-scroll mx-8 flex py-2 text-base text-dark group-hover:text-primary lg:mr-0 lg:ml-7 lg:inline-flex lg:py-6 lg:px-0 lg:text-white lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12"
                    >
                      Contact
                    </a>
                  </li> --}}
                  {{-- <li class="submenu-item group relative">
                    <a
                      href="javascript:void(0)"
                      class="relative mx-8 flex py-2 text-base text-dark after:absolute after:right-1 after:top-1/2 after:mt-[-2px] after:h-2 after:w-2 after:-translate-y-1/2 after:rotate-45 after:border-b-2 after:border-r-2 after:border-current group-hover:text-primary lg:mr-0 lg:ml-8 lg:inline-flex lg:py-6 lg:pl-0 lg:pr-4 lg:text-white lg:after:right-0 lg:group-hover:text-white lg:group-hover:opacity-70 xl:ml-12"
                    >
                      Catalog
                    </a>
                    <div
                      class="submenu relative top-full left-0 hidden w-[250px] rounded-sm bg-white p-4 transition-[top] duration-300 group-hover:opacity-100 lg:invisible lg:absolute lg:top-[110%] lg:block lg:opacity-0 lg:shadow-lg lg:group-hover:visible lg:group-hover:top-full"
                    >
                      <a
                        href="about.html"
                        class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary"
                      >
                        Product
                      </a>
                      <a
                        href="pricing.html"
                        class="block rounded py-[10px] px-4 text-sm text-body-color hover:text-primary"
                      >
                        Conference/Seminar
                      </a>
                    
                    </div>
                  </li> --}}
                </ul>
              </nav>
            </div>
            <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
              {{-- <a
                href="signin.html"
                class="loginBtn py-3 px-7 text-base font-medium text-white hover:opacity-70"
              >
                Sign In
              </a> --}}
              <a href="#" class="signUpBtn rounded-lg bg-white bg-opacity-20 py-3 px-6 text-base font-medium text-white duration-300 ease-in-out hover:bg-opacity-100 hover:text-dark">
                <span class="mr-2" role="img" aria-label="live"><i class="fab fa-youtube" style="color: #ffffff;"></i></span>
                Live
              </a>
              
              <style>
                .signUpBtn:hover {
                  background-color: #4d5d36;
                  color: #ffffff;
                }
              </style>
            
            
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ====== Navbar Section End -->

    <!-- ====== Hero Section Start -->
    <div
      id="home"
      class="relative overflow-hidden bg-center bg-cover pt-[120px] md:pt-[130px] lg:pt-[160px]"
      style="background-image: url('https://masjidraheela.com/wp-content/uploads/2023/03/bg.jpg')"
    >
      <div class="container">
        <div class="-mx-4 flex flex-wrap items-center">
          <div class="w-full px-4">
            <div
              class="hero-content wow fadeInUp mx-auto max-w-[780px] text-center"
              data-wow-delay=".2s"
            >
              <h1
                class="mb-8 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug md:text-[45px] md:leading-snug"
              >
              <div class="wow fadeInUp text-center" data-wow-delay=".3s">
                <img
                  src="https://masjidraheela.com/wp-content/uploads/2023/03/Asset-3@4x-1024x698.png"
                  alt="image"
                  class="mx-auto max-w-xs opacity-100 transition duration-300 ease-in-out hover:opacity-100"
                  style="width: 550px; height: auto;"
                />
              </div>
              
              
              </h1>
              <p class="mx-auto mb-10 max-w-[600px] text-base text-[#e4e4e4] sm:text-lg sm:leading-relaxed md:text-xl md:leading-relaxed">
                <ul class="mb-4 flex flex-wrap items-center justify-center">
                  <div class="mb-4 flex flex-wrap items-center justify-center">
                    <p class="mr-4 text-base text-[#e4e4e4]">Follow on social media:</p>
                    <ul class="flex items-center">
                      <li class="mr-4">
                        <a href="https://www.instagram.com/masjid.pemudaraheela/" target="_blank" class="inline-flex items-center justify-center w-10 h-10 text-green-500 rounded-full bg-gray-200 hover:bg-gray-300 focus:bg-gray-300">
                          <span class="sr-only">Instagram</span>
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                      <li class="mr-4">
                        <a href="https://www.youtube.com/channel/UC2BCrY3jmGnjEibihD5vIDw" target="_blank" class="inline-flex items-center justify-center w-10 h-10 text-green-500 rounded-full bg-gray-200 hover:bg-gray-300 focus:bg-gray-300">
                          <span class="sr-only">Youtube</span>
                          <i class="fab fa-youtube"></i>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.facebook.com/masjidraheela/" target="_blank" class="inline-flex items-center justify-center w-10 h-10 text-green-500 rounded-full bg-gray-200 hover:bg-gray-300 focus:bg-gray-300">
                          <span class="sr-only">Facebook</span>
                          <i class="fab fa-facebook"></i>
                        </a>
                      </li>
                    
                    </ul>
                  </div>                  
                </ul>
              </p>
              {{-- <p
                class="mx-auto mb-10 max-w-[600px] text-base text-[#e4e4e4] sm:text-lg sm:leading-relaxed md:text-xl md:leading-relaxed"
              > --}}
              <ul class="mb-20 pb-20 flex flex-wrap items-center justify-center">
                  <li>
                    <a
                      href="https://bit.ly/3Z5j1CM"
                      class="inline-flex items-center justify-center rounded-lg bg-white py-4 px-6 text-center text-base font-medium text-dark transition duration-300 ease-in-out hover:text-success hover:shadow-lg sm:px-10"
                    >
                      Support Pembangunan Masjid Raheela
                    </a>
                  </li>
        
                </ul>
              {{-- </p> --}}
          </div>
          </div>


        </div>
      </div>
      <img
        src="/play-tailwind-main/assets/images/Rectangle-footer-header.svg"
        alt="logo"
        class="header-logo w-full"
      />
    </div>
    <!-- ====== Hero Section End -->