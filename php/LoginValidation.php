<?php

$userName = $password="";
$userNameErr = $passwordErr ="";

function test_input($data){
    $data = trim($data);
    $data = stripslashe($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty ($_POST["userName"])){
        $userNameErr = "Name is required";
    } else{
        $userName = test_input($_POST["userName"]);
    }

     if(empty ($_POST["password"])){
        $passwordErr = "Name is required";
    } else{
        $password = test_input($_POST["password"]);
    }
}


?>