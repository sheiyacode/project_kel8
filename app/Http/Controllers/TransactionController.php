<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Snap;
use Midtrans\Config;

class TransactionController extends Controller
{
     public function checkout(Request $request)
    {
        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$clientKey = config('midtrans.client_key');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $price = $request->input('price');
        $name = $request->input('package');

        $params = [
            'transaction_details' => [
                'order_id' => uniqid(),
                'gross_amount' => (int) str_replace(['Rp', '.', ','], '', $price),
            ],
            'customer_details' => [
                'first_name' => auth()->user()->name ?? 'Guest',
                'email' => auth()->user()->email ?? 'guest@example.com',
            ],
            'item_details' => [
                [
                    'id' => strtolower($name),
                    'price' => (int) str_replace(['Rp', '.', ','], '', $price),
                    'quantity' => 1,
                    'name' => $name . ' Package',
                ]
            ]
        ];

        $snapToken = Snap::getSnapToken($params);

        return view('user.payment', compact('snapToken'));
    }
    
}
