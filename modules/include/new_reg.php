<?php
require "../require/config.php";

$name = $email = $phone= $street = $city = $state = $zip = $news = $opcion = $other="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(!empty($_POST["name"]) || !empty($_POST["email"]) || !empty($_POST["phone"])){
    echo "<br><strong>name post hay datos</strong><br>";
    $name= $_POST["name"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];
    $street= $_POST["street"];
    $city= $_POST["city"];
    $state= $_POST["state"];
    $zip= $_POST["zip"];
    $news= $_POST["news"];
    $opcion= $_POST["opcion"];
    $other= $_POST["other"];

    function limpiar_datos($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

    }
    //nombre email y telefono.

//revisar

function validar_name($name){
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
    return false;
}else{return true;
}

//revisaar

 function validar_email($email){
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return false;
}else{return true;
}

//revisar

function validar_telefono($phone){
if (!preg_match('/^[0-9]{10}+$/',)){
        return false;
    }else{return true;  
    }



}
    }
}
}
}
?>
