<?php
require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;

$api_key = 'rzp_test_qsWJIMAXJe3Eul'; // Replace with your actual API key
$api_secret = 'sjNUv8uvI3K0kNvUMlW0JvxI'; // Replace with your actual API secret

$api = new Api($api_key, $api_secret);

$order = $api->order->create([
  'amount' => $_POST['amount'] * 100,
  'currency' => 'INR',
]);

$payment_id = $order->id;

// Pass the payment ID to the client-side
echo '<input type="hidden" name="payment_id" value="' . $payment_id . '">';

?>
