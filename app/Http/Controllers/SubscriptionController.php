<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    /**
     * Redirect user to NowPayments checkout
     */
    public function checkout($subscription_id)
    {
        $subscription = Subscription::findOrFail($subscription_id);
        $user = auth()->user();

        $apiKey = env('NOWPAYMENTS_API_KEY');

        // Create invoice via NOWPayments API
        $response = Http::withHeaders([
            'x-api-key' => $apiKey,
            'Content-Type' => 'application/json',
        ])->post('https://api.nowpayments.io/v1/invoice', [
            'price_amount' => $subscription->price,
            'price_currency' => 'usd', // Adjust if needed
            'order_id' => $subscription->id,
            'order_description' => "Subscription for {$subscription->plan_name}",
            'ipn_callback_url' => route('nowpayment.callback'),
            'success_url' => route('nowpayment.success', $subscription->id),
            'cancel_url' => route('nowpayment.cancel', $subscription->id),
        ]);

        $invoice = $response->json();

        if (isset($invoice['invoice_url'])) {
            return redirect($invoice['invoice_url']);
        }

        return redirect('/payment-initialize-error')->with('error', 'Payment could not be initialized.');
    }

    /**
     * Handle NowPayments IPN callback
     */
    public function callback(Request $request)
    {
        $orderId = $request->order_id;
        $paymentStatus = $request->payment_status; // finished, failed, etc.

        $subscription = Subscription::find($orderId);

        if ($subscription && $paymentStatus === 'finished') {
            $subscription->update([
                'payment_status' => true,
                'sub_status' => true,
            ]);
        }

        return response()->json(['status' => 'ok']);
    }

    /**
     * Payment success page
     */
    public function success($subscriptionId)
    {
        return view('payments.success');
    }

    /**
     * Payment cancel page
     */
    public function cancel($subscriptionId)
    {
        return view('payments.cancel');
    }
}
