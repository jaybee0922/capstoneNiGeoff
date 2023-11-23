<?php

function initiatePayPalPayment($totalAmount)
{
    $clientId = 'YOUR_PAYPAL_CLIENT_ID';
    $clientSecret = 'YOUR_PAYPAL_CLIENT_SECRET';

    $apiUrl = 'https://api.sandbox.paypal.com/v2/checkout/orders';

    $data = [
        'intent' => 'CAPTURE',
        'purchase_units' => [
            [
                'amount' => [
                    'currency_code' => 'USD',
                    'value' => $totalAmount,
                ],
            ],
        ],
    ];

    $headers = [
        'Content-Type: application/json',
        'Authorization: Basic ' . base64_encode("$clientId:$clientSecret"),
    ];

    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($httpCode === 201) {
        $responseData = json_decode($response, true);
        $redirectUrl = $responseData['links'][1]['href']; // Redirect URL for PayPal payment
        echo json_encode(['redirectUrl' => $redirectUrl]);
    } else {
        echo json_encode(['error' => 'Failed to initiate PayPal payment']);
    }
}

$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['totalAmount'])) {
    initiatePayPalPayment($data['totalAmount']);
} else {
    echo json_encode(['error' => 'Invalid request']);
}

?>
