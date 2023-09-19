<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compressed CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/css/foundation.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora PHP</title>
</head>
<body>

<div class="grid-container align-middle">
    <div class="card shadow">
        <div class="card-section">
            <h1>Calculadora PHP</h1>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="number" name="numero1" required>
                <select name="operacion">
                    <option value="sumar">Sumar</option>
                    <option value="restar">Restar</option>
                    <option value="multiplicar">Multiplicar</option>
                    <option value="dividir">Dividir</option>
                </select>
                <input type="number" name="numero2" required>
                <div class="button-group align-center">
                    <button class="submit success button" type="submit" name="calcular" value="Calcular">Calcular</button>
                </div>
            </form>

            <?php
            // Verificar si se envió el formulario
            if (isset($_POST["calcular"])) {
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
                echo "<p>Resultado: $resultado</p>";
            }
            ?>
        </div>
    </div>
</div>


</body>
</html>