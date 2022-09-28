<?php
require "../require/config.php";

$name = $email = $phone= $street = $city = $state = $zip = $news = $opcion = $other;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(!empty($_POST["name"]) || !empty($_POST["email"]) || !empty($_POST["phone"])){
    echo "<br><strong>name post hay datos</strong><br>";

}
}

?>
