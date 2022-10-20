<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temp_nombre = depurar($_POST["nombre"]);
            $temp_apellidos = depurar($_POST["apellidos"]);
            $temp_dni = depurar($_POST["dni"]);
            $temp_email = depurar($_POST["email"]);
            $temp_fecha = depurar($_POST["fecha"]);


            if (empty($temp_nombre)) {
                $err_nombre = "El nombre es obligatorio";
            } else {
                $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/"; //  Delimitador inicial(/^),Delimitador final($/)

                if (!preg_match($pattern, $temp_nombre)) {
                    $err_nombre = "El nombre solo puede contener letras";
                } else {
                    if (strlen($temp_nombre) > 50) {
                        $err_nombre = "El nombre no puede tener más de 25 caracteres";
                    } else {
                        $nombre = $temp_nombre;
                    }                 
                }
               
            }
            if (empty($temp_apellidos)) {
                $err_apellidos = "El apellido es obligatorio";
            } else {
                $pattern = "/^[a-zA-Z áéíóúÁÉÍÓÚñÑ]+$/"; //  Delimitador inicial(/^),Delimitador final($/)

                if (!preg_match($pattern, $temp_apellidos)) {
                    $err_apellidos = "El apellido solo puede contener letras";
                } else {
                    if (strlen($temp_apellidos) > 75) {
                        $err_apellidos = "El apellido no puede tener más de 25 caracteres";
                    } else {
                        $apellidos = $temp_apellidos;
                    }                 
                }
               
            }
            if (empty($temp_dni)) {
                $err_dni = "El dni es obligatorio";
            } else {
                $pattern = "/^[0-9]{8}[A-Za-z]$/"; //  Delimitador inicial(/^),Delimitador final($/)
                                                      // El {1} por defecto no hace falta ponerlo

                if (!preg_match($pattern, $temp_dni)) {
                    $err_dni = "El dni tiene 8 dígitos y un caracter";
                } else {
                    if (strlen($temp_dni) > 9) {
                        $err_dni = "El dni no puede tener más de 9 caracteres";
                    } else {
                        $dni = $temp_dni;
                    }                 
                }
               
            }
            /*
                VALIDAR:
                -Email (con filter_var)
                -Fecha de nacimiento (sin input date)
                dia/mes/año
                (2 números / 2 números / 4 números)
                03/12/2022
            */
            if (empty($temp_email)) {
                $err_email = "El email es obligatorio";
            } else {
                $temp_email = filter_var($temp_email, FILTER_VALIDATE_EMAIL);

                if (!$temp_email) {
                    $err_email = "El email es incorrecto";
                } else {
                   $email = $temp_email;
                }
               
            }
            if (empty($temp_fecha)) {
                $err_fecha = "La fecha es obligatorio";
            } else {
                
                $pattern = "/^[0-3][0-9]\/[0-1][0-9]\/(19|20)[0-9]{2}$/";  // Delimitador inicial(/^),Delimitador final($/)
                                                                // El {1} por defecto no hace falta ponerlo

                if (!preg_match($pattern, $temp_fecha)) {
                    $err_fecha = "La fecha debe de tener el siguiente formato: xx/xx/xxxx";
                } else {
                    $fecha = $temp_fecha;
                    
                }                 
            
            }

        }

        if(isset($nombre) && isset($apellidos) && isset($email) && isset($fecha)){
            echo "<p>$nombre</p>";
            echo "<p>$apellidos</p>";
            echo "<p>$dni</p>";
            echo "<p>$email</p>";
            echo "<p>$fecha</p>";
        }


        function depurar($dato) {
            $dato = trim($dato);
            $dato = stripslashes($dato);
            $dato = htmlspecialchars($dato);
            return $dato;
        }
    ?>

    <form action="" method="post">
        <p>Nombre: 
            <input type="text" name="nombre">
            <span class="error">
                * <?php if(isset($err_nombre)) echo $err_nombre ?>
            </span>
        </p>
        <p>Apellidos: 
            <input type="text" name="apellidos">
            <span class="error">
                * <?php if(isset($err_apellidos)) echo $err_apellidos ?>
            </span>
        </p>
        <p>DNI: 
            <input type="text" name="dni">
            <span class="error">
                * <?php if(isset($err_dni)) echo $err_dni ?>
            </span>
        </p>
        <p>Email: 
            <input type="text" name="email">
            <span class="error">
                * <?php if(isset($err_email)) echo $err_email ?>
            </span>
        </p>
        <p>Fecha: 
            <input type="text" name="fecha">
            <span class="error">
                * <?php if(isset($err_fecha)) echo $err_fecha ?>
            </span>
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>
</body>
</html>