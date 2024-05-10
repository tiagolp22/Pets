    @extends('partials.base')

    @section('title', 'EDIT')

    @section('content')
        <main>
            <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="text-2xl py-4 px-6 bg-orange-500 text-white text-center font-bold uppercase">
                    Éditer un service
                </div>
                <form class="py-4 px-6" action="{{ route('service.update', $service->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                     @method('PUT')
                    {{-- <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="nom">
                            Nom du service
                        </label>
                        <input
                            class="w-full px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white leading-tight focus:shadow-outline"
                            id="nom" name="nom" type="text" placeholder="Entrez le nom du service" required
                            value="{{ old('nom', $service->nom) }}">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="description">
                            Description
                        </label>
                        <textarea
                            class="w-full px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white leading-tight focus:shadow-outline"
                            id="description" name="description" rows="4" placeholder="Entrez la description du service" required>{{ old('description', $service->description) }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="prix">
                            Prix
                        </label>
                        <input
                            class="w-full px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white leading-tight focus:shadow-outline"
                            id="prix" name="prix" type="number" step="0.01" placeholder="Entrez le prix"
                            required value="{{ old('prix', $service->prix) }}">
                    </div> --}}

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="image">
                            Image
                        </label>
                        <input
                            class="w-full px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white leading-tight focus:shadow-outline"
                            id="image" name="image" type="file" accept="image/*">
                    </div>

                    {{-- <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="active">
                            Actif
                        </label>
                        <select
                            class="w-full px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white leading-tight focus:shadow-outline"
                            id="active" name="active">
                            <option value="true" {{ old('active', $service->active) == 'true' ? 'selected' : '' }}>Oui
                            </option>
                            <option value="false" {{ old('active', $service->active) == 'false' ? 'selected' : '' }}>Non
                            </option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="categorie">
                            Catégorie
                        </label>
                        <select
                            class="w-full px-4 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white leading-tight focus:shadow-outline"
                            id="categorie" name="categorie">
                            <option value="">Sélectionnez une catégorie</option>
                            <option value="chien" {{ old('categorie', $service->categorie) == 'chien' ? 'selected' : '' }}>
                                Chien</option>
                            <option value="chat" {{ old('categorie', $service->categorie) == 'chat' ? 'selected' : '' }}>
                                Chat</option>
                            <option value="oiseau"
                                {{ old('categorie', $service->categorie) == 'oiseau' ? 'selected' : '' }}>Oiseau</option>
                            <option value="poisson"
                                {{ old('categorie', $service->categorie) == 'poisson' ? 'selected' : '' }}>Poisson</option>
                            <option value="autre"
                                {{ old('categorie', $service->categorie) == 'autre' ? 'selected' : '' }}>Autre</option>
                        </select>
                    </div> --}}

                    <div class="flex items-center justify-center mb-4">
                        <button
                            class="w-full tracking-wide font-semibold bg-indigo-500 text-gray-100 py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none"
                            type="submit">
                            Mettre à jour le service
                        </button>
                    </div>
                </form>
            </div>
        </main>
    @endsection