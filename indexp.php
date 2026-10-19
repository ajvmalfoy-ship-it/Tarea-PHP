<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>

    <style>
        body {
            margin: 0;
            background-color: blue;
            color: white;
            font-family: "Times New Roman", serif;
            text-align: center;
        }

        h1 {
            margin: 0;
            padding: 8px;
            font-size: 26px;
        }

        .contenedor {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 5px;
            padding: 5px;
        }

        .tabla {
            background-color: black;
            border: 2px solid white;
            padding: 5px;
            font-size: 14px;
            line-height: 16px;
            min-width: 65px;
        }
    </style>
</head>
<body>

    <h1>Tabla de multiplicar</h1>

    <div class="contenedor">

        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo '<div class="tabla">';

            for ($j = 1; $j <= 10; $j++) {
                $resultado = $i * $j;

                echo "$i x $j = $resultado<br>";
            }

            echo '</div>';
        }
        ?>

    </div>

</body>
</html>