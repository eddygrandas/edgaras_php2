<?php
$sunny = 'http://icons.iconarchive.com/icons/oxygen-icons.org/oxygen/128/Status-weather-clear-icon.png';
$raining = 'http://icons.iconarchive.com/icons/oxygen-icons.org/oxygen/128/Status-weather-showers-icon.png';
$cloudy = 'http://icons.iconarchive.com/icons/oxygen-icons.org/oxygen/128/Status-weather-many-clouds-icon.png';
$sunrain = 'http://icons.iconarchive.com/icons/oxygen-icons.org/oxygen/128/Status-weather-showers-day-icon.png';
$sun = rand(0, 1);
$rain = rand(0, 1);
$klase = "";

if ($sun && $rain) {
    $klase = "saulelyja";
}
if ($sun && !$rain) {
    $klase = "sauleta";
}
if (!$sun && $rain) {
    $klase = "lietinga";
}
if (!$sun && !$rain) {
    $klase = "debesuota";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Orai</title>
        <style>
            .sauleta{
                height: 128px;
                width: 128px;
                background-image: url("<?php print $sunny ?>");  
            }
            .lietinga{
                height: 128px;
                width: 128px;
                background-image: url("<?php print $raining ?>");  
            }
            .saulelyja{
                height: 128px;
                width: 128px;
                background-image: url("<?php print $sunrain ?>");  
            }
            .debesuota{
                height: 128px;
                width: 128px;
                background-image: url("<?php print $cloudy ?>");  
            }
        </style>
    </head>
    <body >
        <div class="<?php print $klase; ?>">
            <?php echo "$sun $rain"; ?>
        </div>
    </body>
</html>


