<!DOCTYPE html>
<html>
<head>
    <title>Validación</title>
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="https://media.discordapp.net/attachments/959570367675002905/959932714801328258/unknown.png">
</head>
<body>
    <p>
        <?php
        function validar_clave($clave,&$error_clave){
            if(strlen($clave) < 6){
               $error_clave = "La clave debe tener al menos 6 caracteres";
               return false;
            }
            if(strlen($clave) > 16){
               $error_clave = "La clave no puede tener más de 16 caracteres";
               return false;
            }
            if (!preg_match('`[a-z]`',$clave)){
               $error_clave = "La clave debe tener al menos una letra minúscula";
               return false;
            }
            if (!preg_match('`[A-Z]`',$clave)){
               $error_clave = "La clave debe tener al menos una letra mayúscula";
               return false;
            }
            if (!preg_match('`[0-9]`',$clave)){
               $error_clave = "La clave debe tener al menos un caracter numérico";
               return false;
            }
            $error_clave = "";
            return true;
         }
        echo "Hola ".$_POST["nombre"];

        ?>
    </p>