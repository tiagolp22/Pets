@extends('partials.base')

@section('title', $produit->nom)

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
                        <div class="h-[480px] rounded-lg mb-4  bg-orange-300">
                            <img class="w-full h-full object-cover" src="{{ Vite::asset('storage/app/public/' . $produit->image) }}" alt="Product Image">
                        </div>
                        <div class="flex -mx-2 mb-4">
                            <div class="px-2">
                                <button
                                    class="inline-block bg-emerald-400 hover:bg-emerald-600 text-white px-4 py-2 rounded-full">Achat</button>
                            </div>
                            <div class="px-2">
                                <a href="{{ route('produit.create') }}"
                                    class="inline-block bg-yellow-400 hover:bg-yellow-600 text-white px-4 py-2 rounded-full">Produit Create</a>
                            </div>
                            <div class="px-2">
                                <a href="{{ route('produit.edit', $produit->id) }}"
                                    class="inline-block bg-blue-400 hover:bg-blue-600 text-white px-4 py-2 rounded-full">Edit</a>
                            </div>
                            <div class="px-2">
                                <form action="{{ route('produit.destroy', $produit->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-block bg-red-400 hover:bg-red-600 text-white px-4 py-2 rounded-full">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="md:flex-1 px-4 text-orange-600 max-w-md">
                        <h2 class="text-2xl font-bold mb-2">{{ $produit->nom }}</h2>
                        <div class="flex mb-4">
                            <div class="mr-4">
                                <span class="font-bold">Price:</span>
                                <span>{{ $produit->prix }}</span>
                            </div>
                            <div>
                                <span class="font-bold">Availability:</span>
                                <span>{{ $produit->active ? 'Available' : 'Unavailable' }}</span>
                            </div>
                        </div>
                        <div>
                            <span class="font-bold">Product Description:</span>
                            <p class="text-sm mt-2 break-words">
                                {{ $produit->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
