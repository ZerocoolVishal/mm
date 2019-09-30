<?php

$servername = "localhost";
$username = "mm_user";
$password = "Mind@123456";
$dbname = "mindmechanics";

$name = $_GET['name'];
$email = $_GET['email'];
$mobile = $_GET['mobile'];
$subject = $_GET['subject'];
$message = $_GET['message'];

$from = "anupama.mind@gmail.com";
$to = "vishal.devtaa@gmail.com";
$email_subject = "Message from Mind Mechanics";

$body = "
    Name: $name \n
    Email: $email \n
    Mobile: $mobile \n
    Subject: $subject \n
    Message: $message \n
";
$headers = "From: appointment@mindmechanics.in";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (name, email, mobile, subject, message)
    VALUES ('John', 'Doe', 'john@example.com')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
}
catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

if(mail($to, $email_subject, $body, $headers)) {
    header('location: /thankyou.html');
}
else {
    echo "Email Not send";
}
