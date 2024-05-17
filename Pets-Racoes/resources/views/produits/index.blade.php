@extends('partials.base')

@section('title', $produits)

@section('content')
    @if ($produits->isEmpty())
        <x-alert :type="'danger'">
            Vous n'avez aucun produit à afficher.
        </x-alert>
    @endif

    <main class="container mx-auto p-6">


        <div class="grid grid-cols-4 gap-6">


            <aside class="col-span-1 bg-gray-200 p-4 rounded-lg shadow-lg">
                <h2 class="text-lg font-bold mb-4">Filtres</h2>

                <form method="GET" action="{{ route('produit.index') }}">
                    <div class="mb-4">
                        <h3 class="font-semibold mb-2">Catégorie</h3>
                        <ul class="space-y-2">
                            <li>
                                <label class="flex items-center">
                                    <input type="checkbox" name="categorie[]" value="chats" class="mr-2">
                                    Chats
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center">
                                    <input type="checkbox" name="categorie[]" value="chiens" class="mr-2">
                                    Chiens
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="mb-4">
                        <h3 class="font-semibold mb-2">Prix</h3>
                        <ul class="space-y-2">
                            <li>
                                <label class="flex items-center">
                                    <input type="radio" name="prix" value="0-20" class="mr-2">
                                    Moins de 20 $
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center">
                                    <input type="radio" name="prix" value="20-50" class="mr-2">
                                    20 $ - 50 $
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center">
                                    <input type="radio" name="prix" value="50+" class="mr-2">
                                    Plus de 50 $
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="mb-4">
                        <h3 class="font-semibold mb-2">Marque</h3>
                        <ul class="space-y-2">
                            <li>
                                <label class="flex items-center">
                                    <input type="checkbox" name="marque[]" value="Marque A" class="mr-2">
                                    Marque A
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center">
                                    <input type="checkbox" name="marque[]" value="Marque B" class="mr-2">
                                    Marque B
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold mb-2">Autres filtres</h3>
                        <ul class="space-y-2">
                            <li>
                                <label class="flex items-center">
                                    <input type="checkbox" name="autres[]" value="naturel" class="mr-2">
                                    Naturel
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center">
                                    <input type="checkbox" name="autres[]" value="bio" class="mr-2">
                                    Bio
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="flex justify-between">
                        <button type="submit" class="bg-orange-500 text-white px-4 py-2 rounded">Appliquer</button>
                        <button type="reset" class="bg-gray-300 text-black px-4 py-2 rounded">Effacer</button>
                    </div>
                </form>
            </aside>



            <div class="col-span-3 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                @foreach ($produits as $produit)
                <a href="{{ route('produit.show', ['produit' => $produit->id]) }}">
                    <div
                        class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg group">
                        <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                            viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                            <rect x="159.52" y="175" width="152" height="152" rx="8"
                                transform="rotate(-45 159.52 175)" fill="white" />
                            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)"
                                fill="white" />
                        </svg>
                        <div
                            class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"></div>
                            <img class="relative w-64" src="{{ Vite::asset('storage/app/public/' . $produit->image) }}"
                                alt="Product Image">
                        </div>
                        <div class="relative text-white px-6 pb-6 mt-6">
                            <span class="block opacity-75 -mb-1">{{ $produit->nom }}</span>
                            <div class="flex justify-between">
                                <span class="block font-semibold text-xl">{{ $produit->categorie->nom }}</span>
                                <span
                                    class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">{{ $produit->prix }}</span>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
            </div>
        </div>

    </main>
@endsection
