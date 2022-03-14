<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rodolfo Canjura</title>
    <link rel="stylesheet" href="Skeleton-2.0.4/css/skeleton.css">
</head>

<body>
    <?php
    $Meses = array(
        "Enero" => [8, 25, 60],
        "Febrero" => [25, 50, 42],
        "Marzo" => [30, 90, 45],
        "Abril" => [86, 56, 21],
        "Mayo" => [90, 45, 83],
        "Junio" => [200, 60, 47],
        "Julio" => [50, 23, 58],
        "Agosto" => [23, 21, 25],
        "Septiembre" => [66, 28, 87],
        "Ocrtubre" => [80, 26, 60],
        "Noviembre" => [10, 27, 45],
        "Diciembre" => [90, 32, 24]
    );
    ?>
    <!-- .container is main centered wrapper -->
    <div class="container">

        <!-- columns should be the immediate child of a .row -->
        <div class="row">
            <div class="six column">
                <table class="u-full-width">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Dulces</th>
                            <th>bebidas</th>
                            <th>conservas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($Meses as $X => $Y) {
                            echo "<tr>";
                            echo "<td>";
                            echo "$X";
                            echo "</td>";
                            foreach ($Meses[$X] as $X2 => $Y2) {
                                echo "<td>";
                                echo $Y2;
                                echo "</td>";
                            }
                            echo "</tr>";
                        }
                        ?>
                        <tr>

                        </tr>

                    </tbody>
                </table>

            </div>
            <div class="six columns">
                <?php
                $M = 0;
                $ME = 3000;
                $P = "";
                $MES = "";
                $S = 0;
                $S2 = 0;
                foreach ($Meses as $X3 => $Y3) {
                    foreach ($Meses[$X3] as $X4 => $Y4) {
                       
                        if ($M<$Meses[$X3][2]) {
                            $M=$Meses[$X3][2];
                            $MES=$X3;
                        }
                        if ($S != $Meses[$X3][0]) {
                            $S = $Y4;
                            $S2 += $Y4;
                        }
                        if ($X3 == "Enero") {
                            if ($ME > $Y4) {
                                $ME = $Y4;
                            }
                        }

                    }
                    
                }
                
                ?>
                a) ¿En qué mes se registro el mayor costo de producción de conservas? (25%) <br>
                <?php
                echo "el mes fue: " . $MES;
                ?>
                <br>
                b) Promedio anual de los costos de producción de dulces. (25%)
                <br>
                <?php
                echo "el promedio fue: " . round($S2 / 12);
                ?>
                <br>
                c) ¿Cuál fue el rubro que tuvo el menor costo de producción en enero? (50%)
                <br>
                <?php
                echo "el rubro de produccion fue: " . $ME;
                ?>
                <br>

            </div>
        </div>
    </div>
</body>

</html>