<?php
    include_once("../clases/MiBaseDeDatos.php");
    $config = parse_ini_file("config.ini");
    $conexion = new MiBaseDeDatos(
        $config['server'],
        $config['pass'],
        $config['user'],
        $config['database'])
    or die ("Error en la conexion");

    $datos = $conexion->query("SELECT * FROM pokemon");

    echo "<table border='1'>";
    foreach($datos as $dato){
        echo "<tr>";
        echo "<td>" . $dato["id"] . "</td>";
        echo "<td>" . $dato["numero"] . "</td>";
        echo "<td>" . $dato["imagen"] . "</td>";
        echo "<td>" . $dato["nombre"] . "</td>";
        echo "<td>" . $dato["tipo"] . "</td>";
        echo "<td>" . $dato["descripcion"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

