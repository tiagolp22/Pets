@extends('partials.base')

@section('title', 'Ajouter un produit')

@section('content')
    @if (session('success'))
        <x-alert :type="'success'">
            {{ session('success') }}
        </x-alert>
    @endif

    <main>
        <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="text-2xl py-4 px-6 bg-orange-500 text-white text-center font-bold uppercase">
                Ajouter un produit
            </div>
            <form class="py-4 px-6" action="{{ route('produit.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="nom">
                        Nom du produit
                    </label>
                    <input
                        class="w-full px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white leading-tight focus:shadow-outline"
                        id="nom" name="nom" type="text" placeholder="Entrez le nom du produit" required
                        value="{{ old('nom') }}">
                    @error('nom')
                        <p class="text-red-900 text-lg">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="description">
                        Description
                    </label>
                    <textarea
                        class="w-full px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white leading-tight focus:shadow-outline"
                        id="description" name="description" rows="4" placeholder="Entrez la description du produit" required>{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-900 text-lg">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="prix">
                        Prix
                    </label>
                    <input
                        class="w-full px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white leading-tight focus:shadow-outline"
                        id="prix" name="prix" type="number" step="0.01" placeholder="Entrez le prix" required
                        value="{{ old('prix') }}">
                    @error('prix')
                        <p class="text-red-900 text-lg">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="image">
                        Image
                    </label>
                    <input
                        class="w-full px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white leading-tight focus:shadow-outline"
                        id="image" name="image" type="file" accept="image/*" required>
                    @error('image')
                        <p class="text-red-900 text-lg">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="active">
                        Actif
                    </label>
                    <select
                        class="w-full px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white leading-tight focus:shadow-outline"
                        id="active" name="active">
                        <option value="1" {{ old('active') == '1' ? 'selected' : '' }}>Oui</option>
                        <option value="0" {{ old('active') == '0' ? 'selected' : '' }}>Non</option>
                    </select>
                    @error('active')
                        <p class="text-red-900 text-lg">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2" for="categorie">
                        Catégorie
                    </label>
                    <select id="categorie" name="categorie_id" class="w-full px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white leading-tight focus:shadow-outline">
                        <option value="">Sélectionnez une catégorie</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ old('categorie_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->nom }}
                            </option>
                        @endforeach
                    </select>
                    @error('categorie_id')
                        <p class="text-red-900 text-lg">{{ $message }}</p>
                    @enderror

                </div>
                <div class="flex items-center justify-center mb-4">
                    <button
                        class="w-full tracking-wide font-semibold bg-indigo-500 text-gray-100 py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none"
                        type="submit">
                        Ajouter le produit
                    </button>
                </div>
            </form>
        </div>
    </main>
@endsection
