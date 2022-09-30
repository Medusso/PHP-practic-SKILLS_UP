<?php
require "../require/config.php";

$name = $email = $phone= $street = $city = $state = $zip = $news = $opcion = $other="";
//funciones
/**
* Función para limpiar un dato procedentes de un formulario.
*
* @param  $data
* @return $data
*/
function limpiar_dato($data)
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

// nombre, email y nº telefono.
/**
* Función para validar nombre que solo contenga letras min y MAY, y espacio en blanco.
*
* @param $name
* @return boolean
*/
function validar_name($name)
{
if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
return false;
} else {
return true;
}
}

/**
* Función que valida un email
*
* @param $email
* @return boolean
*/
function validar_email($email)
{
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
return false;
} else {
return true;
}
}


// TODO: Documentar función.
/**
* Validar un número de telefono.
*
* @param $phone
* @return Boolean
*/
function validar_phone($phone)
{
if (!preg_match('/^[0-9]{10}+$/', $phone)) {
return false;
} else {
return true;
}
}

    

if($_SERVER["REQUEST_METHOD"] == "POST"){
    print_r ($_POST);
    if(!empty($_POST["name"]) || !empty($_POST["email"]) || !empty($_POST["phone"])){
        echo "<br><strong>Metodo post enviado</strong><br>";
        $name= limpiar_dato($_POST["name"]);
        echo "<strong>Nombre: </strong>" . $name . "<br>";
        $email= limpiar_dato($_POST["email"]);
        echo "<strong>Email: </strong>" . $email . "<br>";
        $phone= limpiar_dato($_POST["phone"]);
        echo "<strong>Telefono: </strong>" . $phone . "<br>";
        
        if(isset($_POST["address"])){
            $address= limpiar_dato($_POST["address"]);
        }else{$address= NULL;}
        }

        $street= limpiar_dato($_POST["street"]);
        $city= limpiar_dato($_POST["city"]);
        $state= limpiar_dato($_POST["state"]);
        $zip= limpiar_dato($_POST["zip"]);
        $news= limpiar_dato($_POST["news"]);
        $opcion= limpiar_dato($_POST["opcion"]);
        $other= limpiar_dato($_POST["other"]);

        //var_dump($newsletter);
//echo "</br>";
/* $newsletter = filter_input(
INPUT_POST,
'newsletter',
FILTER_SANITIZE_SPECIAL_CHARS,
FILTER_REQUIRE_ARRAY
); */
var_dump($newsletter);
// echo "</br>";

// === Usa un array y muestra sus valores separados por coma (o lo que se ponga entre comillas).
/* $string=implode(", ",$newsletter);
echo $string;
echo "</br>"; */
// === FIN MOSTRAR valores array.

$othert = limpiar_dato($_POST["othert"]);
echo "<strong>Noticias que quiere recibir: $newsletter";
var_dump($name);

echo "<br><strong>Name:</strong> $name <br>";
echo "<strong>Telefono:</strong> $phone <br>";
echo "<strong>Email: </strong> $email <br>";

if (validar_name($name)){
echo "validada";
} else {
echo "no valida";
};
/* revisar validaciones
        if(validar_email($email)){
            echo"validada";
        } else{
            echo"no valida";
        }
        
        if(validar_telefono($telefono)){
            echo"validada";
        } else{
            echo"no valida";
        }
*/
}
    //nombre email y telefono.
//revisar


?>