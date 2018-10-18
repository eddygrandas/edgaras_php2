<?php
$distance = rand(500, 1000);
$fuel_100km = 7.5;
$fuel_price = 1.3;
$kaina = round($fuel_price / $fuel_100km * $distance, 2);
$litrai = $distance / 100 * $fuel_100km;
$my_money = 100;
$pirmyn = " galiu";
$stop = " negaliu";
if ($my_money <= $kaina) {
    $kelione = $stop;
} else {
    $kelione = $pirmyn;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>kilometrai</title>
    </head>
    <body >
        <p>
            <?php
            print "Nuvažiavus " . $distance . " km, mašina sunaudos "
                    . $litrai . " kuro. Kaina: " . $kaina . " Išvada: Aš sau tai"
                    . $kelione . " leisti.";
            ?>
        </p>
    </body>
</html>


