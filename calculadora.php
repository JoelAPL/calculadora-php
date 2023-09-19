<!DOCTYPE html>
<html>
<head>
    <title>Resultado de la Calculadora PHP</title>
</head>
<body>
    <h1>Resultado de la Calculadora PHP</h1>
    <?php
    // Verificar si se enviaron datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los valores del formulario
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $operacion = $_POST["operacion"];

        // Función para realizar las operaciones
        function calcular($num1, $num2, $operacion) {
            switch ($operacion) {
                case "sumar":
                    return $num1 + $num2;
                case "restar":
                    return $num1 - $num2;
                case "multiplicar":
                    return $num1 * $num2;
                case "dividir":
                    // Verificar si el divisor es 0
                    if ($num2 == 0) {
                        return "No se puede dividir por 0";
                    } else {
                        return $num1 / $num2;
                    }
                default:
                    return "Operación no válida";
            }
        }

        // Calcular el resultado
        $resultado = calcular($numero1, $numero2, $operacion);

        // Mostrar el resultado
        echo "Resultado: $resultado";
    }
    ?>
</body>
</html>
