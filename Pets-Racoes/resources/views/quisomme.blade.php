@extends('partials.base')

@section('title', 'Qui sommes nous')

@section('content')
    <div class="bg-gray-100 py-16">
        <div class="container mx-auto px-4 flex items-center">
            <div class="w-full md:w-2/3">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 mb-8 text-left">Bienvenue chez Pet's
                    Rações</h1>
                <p class="text-lg text-gray-700 leading-relaxed mb-8 text-left">Chez Pet's Rações, nous sommes passionnés
                    par les animaux de compagnie et nous nous engageons à offrir les meilleurs produits et services. Nous
                    proposons des services de bain et toilettage, des consultations vétérinaires, une variété de produits et
                    accessoires, ainsi que des aliments, médicaments et vaccins. Nous sommes présents dans deux adresses
                    physiques: Casa Forte et Piedade. Comptez sur nous pour prendre soin de votre animal de compagnie comme
                    s'il faisait partie de notre famille!</p>
                <div class="flex justify-center">
                    <a href="#"
                        class="bg-orange-500 hover:bg-pink-600 text-white font-semibold py-3 px-8 rounded-full transition duration-300">Contacter</a>
                </div>
            </div>
            <div class="w-full md:w-1/3 flex justify-center">
                <img src="https://www.petsracoesrecife.com.br/wp-content/uploads/2024/04/pets-racoes-h-300.png"
                    alt="Pet's Rações Logo" class="w-64 h-auto">
            </div>
        </div>
    </div>
@endsection
