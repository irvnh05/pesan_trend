@extends('frontend.layouts.app')
@vite(['resources/css/app-frontend.css'])
@vite(['resources/js/app-frontend.js'])
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
@section('title') {{$$module_name_singular->name}} - {{ __("Tags") }} @endsection

@section('content')


{{-- <section class="bg-gray-100 text-gray-600 py-20">
    <div class="container mx-auto flex px-5 items-center justify-center flex-col py-20">
        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
            <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Standard plan</h5>
            <div class="flex items-baseline text-gray-900 dark:text-white">
                <span class="text-3xl font-semibold">$</span>
                <span class="text-5xl font-extrabold tracking-tight">49</span>
                <span class="ml-1 text-xl font-normal text-gray-500 dark:text-gray-400">/month</span>
            </div>
            <!-- List -->
            <ul role="list" class="space-y-5 my-7">
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">2 team members</span>
                </li>
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">20GB Cloud storage</span>
                </li>
                <li class="flex space-x-3">
                    <!-- Icon -->
                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Integration help</span>
                </li>
                <li class="flex space-x-3 line-through decoration-gray-500">
                    <!-- Icon -->
                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-gray-400 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-base font-normal leading-tight text-gray-500">Sketch Files</span>
                </li>
                <li class="flex space-x-3 line-through decoration-gray-500">
                    <!-- Icon -->
                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-gray-400 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-base font-normal leading-tight text-gray-500">API Access</span>
                </li>
                <li class="flex space-x-3 line-through decoration-gray-500">
                    <!-- Icon -->
                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-gray-400 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-base font-normal leading-tight text-gray-500">Complete documentation</span>
                </li>
                <li class="flex space-x-3 line-through decoration-gray-500">
                    <!-- Icon -->
                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-gray-400 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    <span class="text-base font-normal leading-tight text-gray-500">24×7 phone & email support</span>
                </li>
            </ul>
            <button type="button" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose plan</button>
        </div>
    </div>
</section> --}}
<section class="bg-gray-100 text-gray-600 py-20">
    <div class="container mx-auto flex px-5 items-center justify-center flex-col py-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-{{ count($$module_name_singular->package) < 3 ? count($$module_name_singular->package) : 3 }} gap-8">
            @foreach ($$module_name_singular->package as $package)
            <div class="container mx-auto flex px-5 items-center justify-center flex-col py-20">
                <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">{{$package->name}}</h5>
                    <span class="text-base font-normal leading-tight text-gray-900 dark:text-gray-800 ">{{$package->short_description}}</span>
                    <div class="flex items-baseline text-gray-900 dark:text-white">
                        <span class="text-3xl font-semibold">Rp. </span>
                        <span class="text-5xl font-extrabold tracking-tight">{{$package->price}}</span>
                        <span class="ml-1 text-xl font-normal text-gray-500 dark:text-gray-400">/orang</span>
                    </div>
                    <!-- List -->
                    @php
                        $descriptionValues = explode(',', $package->long_description);
                    @endphp
                    
                    <ul role="list" class="space-y-5 my-7">
                        @foreach ($descriptionValues as $value)
                            <li class="flex space-x-3">
                                @if (strpos($value, 'line-through') !== false)
                                    <!-- Icon -->
                                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-gray-400 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                    <span class="text-base font-normal leading-tight text-gray-500">{{ trim($value, 'line-through ') }}</span>
                                @else
                                    <!-- Icon -->
                                    <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">{{ $value }}</span>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                
                    <!-- {{$package->slug}} -->
                    <!-- <button type="button" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Choose plan</button> -->
                    <a href="{{ route("frontend.transactions.index", [encode_id($$module_name_singular->id), $$module_name_singular->slug,$package->slug]) }}" class="block bg-blue-600 hover:bg-blue-700 text-white text-center font-semibold py-3 px-4 round">
                        Bergabung Sekarang
                      </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


@endsection