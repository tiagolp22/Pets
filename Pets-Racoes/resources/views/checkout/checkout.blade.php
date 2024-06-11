@extends('partials.base')

@section('title', 'Checkout')

@section('content')
    <main class="py-16">
        <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg overflow-hidden p-8">
            <h2 class="text-2xl py-4 px-6 bg-orange-500 text-white text-center font-bold uppercase rounded-lg">Paiement pour:
                <small class="text-gray-700 font-bold mb-2">{{ $produit->nom }}</small></h2>

            <form action="{{ route('payment.process', $produit->id) }}" method="POST" id="payment-form" class="py-4 px-6">
                @csrf
                <div class="mb-4">
                    <label for="card-element" class="block text-gray-700 font-bold mb-2">Carte de crédit</label>
                    <div id="card-element" class="border border-gray-300 p-2 rounded-md"></div>
                    <div id="card-errors" role="alert" class="text-red-500 mt-2"></div>
                </div>

                <button type="submit"
                    class="btn btn-primary mt-3 inline-block px-6 py-3 rounded-md shadow-lg bg-blue-500 hover:bg-blue-600 text-white">Payer</button>
                <p class="block text-gray-700 font-bold mb-2">Prix: ${{ $produit->prix }}</p>

            </form>
        </div>
    </main>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe('{{ env('STRIPE_KEY') }}');
        var elements = stripe.elements();
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };
        var card = elements.create('card', {
            style: style
        });
        card.mount('#card-element');
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'stripeToken');
                    hiddenInput.setAttribute('value', result.token.id);
                    form.appendChild(hiddenInput);
                    form.submit();
                }
            });
        });
    </script>
@endsection
