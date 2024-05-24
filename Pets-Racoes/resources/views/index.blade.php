@extends('partials.base')

@section('title', 'INDEX')

@section('content')


    <main>
        <div class="relative overflow-hidden bg-gray-900 py-32 sm:py-40 lg:p-32">
            <img src="{{ Vite::asset('resources/img/index.png') }}" alt="banner"
                class="absolute inset-0 z-0 h-full w-full object-cover object-right md:object-center opacity-55">
            
            <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
                <div class="mx-auto max-w-2xl lg:mx-0 my-4">
                    <h1 class="text-4xl font-bold tracking-tight sm:text-6xl text-white">{{ __('produits.index.title') }}</h1>
                    <p class="mt-6 text-lg leading-8 tracking-wide font-bold banner text-white md:text-white">
                        {{ __('produits.index.subtitle') }}</p>
                </div>
                <div class="flex flex-row space-x-4">
                    <a href="#"
                        class="bg-yellow-400 text-gray-900 hover:bg-yellow-300 py-2 px-6 rounded-full text-lg font-semibold transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
                        {{ __('produits.index.dog') }}</a>
                    <a href="#"
                        class="bg-yellow-400 text-gray-900 hover:bg-yellow-300 py-2 px-6 rounded-full text-lg font-semibold transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
                        {{ __('produits.index.cat') }}</a>
                    <a href="#"
                        class="bg-yellow-400 text-gray-900 hover:bg-yellow-300 py-2 px-6 rounded-full text-lg font-semibold transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">
                        {{ __('produits.index.other_pets') }}</a>
                </div>
            </div>
        </div>

        <section class="py-8 lg:px-40">
            <div class="container mx-auto">
                <h2 class="text-2xl font-semibold mb-4">{{ __('produits.index.favorite_brands') }}</h2>
                <div class="grid grid-cols-6 md:grid-cols-6 gap-4">
                    <div class="flex items-center justify-center">
                        <img src="{{ Vite::asset('resources/img/Logo_Formula.webp') }}" alt="" class="h-64">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ Vite::asset('resources/img/Logo_Golden.webp') }}" alt="" class="h-64">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ Vite::asset('resources/img/logo-pro-plan.png') }}" alt="" class="h-28 filter grayscale">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ Vite::asset('resources/img/Logo_Royal_Canin@2x.webp') }}" alt="" class="h-64">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ Vite::asset('resources/img/logo-guabi-natural.svg') }}" alt="" class="h-32 filter grayscale">
                    </div>
                    <div class="flex items-center justify-center">
                        <img src="{{ Vite::asset('resources/img/logo-origens.jpeg') }}" alt="" class="h-40 filter grayscale">
                    </div>
                </div>
            </div>
        </section>

        <div class="lg:px-40 w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">
            @foreach ($produits as $produit)
                <a href="{{ route('produit.show', ['produit' => $produit->id]) }}">
                    <div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg group">
                        <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                            viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                            <rect x="159.52" y="175" width="152" height="152" rx="8"
                                transform="rotate(-45 159.52 175)" fill="white" />
                            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)"
                                fill="white" />
                        </svg>
                        <div class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"></div>
                            <img class="relative w-64" src="{{ Vite::asset('storage/app/public/' . $produit->image) }}" alt="Product Image">
                        </div>
                        <div class="relative text-white px-6 pb-6 mt-6">
                            <span class="block opacity-75 -mb-1">{{ $produit->nom }}</span>
                            <div class="flex justify-between">
                                <span class="block font-semibold text-xl">{{ $produit->categorie }}</span>
                                <span class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">{{ $produit->prix }}</span>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </main>
@endsection
