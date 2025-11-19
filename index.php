<?php

if ($_SERVER ["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $confpassword = htmlspecialchars($_POST["confirm_password"]);
    $hobys = $_POST["hobys"];
    $gender = $_POST["gender"];


    if (empty($name)) {
        echo "fill the name";
        exit;
        # code...
    }

       if (empty($email)) {
        echo "fill the email";
        exit;
        # code...
    }
    if (!filter_var($email , FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

       if (empty($password)) {
        echo "fill the password";
        exit;
        # code...
    }

       if (empty($confpassword)) {
        echo "fill the confirm_password ";
        exit;
        # code...
    }
      if (empty($hobys)) {
        echo "fill the hobys ";
        exit;
        # code...
    }

    if ($password == $confpassword) {

    }
    else {
        echo "password not matched ";
        exit;
    } 
    if (!str_contains($email , "@")) {
        echo 'ur wmail its not good ';
        # code...
                exit;

    } 
   
    echo "ur name is $name , <br>
    ur email is $email  , <br>
    ur password is $password ,<br>
    ur gender is $gender ,<br>
    ur hoby is $hobys , <br>
    ";

      

    










    
}