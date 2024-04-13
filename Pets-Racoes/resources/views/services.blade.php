@extends('partials.base')

@section('title', 'Services')

@section('content')

    <main class="flex-grow">
        <div class="container mx-auto py-8">

            <section class="py-8">
                <div class="container mx-auto">
                    <h2 class="text-2xl font-semibold mb-4">Découvrez nos produits</h2>
                    <div class="grid grid-cols-4 gap-2">
                        <div class="flex flex-col items-center justify-center bg-white rounded-lg shadow-md p-4">
                            <div class="flex justify-between w-full mb-4">
                                <div>
                                    <h3 class="text-lg font-semibold mb-2">Bain et Toilettage</h3>
                                    <p class="text-gray-600 mb-2">Pour que votre animal ait toujours l'air magnifique</p>
                                </div>
                                <i class="fa-solid fa-bath" class="w-16 h-16 object-cover"></i>
                            </div>
                            <p class="text-gray-600 my-4">Service de bain et toilettage professionnel pour garder votre
                                animal
                                propre et élégant.</p>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Engager le
                                service</button>
                        </div>

                        <div class="flex flex-col items-center justify-center bg-white rounded-lg shadow-md p-4">
                            <div class="flex justify-between w-full mb-4">
                                <div>
                                    <h3 class="text-lg font-semibold mb-2">Livraison à domicile</h3>
                                    <p class="text-gray-600 mb-2">Livraison directement à votre porte</p>
                                </div>
                                <i class="fa-solid fa-truck" class="w-16 h-16 object-cover"></i>
                            </div>
                            <p class="text-gray-600 my-4">Commandez vos produits préférés en ligne et faites-les livrer à
                                votre
                                domicile.</p>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Engager le
                                service</button>
                        </div>

                        <div class="flex flex-col items-center justify-center bg-white rounded-lg shadow-md p-4">
                            <div class="flex justify-between w-full mb-4">
                                <div>
                                    <h3 class="text-lg font-semibold mb-2">Application de médicaments</h3>
                                    <p class="text-gray-600 mb-2">Pour garder votre animal en bonne santé</p>
                                </div>
                                <i class="fa-solid fa-pills" class="w-16 h-16 object-cover"></i>
                            </div>
                            <p class="text-gray-600 my-4">Services professionnels d'application de médicaments pour assurer
                                le
                                bien-être et la santé de votre animal.</p>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Engager le
                                service</button>
                        </div>
                        <div class="flex flex-col items-center justify-center bg-white rounded-lg shadow-md p-4">
                            <div class="flex justify-between w-full mb-4">
                                <div>
                                    <h3 class="text-lg font-semibold mb-2">Vétérinaire</h3>
                                    <p class="text-gray-600 mb-2">Pour les soins de santé de votre animal</p>
                                </div>
                                <i class="fa-solid fa-stethoscope" class="w-64 h-64 object-cover"></i>
                            </div>
                            <p class="text-gray-600 my-4">Services de soins de santé complets par nos vétérinaires
                                expérimentés
                                pour votre animal.</p>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Engager le
                                service</button>
                        </div>

                    </div>
                </div>
            </section>
        </div>

    </main>

@endsection
