<?php
$distance = rand(500, 1000);
$fuel_100km = 7.5;
$fuel_price = 1.3;
$kaina = round($fuel_price / $fuel_100km * $distance, 2);
$litrai = $distance / 100 * $fuel_100km;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>kilometrai</title>

    </head>
    <body >
        <p>
            <?php print "Nuvažiavus " . $distance . " km, mašina sunaudos " . $litrai . " kuro. Kaina: " . $kaina . " pinigų"; ?>
        </p>
    </body>
</html>


