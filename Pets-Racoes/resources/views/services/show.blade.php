@extends('partials.base')

@section('title', $service->nom)

@section('content')
    <main>
        <div class="relative overflow-hidden py-32 sm:py-40">
            <img src="{{ asset('storage/gato-cao.png') }}" alt="banner" class="absolute inset-0 z-0 h-full w-full object-cover object-right md:object-center">
        </div>

        <div class="py-8">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row -mx-4">
                    <div class="md:flex-1 px-4">
                        <div class="h-[460px] rounded-lg mb-4 bg-orange-300">
                            <img src="{{ asset($service->imageFullpath()) }}" alt="{{ $service->nom }}" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="md:flex-1 px-4 text-orange-600 max-w-md">
                        <h2 class="text-2xl font-bold mb-2">{{ $service->nom }}</h2>
                        <div class="flex mb-4">
                            <div class="mr-4">
                                <span class="font-bold">Prix:</span> {{ $service->prix }}
                            </div>
                        </div>
                        <div>
                            <span class="font-bold">Description:</span>
                            <p class="text-sm mt-2">{{ $service->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
