<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $firstname = htmlspecialchars($_POST["firstname"]);
    $email = htmlspecialchars($_POST['email']);
    $favoriteCity = htmlspecialchars($_POST['favoritecity']);
    $message = htmlspecialchars(($_POST['message']));


    echo "<h3>User Full Detials:<h3/>";
    echo "<br>";

    echo "Firtsname: $firstname";
    echo "<br>";

    echo "Email: $email";
    echo "<br>";

    echo "Lastname: $message";
    echo "<br>";

    echo "Lastname: $favoriteCity";
    echo "<br>";
}
