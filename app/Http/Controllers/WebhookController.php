<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Midtrans\Config;
use Midtrans\Notification;

class WebhookController extends Controller
{
    public function handle(Request $request)
    {
        // Setup config Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $notification = new Notification();

        $transactionStatus = $notification->transaction_status;
        $orderId = $notification->order_id; // e.g. ORDER-123

        // Ambil ID asli dari transaksi
        $realId = str_replace('ORDER-', '', $orderId);

        $transaction = Transaction::find($realId);

        if (!$transaction) {
            return response()->json(['message' => 'Transaksi tidak ditemukan'], 404);
        }

        // Update status berdasarkan status dari Midtrans
        if ($transactionStatus === 'capture' || $transactionStatus === 'settlement') {
            $transaction->status = 'success';
        } elseif ($transactionStatus === 'pending') {
            $transaction->status = 'pending';
        } elseif (in_array($transactionStatus, ['deny', 'expire', 'cancel'])) {
            $transaction->status = 'failed';
        }

        $transaction->save();

        return response()->json(['message' => 'Notifikasi diproses']);
    }
}
