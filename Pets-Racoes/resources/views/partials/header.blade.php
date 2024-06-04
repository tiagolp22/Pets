<header>
    <div class="container mx-auto">
        <nav class="flex items-center justify-between p-6 lg:px-32" aria-label="Global">
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
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="/locale?lang=en">EN</a>
            <a href="{{ route('locale', ['lang' => 'fr']) }}">FR</a>
        </div>
    </div>
</header>
