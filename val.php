<?php

function arrayList(){


    $weather = array("Rainy", "Snowy", "Sunny");

    foreach($weather as $item){
        ?>
        <option name="<?php echo ($item); ?>" value="<?php echo ($item); ?>"><?php echo $item; ?></option>
        <?php
    }
}

$nameerr = $name = $emailerr = $email = $countryerr = $country  = $weathererr = $weather = "";

if($_SERVER['REQUEST_METHOD'] == "POST") {

    $valid = true;
    if (isset($_POST['button'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $weather = $_POST['weather'];

        $pattern = "/[a-zA-Z]/";

        if($_POST["weather"]!= "Sunny" && $_POST["weather"]!= "Snowy" && $_POST["weather"]!= "Rainy"){
            $weathererr = "*";
            $valid = false;

        }else{
            $weathererr = "";
        }


        if (empty($name)) {
            $nameerr = "*required field";
            $valid=false;

        } elseif (!preg_match($pattern, $name)) {
            $nameerr = "Letters Only";
            $valid=false;

        } else {
            $nameerr = "";
        }

        if (empty($email)) {
            $emailerr = "*required field";
            $valid=false;

        } elseif (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
            $emailerr = "Please enter valid email";
            $valid=false;


        } else {
            $emailerr = "";
        }

        if (empty($country)) {
            $countryerr = "*required field";
            $valid=false;

        } elseif (!preg_match($pattern, $country)) {
            $countryerr = "Letters Only";
            $valid=false;

        } else {
            $countryerr = "";
        }



        if($valid){
            header('location:action.php');
            exit();
        }

    }
}




?>