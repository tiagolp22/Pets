@extends('partials.base')

@section('title', $produit->nom)

@section('content')
<main>
    <div class="relative overflow-hidden py-32 sm:py-40">
        <img src="{{ Vite::asset('resources/img/autres.gif') }}" alt="banner"
             class="absolute inset-0 z-0 h-full w-full object-cover object-right md:object-center">
    </div>

    <div class="py-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row -mx-4">
                <div class="md:flex-1 px-4">
                    <div class="h-[460px] rounded-lg mb-4 bg-orange-300">
                        <img class="w-full h-full object-cover"
                                src="{{ Vite::asset('storage/app/public/' . $produit->image) }}" alt="Product Image">
                    </div>
                    <div class="flex items-center justify-center space-x-2">
                        @can('create', $produit)
                        <div class="px-2">
                            <a href="{{ route('produit.create') }}"
                                class="inline-block bg-yellow-400 hover:bg-yellow-600 text-white px-4 py-2 rounded-md">Produit
                                Create</a>
                        </div>
                        @endcan
                        @can('update', $produit)
                        <div class="px-2">
                            <a href="{{ route('produit.edit', $produit->id) }}"
                                class="inline-block bg-blue-400 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Edit</a>
                        </div>
                        @endcan
                        @can('delete', $produit)
                        <div class="px-2">
                            @auth
                            <form action="{{ route('produit.destroy', $produit->id) }}" method="POST"
                                class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-400 hover:bg-red-600 text-white px-4 py-2 rounded-md">Delete</button>
                            </form>
                            @endauth
                        </div>
                        @endcan
                    </div>
                </div>

                <div class="md:flex-1 px-4 text-orange-600 max-w-md">
                    <h2 class="text-2xl font-bold mb-2">{{ $produit->nom }}</h2>
                    <div class="flex mb-4">
                        <div class="mr-4">
                            <span class="font-bold">Prix:</span> {{ $produit->prix }}
                        </div>
                    </div>
                    <div>
                        <span class="font-bold">Description:</span>
                        <p class="text-sm mt-2">{{ $produit->description }}</p>
                    </div>
                    <a href="{{ route('checkout.form', $produit->id) }}" class="btn btn-primary mt-3 inline-block px-6 py-3 rounded-md shadow-lg bg-blue-500 hover:bg-blue-600 text-white">Acheter</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
