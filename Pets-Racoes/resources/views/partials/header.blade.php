<header>
    <div class="container mx-auto">
        <nav class="flex items-center justify-between lg:px-32" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="/" class="-m-1.5 p-1.5">
                    <span class="sr-only">Pet's Rações</span>
                    <img class="h-32 w-auto" src="{{ Vite::asset('resources/img/pets-300.png') }}" alt="">
                </a>
            </div>
            @include('partials.nav')
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                @auth
                    <div class="flex justify-center items-center gap-6">
                        <a href="{{ route('logout') }}" class="font-semibold leading-6 text-blue text-lg">Déconnexion</a>
                    </div>
                @endauth
                @guest
                    <div class="">
                        <a href="{{ route('login') }}" class="font-semibold leading-6 text-blue text-lg">{{ __('login') }} <span aria-hidden="true">&rarr;</span></a>
                    </div>
                @endguest
            </div>
        </nav>
        <div class="flex justify-end gap-4 mt-2 lg:mt-0 pr-32 pb-2">
            <a href="/locale?lang=en">
                <img src="{{ Vite::asset('resources/img/estados-unidos.png') }}" alt="Estados Unidos" class="h-8 w-auto">
            </a>
            <a href="{{ route('locale', ['lang' => 'fr']) }}">
                <img src="{{ Vite::asset('resources/img/franca.png') }}" alt="França" class="h-8 w-auto">
            </a>
            <a href="{{ route('locale', ['lang' => 'pt-br']) }}">
                <img src="{{ Vite::asset('resources/img/Brasil.png') }}" alt="Brasil" class="h-8 w-auto">
            </a>
        </div>
    </div>
</header>
