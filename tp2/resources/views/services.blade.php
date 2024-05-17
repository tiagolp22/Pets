@extends('partials.base')

@section('title', 'Services')

@section('content')

    <main>
        <section class="hero-banner w-full h-200 relative">
            <div class="absolute inset-0"></div>
            <img src="{{ Vite::asset('resources/img/banho.png') }}" alt="Hero Banner" class="w-full h-200 object-cover">
        </section>

        <div class="h-screen lg:px-40">
            <div class="container mx-auto px-8 py-12">
                <h2 class="text-3xl font-semibold text-center mb-8">
                    Découvrez nos produits
                </h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-gray-100 shadow-lg rounded-lg overflow-hidden">
                        <img src="{{ Vite::asset('resources/img/banho.jpeg') }}" alt="Headless UI"
                            class="w-full h-64 object-cover">
                        <div class="p-4 md:p-6">
                            <h3 class="text-xl font-semibold text-indigo-500 dark:text-indigo-400 mb-2">Bain et Toilettage
                            </h3>
                            <p class="mb-4 two-lines">
                                Service de bain et toilettage professionnel pour garder votre animal propre et élégant.
                            </p>
                            <a href="#"
                                class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2 rounded-full">Learn
                                More</a>
                        </div>
                    </div>

                    <div class="bg-gray-100 shadow-lg rounded-lg overflow-hidden">
                        <img src="{{ Vite::asset('resources/img/frete.jpeg') }}" alt="Heroicons"
                            class="w-full h-64 object-cover">
                        <div class="p-4 md:p-6">
                            <h3 class="text-xl font-semibold text-purple-500 dark:text-purple-400 mb-2">Livraison à domicile
                            </h3>
                            <p class="mb-4 two-lines">Commandez vos produits préférés en ligne et faites-les livrer à votre domicile.</p>
                            <a href="#"
                                class="inline-block bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded-full">Learn
                                More</a>
                        </div>
                    </div>

                    <div class="bg-gray-100 shadow-lg rounded-lg overflow-hidden">
                        <img src="{{ Vite::asset('resources/img/vacina.jpeg') }}"
                            alt="Hero Patterns" class="w-full h-64 object-cover">
                        <div class="p-4 md:p-6">
                            <h3 class="text-xl font-semibold text-cyan-500 dark:text-cyan-400 mb-2">Application de
                                médicaments</h3>
                            <p class="mb-4 two-lines">Services professionnels d'application
                                de médicaments pour assurer
                                le
                                bien-être et la santé de votre animal.</p>
                            <a href="#"
                                class="inline-block bg-cyan-500 hover:bg-cyan-600 text-white px-4 py-2 rounded-full">Learn
                                More</a>
                        </div>
                    </div>
                    <div class="bg-gray-100 shadow-lg rounded-lg overflow-hidden">
                        <img src="{{ Vite::asset('resources/img/vet.jpeg') }}"
                            alt="Hero Patterns" class="w-full h-64 object-cover">
                        <div class="p-4 md:p-6">
                            <h3 class="text-xl font-semibold text-emerald-500 dark:emerald-300 mb-2">Vétérinaire</h3>
                            <p class="mb-4 two-lines">Services de soins de santé complets
                                par nos vétérinaires
                                expérimentés
                                pour votre animal.</p>
                            <a href="#"
                                class="inline-block bg-emerald-400 hover:bg-emerald-600 text-white px-4 py-2 rounded-full">Learn
                                More</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </main>

@endsection
