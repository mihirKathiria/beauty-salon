<?php
    require("../database.php");

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $gender = $_POST["gender"];
    $birthdate = $_POST["birthdate"];
    $address = $_POST["address"];
    $monumber = $_POST["monumber"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $insert_data = "INSERT INTO `users`(`firstname`, `lastname`, `gender`, `birthdate`, `address`, `email`, `mobile`, `password`) 
    VALUES ('$firstname','$lastname','$gender','$birthdate','$address','$email','$monumber','$password')";

    if($db->query($insert_data)){
        echo "Sign in Success :)";
    }
    else{
        echo "Sign in failed !";
    }
?>