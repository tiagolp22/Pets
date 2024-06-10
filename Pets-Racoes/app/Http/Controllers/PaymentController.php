<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use Stripe\Stripe;
use Stripe\Charge;

class PaymentController extends Controller
{
    public function showCheckoutForm(Produit $produit)
    {
        return view('checkout.checkout', ['produit' => $produit]);
    }

    public function processPayment(Request $request, Produit $produit)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        try {
            $charge = Charge::create([
                'amount' => $produit->prix * 100,
                'currency' => 'usd',
                'description' => $produit->nom,
                'source' => $request->stripeToken,
            ]);


            return redirect()->route('produit.index')->with('success', 'Paiement réussi!');
        } catch (\Exception $e) {
            return back()->withErrors('Erreur: ' . $e->getMessage());
        }
    }
}
