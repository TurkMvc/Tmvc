<?php
use Stripe\Stripe;
use App\Classes\Session;

$stripe = array(
  'secret_key' => getenv('STRIPE_SECRET'),
  'publishable_key' => getenv('STRIPE_PUBLISHER_KEY')
);

Session::add('publishable_key', $stripe['publishable_key']);

Stripe::setApiKey($stripe['secret_key']);
