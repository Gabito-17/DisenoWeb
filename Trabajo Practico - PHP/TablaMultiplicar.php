<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
    <style>
        table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
            text-align: center;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Tabla de Multiplicar</h1>
    <form method="POST" style="text-align: center;">
        <label for="numero">Ingrese un número entero entre 1 y 9:</label>
        <input type="number" id="numero" name="numero" min="1" max="9" required>
        <button type="submit">Mostrar Tabla</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);
        if ($numero >= 1 && $numero <= 9) {
            echo "<h2 style='text-align: center;'>Tabla de Multiplicar del $numero</h2>";
            echo "<table>";
            echo "<tr><th>Multiplicación</th><th>Resultado</th></tr>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p style='color: red; text-align: center;'>Por favor, ingrese un número válido entre 1 y 9.</p>";
        }
    }
    ?>
</body>
</html>
