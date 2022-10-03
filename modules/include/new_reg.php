<?php
require "../require/config.php";

$name = $email = $phone= $street = $city = $state = $zip = $news = $opcion = $other="";
$name_err = $email_err = $phone_err= false;
//funciones
/*Función para limpiar un dato procedentes de un formulario.*/
function limpiar_dato($data)
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}



function validar_name($name){
            
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        return false;

        }  else{
            return true;
        }
    }

    function validar_phone($phone){
        if(!preg_match('/^[0-9]{9}+$/', $phone)){
            return false;
        } else{
            return true;
        }

    }

    function validar_email($email){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
            } else{
                return true;
            }
    }

    

if($_SERVER["REQUEST_METHOD"] == "POST"){
    print_r ($_POST);
    if(!empty($_POST["name"]) || !empty($_POST["email"]) || !empty($_POST["phone"])){
        
        $name= limpiar_dato($_POST["name"]);
        $email= limpiar_dato($_POST["email"]);
        $phone= limpiar_dato($_POST["phone"]);
        
                if(validar_name($name)){
                    echo"validada";
                } else{
                    $name_err = true;
                }
        
                if(validar_email($email)){
                    echo"validada";
                } else{
                    $email_err = true;
                }
                
                if(validar_phone($phone)){
                    echo"validada";
                } else{
                    $phone_err = true;
                }
        if (validar_name($name) || validar_email($email) || validar_phone($Phone)){
        
                //Ver si las variables tienen valor, contenido.
                //if (isset($_POST["direccion])) ? $direccion = limpiar_dato($_POST["direccion]);
                if(isset($_POST["street"])){
                    $street =limpiar_dato($_POST["street"]);
                } else{
                    $direccion = NULL;
                }
        
                if(isset($_POST["city"])){
                    $city =limpiar_dato($_POST["city"]);
                } else{
                    $city = NULL;
                }
        
                if(isset($_POST["provincia"])){
                    $provincia =limpiar_dato($_POST["provincia"]);
                } else{
                    $provincia = NULL;
                }
        
                if(isset($_POST["zip"])){
                    $zip =limpiar_dato($_POST["zip"]);
                } else{
                    $zip = NULL;
                }
        
                if(isset($_POST["news"])){
                    $news =limpiar_dato($_POST["news"]);
                } else{
                    $news = NULL;
                }
        
                if(isset($_POST["opcion"])){
                    $opcion =limpiar_dato($_POST["opcion"]);
                } else{
                    $opcion = NULL;
                }
        
                if(isset($_POST["other"])){
                    $other =limpiar_dato($_POST["other"]);
                } else{
                    $other = NULL;
                }
    }else{ 
        if ($name_err == true){
            echo "La validación del nombre ha fallado";
        }elseif($email_err == true){
            echo "la validacion del email ha fallado";
        }elseif($phone_err == true){
            echo "La validacion del telefono ha fallado";
        }
    }

}
?>