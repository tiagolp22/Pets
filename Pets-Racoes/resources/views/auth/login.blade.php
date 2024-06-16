@extends('partials.base')

@section('title', 'INDEX')

@section('content')
    <main>
        <div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center lg:px-40">
            <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
                <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
                    <div class="mt-12 flex flex-col items-center">
                        <h1 class="text-2xl xl:text-3xl font-extrabold">
                            Sign up
                        </h1>
                        <div class="w-full flex-1 mt-8">
                            <div class="flex flex-col items-center">
                                {{-- <button
                                    class="w-full max-w-xs font-bold shadow-sm rounded-lg py-3 bg-indigo-100 text-gray-800 flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline">
                                    <div class="bg-white p-2 rounded-full">
                                        <svg class="w-4" viewBox="0 0 533.5 544.3">
                                            <path
                                                d="M533.5 278.4c0-18.5-1.5-37.1-4.7-55.3H272.1v104.8h147c-6.1 33.8-25.7 63.7-54.4 82.7v68h87.7c51.5-47.4 81.1-117.4 81.1-200.2z"
                                                fill="#4285f4" />
                                            <path
                                                d="M272.1 544.3c73.4 0 135.3-24.1 180.4-65.7l-87.7-68c-24.4 16.6-55.9 26-92.6 26-71 0-131.2-47.9-152.8-112.3H28.9v70.1c46.2 91.9 140.3 149.9 243.2 149.9z"
                                                fill="#34a853" />
                                            <path
                                                d="M119.3 324.3c-11.4-33.8-11.4-70.4 0-104.2V150H28.9c-38.6 76.9-38.6 167.5 0 244.4l90.4-70.1z"
                                                fill="#fbbc04" />
                                            <path
                                                d="M272.1 107.7c38.8-.6 76.3 14 104.4 40.8l77.7-77.7C405 24.6 339.7-.8 272.1 0 169.2 0 75.1 58 28.9 150l90.4 70.1c21.5-64.5 81.8-112.4 152.8-112.4z"
                                                fill="#ea4335" />
                                        </svg>
                                    </div>
                                    <span class="ml-4">
                                        Sign Up with Google
                                    </span>
                                </button> --}}

                                <a href="{{ url('/auth/github') }}"
                                    class="w-full max-w-xs font-bold shadow-sm rounded-lg py-3 bg-gray-800 text-white flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:bg-gray-700 focus:bg-gray-700 focus:shadow-sm focus:shadow-outline mt-5">
                                    <div class="bg-white p-1 rounded-full">
                                        <svg class="w-6" viewBox="0 0 32 32">
                                            <path fill="#00000"
                                                d="M16 0C7.164 0 0 7.164 0 16c0 7.08 4.58 13.073 10.941 15.192.8.148 1.093-.348 1.093-.77 0-.38-.014-1.378-.018-2.708-4.448.965-5.38-2.111-5.38-2.111-.73-1.85-1.784-2.348-1.784-2.348-1.438-.98.108-.96.108-.96 1.85.133 2.824 1.133 2.824 1.133 1.64 2.818 4.3 2.003 5.354 1.535.168-1.187.66-2.003 1.202-2.46-4.207-.474-8.598-2.107-8.598-9.38 0-2.075.74-3.773 1.955-5.107-.198-.478-.846-2.407.185-5.008 0 0 1.588-.508 5.2 1.938 1.508-.418 3.12-.628 4.73-.636 1.608.008 3.22.218 4.73.636 3.608-2.446 5.196-1.938 5.196-1.938 1.033 2.602.386 4.53.188 5.008 1.22 1.334 1.955 3.032 1.955 5.107 0 7.293-4.4 8.9-8.614 9.364.678.587 1.285 1.75 1.285 3.52 0 2.544-.02 4.597-.02 5.219 0 .432.29.927 1.106.768C27.42 29.07 32 23.08 32 16c0-8.836-7.164-16-16-16z" />
                                        </svg>
                                    </div>
                                    <span class="ml-4">
                                        Sign Up with GitHub
                                    </span>
                                </a>

                            </div>

                            <div class="my-12 border-b text-center">
                                <div
                                    class="leading-none px-2 inline-block text-sm text-gray-600 tracking-wide font-medium bg-white transform translate-y-1/2">
                                    Or sign up with e-mail
                                </div>
                            </div>

                            <div class="mx-auto max-w-xs">
                                <form class="space-y-6" method="POST" action="{{ route('authenticate') }}">
                                    @csrf
                                    <div>
                                        <label for="email"
                                            class="block text-sm font-medium leading-6 text-gray-900">Email
                                            address</label>
                                        <div class="mt-2">
                                            <input id="email" name="email" type="email" autocomplete="email"
                                                required
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>

                                    </div>

                                    <div>
                                        <div class="flex items-center justify-between">
                                            <label for="password"
                                                class="block text-sm font-medium leading-6 text-gray-900">Mot de
                                                passe</label>
                                            <div class="text-sm">
                                                <a href="#"
                                                    class="font-semibold text-[#ED7727ff] hover:text-indigo-500">Mot de
                                                    passe
                                                    oublié ?</a>
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <input id="password" name="password" type="password"
                                                autocomplete="current-password" required
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>

                                    <div> <button
                                            class="flex w-full justify-center rounded-md bg-[#ED7727ff] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#800000ff] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600""
                                            type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 bg-indigo-100 text-center hidden lg:flex">
                    <div class="flex-1 text-center hidden lg:flex">
                        <img src="{{ Vite::asset('resources/img/login.jpeg') }}" class="xl:m-16 max-w-full h-auto"
                            alt="Imagem de login">
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
