@extends('partials.base')

@section('title', 'Qui sommes nous')

@section('content')
    <section class="hero-banner w-full h-200 relative">
        <div class="absolute inset-0"></div>
        <img src="{{ Vite::asset('resources/img/7200.jpg') }}" alt="Pet's Rações Logo" class="w-full h-100 object-cover">
    </section>

    <div class="bg-gray-100 py-16 lg:px-40">
        <div class="container mx-auto px-4 flex items-center">
            <div class="w-full md:w-2/3">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 mb-8 text-left">{{__('welcome') }}</h1>
                <p class="text-lg text-gray-700 leading-relaxed mb-8 text-left">{{__('quisommesnous')}}</p>
                <div class="flex justify-center">
                    <a href="#"
                        class="bg-orange-500 hover:bg-pink-600 text-white font-semibold py-3 px-8 rounded-full transition duration-300">{{('__conect') }}</a>
                </div>
            </div>
            <div class="w-full md:w-1/3 flex justify-center">
                <img src="https://www.petsracoesrecife.com.br/wp-content/uploads/2024/04/pets-racoes-h-300.png"
                    alt="Pet's Rações Logo" class="w-64 h-auto">
            </div>
        </div>
    </div>
@endsection
