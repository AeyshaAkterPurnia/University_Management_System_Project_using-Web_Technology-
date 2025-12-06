<?php


$fName ="";
$fError =  "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    // --- Validate Name ---
    if (empty($_POST["name"])) {
        $nameErr = "Name is required"; // error if empty
    } else {
        $name = test_input($_POST["name"]); // clean input
        // check if only letters and spaces
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and spaces allowed";
        }
    }
}

?>