<?php
include "config/config.php";

$ref = uniqid();
$email = $_POST['email'];
$amount = $_POST['amount'] * 100;

header("Location: https://api.paystack.co/transaction/initialize");

