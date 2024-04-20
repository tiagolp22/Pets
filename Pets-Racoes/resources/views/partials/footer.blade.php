@php
    $annee = date('Y');
@endphp
<footer>
    <div class="py-4 text-white lg:px-40">
        <div class="container px-4 mx-auto">
            <div class="-mx-4 flex flex-wrap justify-between">
                <div class="px-4 my-4 w-full xl:w-1/5">
                    <a href="/" class="block w-56 mb-10">
                        <img src="{{ Vite::asset('resources/img/logo-pets-racoes 150.png') }}" alt="Pets Rations" />
                    </a>
                    <p class="text-justify">
                        Nous sommes Pet’s Rações, votre magasin 100% Pernambuco, nous livrons le même jour la meilleure
                        nourriture et les meilleurs médicaments à Recife et dans la région.
                    </p>
                </div>


                <div class="px-4 my-4 w-full sm:w-auto">
                    <div>
                        <h2 class="inline-block text-2xl pb-4 mb-4 border-b-4 border-blue-600">Entreprise</h2>
                    </div>
                    <ul class="leading-8">
                        <li><a href="/a-propos" class="hover-footer">À Propos</a></li>
                        <li><a href="/conditions" class="hover-footer">Termes & Conditions</a></li>
                        <li><a href="/confidentialite" class="hover-footer">Politique de Confidentialité</a></li>
                    </ul>
                </div>


                <div class="px-4 my-4 w-full sm:w-auto">
                    <div>
                        <h2 class="inline-block text-2xl pb-4 mb-4 border-b-4 border-blue-600">Contact</h2>
                    </div>
                    <ul class="text-sm">
                        <li class="mb-2 hover-footer">
                            <span>Chemin des Ubaias, 286 - Casa Forte, Recife - PE, 52061-080, Brésil</span>
                        </li>
                        <li class="mb-2 hover-footer">
                            <span>+55 (81) 99403-3708</span>
                        </li>
                        <li>
                            <a href="mailto:atendimento@petsracoesrecife.com.br"
                                class="underline hover-footer">atendimento@petsracoesrecife.com.br</a>
                        </li>
                    </ul>
                </div>


                <div class="px-4 my-4 w-full sm:w-auto xl:w-1/5">
                    <div>
                        <h2 class="inline-block text-2xl pb-4 mb-4 border-b-4 border-blue-600">Suivez-nous sur les réseaux sociaux
                        </h2>
                    </div>

                    <a href="lien-facebook"
                        class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full mr-1 hover:text-blue-400 hover:border-blue-400">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="lien-insta"
                        class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full mr-1 hover:text-blue-400 hover:border-blue-400">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="lien-x"
                        class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full mr-1 hover:text-blue-400 hover:border-blue-400">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-black py-4 text-gray-100">
        <div class="container mx-auto px-4">
            <div class="-mx-4 flex flex-wrap justify-between">
                <div class="px-4 w-full text-center sm:w-auto sm:text-left">
                    <span>© {{ $annee }} por Pet’s Rações</span>
                </div>
                <div class="px-4 w-full text-center sm:w-auto sm:text-left">
                    Fait avec ❤️.
                </div>
            </div>
        </div>
    </div>
</footer>
