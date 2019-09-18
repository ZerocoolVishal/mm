<?php

$from = "anupama.mind@gmail.com";
$to = "vishal.devtaa@gmail.com";
$message = "Hello";
$headers = "From: appointment@mindmechanics.in";
mail($to, "My subject", $message, $headers);
