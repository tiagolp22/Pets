@extends('partials.base')

@section('title', 'Page non trouvée')

@section('content')
    <main class="flex-auto">
        <div class="flex items-center justify-center min-h-screen">
            <img src="{{ Vite::asset('resources/img/404.jpeg') }}" alt="" class="absolute object-cover w-full h-full">

            <div class="max-w-md mx-auto text-center bg-white bg-opacity-90 p-8 rounded-lg shadow-lg relative z-10">
                <h1 class="text-9xl font-bold mb-4">404</h1>
                <h2 class="text-4xl font-bold mb-6">Oups ! Page non trouvée</h2>
                <p class="text-lg text-gray-600 mb-8">La page que vous recherchez semble être partie pour une petite aventure. Ne vous inquiétez pas, nous vous aiderons à retrouver votre chemin vers la maison.</p>
                <a href="{{ route('produit.index') }}" class="inline-block bg-indigo-600 text-white font-semibold px-6 py-3 rounded-md hover:bg-indigo-700 transition-colors duration-300">Retourner à la page d'accueil</a>
            </div>
        </div>
    </main>
@endsection
