<?php
$numero = -5; 
if ($numero > 0) {
 echo "El número es positivo";
} elseif ($numero < 0) {
echo "El número es negativo";
} else {
echo "El número es cero";
}

echo "********************<br>";


$mes = 7; 


switch ($mes) {
    
    case 1:
    case 2:
        case 3:
            case 4:
            case 5:
        echo "Estamos en invierno";
        break;
    case 6:
    case 7:
    case 8:
    case 9:
    case 10:
    case 11:
        case 12:
            echo "Estamos en invierno";
            break;
    default:
        echo "Mes no válido";
        break;
        
}
?>