<?php

$price = $_POST['price'];
echo "Price: $$price <br>";
$quantity = $_POST['quantity'];
echo "Quantity: $quantity <br>";
$priceSum = $price * $quantity;
echo "Price of total items: $$priceSum <br><br>";


$discount = $_POST['discount'];
echo "Discount: $discount% <br>";
$afterDiscount = $priceSum - ($priceSum * (intval($discount) / 100));
echo "Price after discount: $$afterDiscount <br><br>";


$shipping = $_POST['shipping'];
echo "Shipping: $$shipping <br>";
$afterShipping = $afterDiscount + $shipping;
echo "Price after shipping: $$afterShipping <br><br>";


$tax = 7.5;
echo "Tax: $tax% <br>";
$afterTax = ($afterShipping * ($tax / 100)) + $afterShipping;
echo "Price after tax: $$afterTax <br><br>";

$payments = $_POST['payments'];
echo "Payments: $payments <br>";
$paymentPerMonth = $afterTax / $payments;
echo "Payment amount per month: $$paymentPerMonth <br><br><br>";


echo "Total amount due: $$afterTax <br>";
echo "The amount will be $$paymentPerMonth per month";
?>

