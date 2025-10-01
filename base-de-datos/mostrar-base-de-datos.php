<?php
include_once(__DIR__ . "/../clases/MiBaseDeDatos.php");
$config = parse_ini_file("config.ini");
$conexion = new MiBaseDeDatos(
    $config['server'],
    $config['pass'],
    $config['user'],
    $config['database'])
or die ("Error en la conexion");

    $datos = $conexion->query("SELECT * FROM pokemon");


for ($i = 0; $i < count($datos); $i += 3) {
    echo "<div class='row text-bg-warning gx-5 border border-black'>";
    for ($j = 0; $j < 3; $j++) {
        if (isset($datos[$i + $j])) {
            echo "<div class='col-4 text-bg-primary p-3 text-center border border-black'>
                    <img src='" . $datos[$i + $j]['imagen'] . "' 
                         alt='" . $datos[$i + $j]['nombre'] . "' 
                         width='100px' 
                         class='p-1 text-bg-success'>
                    <div class='row text-center'><p>Id: " . $datos[$i + $j]["id"] . "</p></div>
                    <div class='row text-center'><p> Nombre: " . $datos[$i + $j]["nombre"] . "</p></div>
                    <div class='row text-center'><p> Tipo: " . $datos[$i + $j]["tipo"] . "</p></div>
                    <div class='row text-center'><p>" . $datos[$i + $j]["descripcion"] . "</p></div>

                  </div>";
        }
    }
    echo "</div>";
}

