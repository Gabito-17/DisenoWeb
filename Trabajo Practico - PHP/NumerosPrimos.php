<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos</title>
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
    <h1 style="text-align: center;">Números Primos</h1>
    <form method="POST" style="text-align: center;">
        <label for="numero">Ingrese un número entero:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Mostrar Primos</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST["numero"]);

        function esPrimo($num) {
            if ($num < 2) return false;
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) return false;
            }
            return true;
        }

        function encontrarSiguientesPrimos($num, $cantidad) {
            $primos = [];
            $contador = 0;
            while ($contador < $cantidad) {
                $num++;
                if (esPrimo($num)) {
                    $primos[] = $num;
                    $contador++;
                }
            }
            return $primos;
        }

        $primos = encontrarSiguientesPrimos($numero, 16);

        echo "<h2 style='text-align: center;'>Los siguientes 16 números primos después de $numero son:</h2>";
        echo "<table>";

        for ($i = 0; $i < 16; $i++) {
            if ($i % 4 == 0) echo "<tr>";
            echo "<td>" . $primos[$i] . "</td>";
            if ($i % 4 == 3) echo "</tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>
