@extends('partials.base')

@section('title', 'INDEX')

@section('content')

    <main>

        <div class="relative overflow-hidden py-32 sm:py-40">
            <img src="{{ Vite::asset('resources/img/gato-cao.png') }}" alt="banner"
                class="absolute inset-0 z-0 h-full w-full object-cover object-right md:object-center">
        </div>

        <div
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
                    <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3">
                    </div>
                    <img class="relative w-64" src="{{ Vite::asset('resources/img/product1.png') }}" alt="">
                </div>
                <div class="relative text-white px-6 pb-6 mt-6">
                    <span class="block opacity-75 -mb-1">Nourritures</span>
                    <div class="flex justify-between">
                        <span class="block font-semibold text-xl">Premier</span>
                        <span
                            class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$36.00</span>
                    </div>
                </div>
            </div>
            <div class="flex-shrink-0 m-6 relative overflow-hidden bg-teal-500 rounded-lg max-w-xs shadow-lg group">
                <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                    viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)"
                        fill="white" />
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)"
                        fill="white" />
                </svg>
                <div
                    class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3">
                    </div>
                    <img class="relative w-64" src="{{ Vite::asset('resources/img/product1.png') }}" alt="">
                </div>
                <div class="relative text-white px-6 pb-6 mt-6">
                    <span class="block opacity-75 -mb-1">Nourritures</span>
                    <div class="flex justify-between">
                        <span class="block font-semibold text-xl">Premier</span>
                        <span
                            class="block bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$45.00</span>
                    </div>
                </div>
            </div>
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
                    <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3">
                    </div>
                    <img class="relative w-64" src="{{ Vite::asset('resources/img/product1.png') }}" alt="">
                </div>
                <div class="relative text-white px-6 pb-6 mt-6">
                    <span class="block opacity-75 -mb-1">Nourritures</span>
                    <div class="flex justify-between">
                        <span class="block font-semibold text-xl">Premier</span>
                        <span
                            class="block bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$68.50</span>
                    </div>
                </div>
            </div>
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
                    <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3">
                    </div>
                    <img class="relative w-64" src="{{ Vite::asset('resources/img/product1.png') }}" alt="">
                </div>
                <div class="relative text-white px-6 pb-6 mt-6">
                    <span class="block opacity-75 -mb-1">Nourritures</span>
                    <div class="flex justify-between">
                        <span class="block font-semibold text-xl">Premiery</span>
                        <span
                            class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$36.00</span>
                    </div>
                </div>
            </div>
            <div class="flex-shrink-0 m-6 relative overflow-hidden bg-teal-500 rounded-lg max-w-xs shadow-lg group">
                <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                    viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8"
                        transform="rotate(-45 159.52 175)" fill="white" />
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)"
                        fill="white" />
                </svg>
                <div
                    class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3">
                    </div>
                    <img class="relative w-64" src="{{ Vite::asset('resources/img/product1.png') }}" alt="">
                </div>
                <div class="relative text-white px-6 pb-6 mt-6">
                    <span class="block opacity-75 -mb-1">Nourritures</span>
                    <div class="flex justify-between">
                        <span class="block font-semibold text-xl">Premier</span>
                        <span
                            class="block bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$45.00</span>
                    </div>
                </div>
            </div>
            <div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg group">
                <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                    viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                    <rect x="159.52" y="175" width="152" height="152" rx="8"
                        transform="rotate(-45 159.52 175)" fill="white" />
                    <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)"
                        fill="white" />
                </svg>
                <div
                    class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                    <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3">
                    </div>
                    <img class="relative w-64" src="{{ Vite::asset('resources/img/product1.png') }}" alt="">
                </div>
                <div class="relative text-white px-6 pb-6 mt-6">
                    <span class="block opacity-75 -mb-1">Nourritures</span>
                    <div class="flex justify-between">
                        <span class="block font-semibold text-xl">Premier</span>
                        <span
                            class="block bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">$68.50</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
