@extends('partials.base')

@section('title', $service)

@section('content')

    <main>

        <div class="relative overflow-hidden py-32 sm:py-40">
            <img src="{{ Vite::asset('resources/img/gato-cao.png') }}" alt="banner"
                class="absolute inset-0 z-0 h-full w-full object-cover object-right md:object-center">
        </div>

        <div class="py-8">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row -mx-4">
                    <div class="md:flex-1 px-4">
                        <div class="h-[460px] rounded-lg mb-4  bg-orange-300">
                            <img class="" src="{{ Vite::asset('resources/img/product1.png') }}" alt="Product Image">
                        </div>
                        <div class="flex -mx-2 mb-4">
                            <div class="px-2">
                                <button
                                    class="inline-block bg-emerald-400 hover:bg-emerald-600 text-white px-4 py-2 rounded-full">Add
                                    to Cart</button>
                            </div>
                            <div class="px-2\">
                                <button
                                    class="inline-block
                                bg-yellow-400 hover:bg-yellow-600 text-white px-4 py-2 rounded-full">Add
                                to Wishlist</button>
                            </div>
                        </div>
                    </div>
                    <div class="md:flex-1 px-4 text-orange-600 max-w-md">
                        <h2 class="text-2xl font-bold mb-2">{{ $service->nom }}</h2>
                        <div class="flex mb-4">
                            <div class="mr-4">
                                <span class="font-bold">Price:</span>
                                <span>{{ $service->prix }}</span>
                            </div>
                            <div>
                                <span class="font-bold">Availability:</span>
                                <span>{{ $service->active }}</span>
                            </div>
                        </div>
                        <div>
                            <span class="font-bold">Product Description:</span>
                            <p class="text-sm mt-2 break-words">
                                {{ $service->description }}
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        {{-- <div
            class="lg:px-40 w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">
            <div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg group">
                <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                    viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                        fill="white" />
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)"
                        fill="white" />
                </svg>
                <div
                    class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"></div>
                    <img class="relative w-64" src="{{ Vite::asset('resources/img/product1.png') }}" alt="Product Image">
                </div>
                <div class="relative text-white px-6 pb-6 mt-6">
                    <span class="block opacity-75 -mb-1">{{ $service->nom }}</span>
                    <div class="flex justify-between">
                        <span class="block font-semibold text-xl">{{ $service->categorie }}</span>
                        <span
                            class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">{{ $service->prix }}</span>
                    </div>
                </div>
            </div>
        </div> --}}

    </main>

@endsection
