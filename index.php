<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Pirmas</title>
    </head>
    <?php
    $mano_pinigai = 1000;
    $spent_pm = 600;
    $earned_pm = 800;
    $unknown_pm = rand(100, 500);
    $months = 24;
    $wallet_forecast = $mano_pinigai - (24 * ($earned_pm - $spent_pm - $unknown_pm));
    ?>
    <body>
        <p>
            <?php print 'Po ' . $months . ' (' . date("Y m d", strtotime('+' . $months . 'month')) . ')' . ', tikėtina turėsiu ' . $wallet_forecast . ' pinigų'; ?>
        </p>
    </body>
</html>
