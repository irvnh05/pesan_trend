@extends('frontend.layouts.app')
@vite(['resources/css/app-frontend.css'])
@vite(['resources/js/app-frontend.js'])
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
@section('title') {{$$module_name_singular->name}} - {{ __("Tags") }} @endsection

@section('content')

{{ ($$module_name_singular->programcategory) }}

  

<section class="bg-gray-100 text-gray-600 py-20">
    <div class="container mx-auto flex px-5 items-center justify-center flex-col">
        <div class="lg:w-2/3 w-full">
            <div class="row py-20">
                <div class="col-12">
                  <h1 class="text-center text-2xl font-semibold">Detail</h1>
                  <hr class="my-4">
                </div>
                <div class="col-7">
                  <div class="card">
                    {{-- <div class="card-body">
                      <h2 class="card-title">Members Going</h2>
                      <div class="flex flex-wrap items-center mb-2">
                        <img src="https://source.unsplash.com/60x60/?portrait" class="w-10 h-10 rounded-full mr-2 mb-2">
                        <img src="https://source.unsplash.com/60x60/?person" class="w-10 h-10 rounded-full mr-2 mb-2">
                        <img src="https://source.unsplash.com/60x60/?woman" class="w-10 h-10 rounded-full mr-2 mb-2">
                        <img src="https://source.unsplash.com/60x60/?man" class="w-10 h-10 rounded-full mr-2 mb-2">
                        <img src="https://source.unsplash.com/60x60/?young" class="w-10 h-10 rounded-full mr-2 mb-2">
                        <span class="text-gray-500 text-sm ml-2">(5 members)</span>
                      </div>
                      <hr class="my-4">
                      <h2 class="card-title">Trip Information</h2>
                      <table class="w-full">
                        <tbody>
                          <tr>
                            <th class="text-gray-600 pr-2">Date of Departure:</th>
                            <td class="text-gray-800">January 1, 2023</td>
                          </tr>
                          <tr>
                            <th class="text-gray-600 pr-2">Duration:</th>
                            <td class="text-gray-800">3D 4N</td>
                          </tr>
                          <tr>
                            <th class="text-gray-600 pr-2">Type:</th>
                            <td class="text-gray-800">Open Trip</td>
                          </tr>
                          <tr>
                            <th class="text-gray-600 pr-2">Price:</th>
                            <td class="text-gray-800">$2000 / person</td>
                          </tr>
                        </tbody>
                      </table>
                    </div> --}}
                    <div class="grid gap-4 p-3">

                        <div id="controls-carousel" class="relative w-full" data-carousel="static">
                            <!-- Carousel wrapper -->
                            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                <!-- Item 1 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                </div>
                                <!-- Item 2 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                </div>
                                <!-- Item 3 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                </div>
                                <!-- Item 4 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                </div>
                                <!-- Item 5 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                                </div>
                            </div>
                            <!-- Slider controls -->
                            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                    <span class="sr-only">Previous</span>
                                </span>
                            </button>
                            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>
                        </div>
                        
                        <div class="grid grid-cols-5 gap-4">
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
                            </div>
                        </div>
                        
                        <p class="mb-3 text-gray-500 dark:text-gray-400">Track work across the enterprise through an open, collaborative platform. Link issues across Jira and ingest data from other software development tools, so your IT support and operations teams have richer contextual information to rapidly respond to requests, incidents, and changes.</p>
                        <p class="text-gray-500 dark:text-gray-400">Deliver great service experiences fast - without the complexity of traditional ITSM solutions.Accelerate critical development work, eliminate toil, and deploy changes with ease, with a complete audit trail for every change.</p>

                        
                    </div>
                    
                  </div>
                  
                </div>
                <div class="col-5">
                  <div class="text-center card">
                    <div class="card-body">
                          <div class="px-6 py-4">
                            <h2 class="text-lg font-semibold text-gray-800 mb-2">Members Going</h2>
                            <div class="flex flex-wrap items-center mb-2">
                              <img src="https://source.unsplash.com/60x60/?portrait" class="w-10 h-10 rounded-full mr-2 mb-2">
                              <img src="https://source.unsplash.com/60x60/?person" class="w-10 h-10 rounded-full mr-2 mb-2">
                              <img src="https://source.unsplash.com/60x60/?woman" class="w-10 h-10 rounded-full mr-2 mb-2">
                              <img src="https://source.unsplash.com/60x60/?man" class="w-10 h-10 rounded-full mr-2 mb-2">
                              <img src="https://source.unsplash.com/60x60/?young" class="w-10 h-10 rounded-full mr-2 mb-2">
                              <span class="text-gray-500 text-sm ml-2">(5 members)</span>
                            </div>
                            <hr class="my-4">
                            <h2 class="text-lg font-semibold text-gray-800 mb-2">Trip Information</h2>
                            <table class="w-full">
                              <tbody>
                                <tr>
                                  <th class="text-gray-600 pr-2">Date of Departure:</th>
                                  <td class="text-gray-800">January 1, 2023</td>
                                </tr>
                                <tr>
                                  <th class="text-gray-600 pr-2">Duration:</th>
                                  <td class="text-gray-800">3D 4N</td>
                                </tr>
                                <tr>
                                  <th class="text-gray-600 pr-2">Type:</th>
                                  <td class="text-gray-800">Open Trip</td>
                                </tr>
                                {{-- <tr>
                                  <th class="text-gray-600 pr-2">Price:</th>
                                  <td class="text-gray-800">$2000 / person</td>
                                </tr> --}}
                              </tbody>
                            </table>
                          </div>
                    </div>
                    <div class="px-6 py-4 bg-gray-100">
                      <a href="{{ route("frontend.$module_name.package", [encode_id($$module_name_singular->id), $$module_name_singular->slug]) }}" class="block bg-blue-600 hover:bg-blue-700 text-white text-center font-semibold py-3 px-4 round">
                        Bergabung Sekarang
                      </a>
                      
                      </div>
                  </div>
                  {{-- <div class="card mt-4">
                    <div class="card-body">
                      <h2 class="card-title">Call to Action</h2>
                      <p>Login or Register to Join</p>
                      <a href="https://nomads.buildwithangga.id/login" class="btn btn-primary">Login</a>
                    </div>
                  </div> --}}
                </div>
              
            </div>
          
        </div>
        
    </div>
</section>

{{-- <section class="bg-white text-gray-600 py-20 px-20">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        @foreach ($posts as $post)
        @php
        $details_url = route("frontend.posts.show",[encode_id($post->id), $post->slug]);
        @endphp

        <div class="">
            <div class=" bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="{{$details_url}}">
                    <img class="rounded-t-lg" src="{{$post->featured_image}}" alt="{{$post->name}}" />
                </a>
                <div class="p-5 flex flex-col items-stretch">
                    <a href="{{$details_url}}">
                        <h2 class="mb-2 text-2xl tracking-tight text-gray-900 dark:text-white">
                            {{$post->name}}
                        </h2>
                    </a>
                    <p class="flex-1 h-full mb-3 font-normal text-gray-700 dark:text-gray-400">
                        {{$post->intro}}
                    </p>

                    <div class="text-end">
                        <a href="{{$details_url}}" class="inline-flex items-center text-sm outline outline-1 outline-gray-800 text-gray-700 hover:text-gray-100 bg-gray-200 hover:bg-gray-700 py-2 px-3 focus:outline-none rounded">
                            Read more
                            <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
    <div class="d-flex justify-content-center w-100 mt-4">
        {{$posts->links()}}
    </div>
</section> --}}

@endsection