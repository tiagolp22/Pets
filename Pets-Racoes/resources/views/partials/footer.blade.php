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

                </div>


                <div class="px-4 my-4 w-full sm:w-auto">
                    <div>
                        <h2 class="inline-block text-2xl pb-4 mb-4 border-b-4 border-blue-600">{{ __('footer.company') }}
                        </h2>
                    </div>
                    <ul class="leading-8">
                        <li><a href="/a-propos" class="hover-footer">{{ __('footer.about') }}</a></li>
                        <li><a href="/conditions" class="hover-footer">{{ __('footer.terms') }}</a></li>
                        <li><a href="/confidentialite" class="hover-footer">{{ __('footer.privacy') }}</a></li>
                    </ul>
                </div>


                <div class="px-4 my-4 w-full sm:w-auto">
                    <div>
                        <h2 class="inline-block text-2xl pb-4 mb-4 border-b-4 border-blue-600">
                            {{ __('footer.contact') }}</h2>
                    </div>
                    <ul class="text-sm">
                        <li class="mb-2 hover-footer">
                            <span>{{ __('footer.address') }}</span>
                        </li>
                        <li class="mb-2 hover-footer">
                            <span>{{ __('footer.phone') }}</span>
                        </li>
                        <li>
                            <a href="mailto:{{ __('footer.email') }}"
                                class="underline hover-footer">{{ __('footer.email') }}</a>
                        </li>
                    </ul>
                </div>


                <div class="px-4 my-4 w-full sm:w-auto xl:w-1/5">
                    <div>
                        <h2 class="inline-block text-2xl pb-4 mb-4 border-b-4 border-blue-600">
                            {{ __('footer.follow_us') }}</h2>
                    </div>

                    <a href="https://www.facebook.com/petsracoespiedade/"
                        class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full mr-1 hover:text-blue-400 hover:border-blue-400">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/petsracoesrecife"
                        class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full mr-1 hover:text-blue-400 hover:border-blue-400">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-black py-4 text-gray-100">
        <div class="container mx-auto px-4">
            <div class="-mx-4 flex flex-wrap justify-between">
                <div class="px-4 w-full text-center sm:w-auto sm:text-left">
                    <span>{{ __('footer.copyright', ['year' => $annee]) }}</span>
                </div>
                <div class="px-4 w-full text-center sm:w-auto sm:text-left">
                    {{ __('footer.made_with_love') }}
                </div>
            </div>
        </div>
    </div>
</footer>
