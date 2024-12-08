<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";
$recipient = "aneesoscario@gmail.com";
mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact form</title>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container"
            style="margin: 10% auto 0;display: table; padding: 40px 20px; width: 400px;text-align: center; box-shadow: 0 0 10px #ddd;">
            <img style="width: 100px;margin-bottom: 20px;" src="images/Thankyou-icon.png" alt="thankyou" />
            <h1 style="font-family: Arial, Helvetica, sans-serif; font-size: 20px;">Thank you for contacting me. I will get
                back to you as
                soon as possible!</h1>
            <p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px;">Go back to the <a style="color: #3a77bc;"
                    href="home/">homepage</a></p>
        </div>
    </body>
    </html>
';

?>