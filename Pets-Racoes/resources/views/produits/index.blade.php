@extends('partials.base')

@section('title', $produits)

@section('content')
    @if ($produits->isEmpty())
        <x-alert :type="'danger'">
            {{ __('produits.index.x-alert') }}
        </x-alert>
    @endif
    <div class="relative overflow-hidden bg-gray-900 py-32 sm:py-40 lg:p-32">
        @php
            $bannerImage = 'autres.png';
            if (request()->has('categorie')) {
                $categorie = (array) request('categorie');
                if (in_array('chien', $categorie)) {
                    $bannerImage = 'chien.png';
                } elseif (in_array('chat', $categorie)) {
                    $bannerImage = 'chat.png';
                } elseif (in_array('oiseau', $categorie)) {
                    $bannerImage = 'oiseau.png';
                }
            }
        @endphp

        <img src="{{ Vite::asset('resources/img/' . $bannerImage) }}" alt="banner"
            class="absolute inset-0 z-0 h-full w-full object-cover object-right md:object-center opacity-55">

        <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10">
            <div class="mx-auto max-w-2xl lg:mx-0 my-4">
                <h1 class="text-4xl font-bold tracking-tight sm:text-6xl text-white">{{ __('produits.index.title') }}</h1>
                <p class="mt-6 text-lg leading-8 tracking-wide font-bold banner text-white md:text-white">
                    {{ __('produits.index.subtitle') }}</p>
            </div>
        </div>
    </div>

    <main class="container mx-auto p-6">

        <div class="grid grid-cols-4 gap-6">
            <aside class="col-span-1 bg-gray-200 p-4 rounded-lg shadow-lg">
                <h2 class="text-lg font-bold mb-4">{{ __('produits.index.filters') }}</h2>
                <form method="GET" action="{{ route('produit.index') }}">
                    <div class="mb-4">
                        <h3 class="font-semibold mb-2">{{ __('produits.index.category') }}</h3>
                        <ul class="space-y-2">
                            <li>
                                <label class="flex items-center">
                                    <input type="checkbox" name="categorie[]" value="chat" class="mr-2"
                                        {{ in_array('chat', (array) request('categorie', [])) ? 'checked' : '' }}>
                                    {{ __('produits.index.cats') }}
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center">
                                    <input type="checkbox" name="categorie[]" value="chien" class="mr-2"
                                        {{ in_array('chien', (array) request('categorie', [])) ? 'checked' : '' }}>
                                    {{ __('produits.index.dogs') }}
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center">
                                    <input type="checkbox" name="categorie[]" value="autres" class="mr-2"
                                        {{ in_array('autres', (array) request('categorie', [])) ? 'checked' : '' }}>
                                    {{ __('produits.index.other_pets') }}
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="mb-4">
                        <h3 class="font-semibold mb-2">{{ __('produits.index.price') }}</h3>
                        <ul class="space-y-2">
                            <li>
                                <label class="flex items-center">
                                    <input type="radio" name="prix" value="0-20" class="mr-2"
                                        {{ request('prix') == '0-20' ? 'checked' : '' }}>
                                    {{ __('produits.index.under_20') }}
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center">
                                    <input type="radio" name="prix" value="20-50" class="mr-2"
                                        {{ request('prix') == '20-50' ? 'checked' : '' }}>
                                    {{ __('produits.index.between_20_50') }}
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center">
                                    <input type="radio" name="prix" value="50+" class="mr-2"
                                        {{ request('prix') == '50+' ? 'checked' : '' }}>
                                    {{ __('produits.index.over_50') }}
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="mb-4">
                        <h3 class="font-semibold mb-2">{{ __('produits.index.name') }}</h3>
                        <input type="text" name="nom" value="{{ request('nom') }}" class="w-full p-2 border rounded"
                            placeholder="{{ __('produit') }}">
                    </div>
                    <div class="flex justify-between">
                        <button type="submit"
                            class="bg-orange-500 text-white px-4 py-2 rounded">{{ __('produits.index.apply') }}</button>
                        <button type="reset"
                            class="bg-gray-300 text-black px-4 py-2 rounded">{{ __('produits.index.clear') }}</button>
                    </div>
                </form>
            </aside>
            <div class="col-span-3 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($produits as $produit)
                    <a href="{{ route('produit.show', ['produit' => $produit->id]) }}">
                        <div
                            class="flex-shrink-0 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg group">
                            <svg class="absolute bottom-0 left-0 mb-8 scale-150 group-hover:scale-[1.65] transition-transform"
                                viewBox="0 0 375 283" fill="none" style="opacity: 0.1;">
                                <rect x="159.52" y="175" width="152" height="152" rx="8"
                                    transform="rotate(-45 159.52 175)" fill="white" />
                                <rect y="107.48" width="152" height="152" rx="8"
                                    transform="rotate(-45 0 107.48)" fill="white" />
                            </svg>
                            <div
                                class="relative pt-10 px-10 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"></div>
                                <img class="relative w-64 h-64 sm:h-48 lg:h-72" src="{{ Vite::asset('storage/app/public/' . $produit->image) }}" alt="Product Image">
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
        <div class="">
            {{ $produits->links() }}
        </div>
    </main>
@endsection
