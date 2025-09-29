<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class NOWPaymentsService
{
    protected $apiKey;
    protected $baseUrl = 'https://api.nowpayments.io/v1';

    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->apiKey = config('services.nowpayments.api_key');
    }


    public function createPayment($amount, $currency = 'usd', $orderId = null, $callbackUrl = null, $successUrl = null, $cancelUrl = null)
    {
        $response = Http::withHeaders([
            'x-api-key' => $this->apiKey,
        ])->post("{$this->baseUrl}/payment", [
            'price_amount'   => $amount,
            'price_currency' => $currency,
            'pay_currency'   => 'usdttrc20', // user will pay in USDT (TRC20)
            'order_id'       => $orderId,
            'success_url'    => $successUrl,
            'cancel_url'     => $cancelUrl,
            'ipn_callback_url' => $callbackUrl,
        ]);

        return $response->json();
    }
}
