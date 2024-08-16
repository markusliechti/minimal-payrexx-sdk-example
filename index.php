<?php

use Payrexx\Models\Request\PaymentMethod;
use Payrexx\Payrexx;
use Payrexx\PayrexxException;

require_once(__DIR__ . '/vendor/autoload.php');


// $instanceName is a part of the url where you access your payrexx installation.
// https://{$instanceName}.payrexx.com
$instanceName = '';

// $secret is the payrexx secret for the communication between the applications
// if you think someone got your secret, just regenerate it in the payrexx administration
$secret = '';
$payrexx = new Payrexx($instanceName, $secret);

// List all payment methods
$paymentMethod = new PaymentMethod();
try {
    $response = $payrexx->getAll($paymentMethod);
    echo '<pre>';
    var_dump($response);
    echo '</pre>';
    exit();
} catch (PayrexxException $e) {
    print $e->getMessage();
}
