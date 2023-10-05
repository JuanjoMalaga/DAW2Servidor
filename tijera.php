<?php

define('PIEDRA',  "&#x1F91C;");
define('PIEDRA2',  "&#x1F91B;");
define('TIJERAS',  "&#x1F596;");
define('PAPEL',    "&#x1F91A;");

$posiblesResultados = [[0, 2, 1], [1, 0, 2], [2, 1, 0]];
$numeroANombre = array(PIEDRA, PAPEL, TIJERAS);

$jugadaJ1 = JugadaJugador1();
$jugadaJ2 = JugadaJugador2();

$resultado = $posiblesResultados[$jugadaJ1][$jugadaJ2];

function JugadaJugador1()
{
    $r = rand(0, 2);
    return $r;
}

function JugadaJugador2()
{
    $r = rand(0, 2);
    return $r;
}
function TextoResultado($r) {
    if ($r == 0) return "Empate!"; else return "Gana el jugador ". $r;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="2">
        <thead>
            <td>Jugador 1</td>
            <td>Jugador 2</td>
        </thead>
        <tr style="font-size: 8em;">
            <td><?php echo $numeroANombre[$jugadaJ1] ?> </td>
            <td><?php echo $jugadaJ2 == 0 ? PIEDRA2 : $numeroANombre[$jugadaJ2] ?></td>
        </tr>
    </table>

    <h1> <?php echo TextoResultado($resultado); ?> </h1>

</body>

</html>