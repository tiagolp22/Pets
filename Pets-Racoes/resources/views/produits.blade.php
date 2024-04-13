@extends('partials.base')

@section('title', 'INDEX')

@section('content')

    <main>

        <section class="hero-banner w-full h-200 relative">
            <div class="absolute inset-0 bg-white opacity-50"></div>
            <img src="https://p2.trrsf.com/image/fget/cf/800/450/middle/images.terra.com/2022/03/31/231281868-confiraos50nomesdecachorrosmaispopularesdobrasil.jpg"
                alt="Hero Banner" class="w-full h-200 object-cover">
        </section>

        <section class="py-8">
            <div class="container mx-auto">
                <h2 class="text-2xl font-semibold mb-4">Découvrez nos produits</h2>
                <div class="grid grid-cols-3 gap-4">
                    <!-- Produto 1 -->
                    <div class="flex flex-col items-center justify-center bg-white rounded-lg shadow-md p-4">
                        <img src="https://lojapetmais.com.br/cdn/shop/files/22213636114-CLASSICVERSO_1000x1000.jpg?v=1709659659"
                            alt="Produto 1" class="w-full h-96 object-cover mb-4">
                        <h3 class="text-lg font-semibold mb-2">Description du produit 1</h3>
                        <p class="text-gray-600 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="text-lg font-semibold mb-2">$20.99</p>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Acheter</button>
                    </div>
                    <!-- Produto 2 -->
                    <div class="flex flex-col items-center justify-center bg-white rounded-lg shadow-md p-4">
                        <img src="https://lojapetmais.com.br/cdn/shop/files/22213636114-CLASSICVERSO_1000x1000.jpg?v=1709659659"
                            alt="Produto 2" class="w-full h-96 object-cover mb-4">
                        <h3 class="text-lg font-semibold mb-2">Description du produit 2</h3>
                        <p class="text-gray-600 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="text-lg font-semibold mb-2">$25.99</p>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Acheter</button>
                    </div>
                    <!-- Produto 3 -->
                    <div class="flex flex-col items-center justify-center bg-white rounded-lg shadow-md p-4">
                        <img src="https://lojapetmais.com.br/cdn/shop/files/22213636114-CLASSICVERSO_1000x1000.jpg?v=1709659659"
                            alt="Produto 3" class="w-full h-96 object-cover mb-4">
                        <h3 class="text-lg font-semibold mb-2">Description du produit 3</h3>
                        <p class="text-gray-600 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="text-lg font-semibold mb-2">$30.99</p>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Acheter</button>
                    </div>
                    <!-- Produto 4 -->
                    <div class="flex flex-col items-center justify-center bg-white rounded-lg shadow-md p-4">
                        <img src="https://lojapetmais.com.br/cdn/shop/files/22213636114-CLASSICVERSO_1000x1000.jpg?v=1709659659"
                            alt="Produto 4" class="w-full h-96 object-cover mb-4">
                        <h3 class="text-lg font-semibold mb-2">Description du produit 4</h3>
                        <p class="text-gray-600 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="text-lg font-semibold mb-2">$35.99</p>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Acheter</button>
                    </div>
                    <!-- Produto 5 -->
                    <div class="flex flex-col items-center justify-center bg-white rounded-lg shadow-md p-4">
                        <img src="https://lojapetmais.com.br/cdn/shop/files/22213636114-CLASSICVERSO_1000x1000.jpg?v=1709659659"
                            alt="Produto 5" class="w-full h-96 object-cover mb-4">
                        <h3 class="text-lg font-semibold mb-2">Description du produit 5</h3>
                        <p class="text-gray-600 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="text-lg font-semibold mb-2">$40.99</p>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Acheter</button>
                    </div>
                    <!-- Produto 6 -->
                    <div class="flex flex-col items-center justify-center bg-white rounded-lg shadow-md p-4">
                        <img src="https://lojapetmais.com.br/cdn/shop/files/22213636114-CLASSICVERSO_1000x1000.jpg?v=1709659659"
                            alt="Produto 6" class="w-full h-96 object-cover mb-4">
                        <h3 class="text-lg font-semibold mb-2">Description du produit 6</h3>
                        <p class="text-gray-600 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="text-lg font-semibold mb-2">$45.99</p>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Acheter</button>
                    </div>
                    <!-- Produto 7 -->
                    <div class="flex flex-col items-center justify-center bg-white rounded-lg shadow-md p-4">
                        <img src="https://lojapetmais.com.br/cdn/shop/files/22213636114-CLASSICVERSO_1000x1000.jpg?v=1709659659"
                            alt="Produto 6" class="w-full h-96 object-cover mb-4">
                        <h3 class="text-lg font-semibold mb-2">Description du produit 6</h3>
                        <p class="text-gray-600 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="text-lg font-semibold mb-2">$45.99</p>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Acheter</button>
                    </div>
                    <!-- Produto 8 -->
                    <div class="flex flex-col items-center justify-center bg-white rounded-lg shadow-md p-4">
                        <img src="https://lojapetmais.com.br/cdn/shop/files/22213636114-CLASSICVERSO_1000x1000.jpg?v=1709659659"
                            alt="Produto 6" class="w-full h-96 object-cover mb-4">
                        <h3 class="text-lg font-semibold mb-2">Description du produit 6</h3>
                        <p class="text-gray-600 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="text-lg font-semibold mb-2">$45.99</p>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Acheter</button>
                    </div>
                    <!-- Produto 9 -->
                    <div class="flex flex-col items-center justify-center bg-white rounded-lg shadow-md p-4">
                        <img src="https://lojapetmais.com.br/cdn/shop/files/22213636114-CLASSICVERSO_1000x1000.jpg?v=1709659659"
                            alt="Produto 6" class="w-full h-96 object-cover mb-4">
                        <h3 class="text-lg font-semibold mb-2">Description du produit 6</h3>
                        <p class="text-gray-600 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="text-lg font-semibold mb-2">$45.99</p>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Acheter</button>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection


