<?php
/* $_1 */
/* este es un parceo de numero a strin letras  */
//$nombre = (string)'Elias';
$nombre = 'Elias';
$apellido = 'carreño';
/* echo comando de consola */
// echo $nombre;
/* nivel de lenguaje de programacion */
// print($nombre);
/* concatenar con comias dobles*/
//echo"Mi nombre es: $nombre";
/* unir html /css */
//echo "Mi nombre es: <b style='color: red;'>$nombre</b>";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <label>Mi nombre es Elias
        <?php echo $nombre; ?>
    </label>

</body>

</html>
<?php
        /* para borrar e iliminar ram del servidor  unset */
        unset($nombre, $apellido); // Elimina las variables $nombre y $apellido de la memoria

        /* condicionales */

        $nombre = 'Enot'; // Asigna el valor 'Enot' a la variable $nombre
            echo " <br>";
        if ($nombre == "Enot") { // Comprueba si $nombre es igual a "Enot"
            echo "ya es ingeniero"; // Imprime este mensaje si la condición es verdadera
        } elseif ($nombre == "Elias") {
            echo "Mi nombre es: <b style='color: red;' ES INGENIERO</b>"; // Imprime este mensaje si la condición es falsa
        } else {
            echo ": <b style='color: orange;'NO ES INGENIERO</b>";
        }

        $mensaje = (($nombre == 'elias') ? "ya es ingeniero" : (($nombre == 'Carreño') ? "ya es ingeniero" : "no es ingeniero"));

        $mensaje;
        switch ($nombre) {
            case 'Elias':
                echo "ya es ingeniero";
                break;
                case 'Andres':
                    case 'Cristian':
                    echo "ya es ingeniero";
                    break;
            
            default:
            echo "no es ingenero";
                break;
        }
?>