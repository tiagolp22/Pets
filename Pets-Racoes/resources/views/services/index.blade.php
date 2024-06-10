@extends('partials.base')

@section('title', 'Services')

@section('content')
    <main>
        <div class="relative overflow-hidden bg-gray-900 py-32 sm:py-40 lg:p-64">
            <img src="{{ Vite::asset('resources/img/gato-cao.png') }}" alt="Hero Banner"
                class="absolute inset-0 z-0 h-full w-full object-cover object-right md:object-center">
        </div>

        <div class="container mx-auto px-8 py-12">
            <h2 class="text-3xl font-semibold text-center mb-8">
                Découvrez nos services
            </h2>

            @if ($services->isEmpty())
                <p class="text-center text-gray-500">Aucun service à afficher pour le moment.</p>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($services as $service)
                        <div class="bg-gray-100 shadow-lg rounded-lg overflow-hidden">
                            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->nom }}"
                                class="w-full h-64 object-cover">
                            <div class="p-4 md:p-6">
                                <h3 class="text-xl font-semibold text-indigo-500 mb-2">{{ $service->nom }}</h3>
                                <p class="mb-4">{{ $service->description }}</p>
                                <p class="text-gray-700 font-semibold mb-4">{{ $service->prix }} </p>
                                <a href="{{ route('service.show', $service->id) }}"
                                    class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2 rounded-full">
                                    Voir le service
                                </a>
                                 @can('edit', $service)
                                    <a href="{{ route('service.edit', $service) }}"
                                        class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-full">EDIT</a>
                                @endcan
                                @can('delete', $service)
                                    <form action="{{ route('service.destroy', $service->id) }}" method="POST"
                                        class="inline-block" onsubmit="return confirm('Are you sure you want to delete this service?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-full">
                                            DELETE
                                        </button>
                                    </form>
                                @endcan
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </main>
@endsection
