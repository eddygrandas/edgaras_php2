<?php
$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);
if ($grizai_velai && $grizai_isgeres) {
    $text = "Miegosi ant sofos, nes grįžai vėlai ir išgėręs.";
} elseif ($grizai_velai && !$grizai_isgeres) {
    $text = "Nemiegosi ant sofos, nes grįžai neišgėręs.";
} elseif (!$grizai_velai&&$grizai_isgeres) {
    $text = "Nemiegosi ant sofos, nes negrįžai vėlai.";
}else {
    $text="Nemiegosi ant sofos nes buvai gerutis.";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>kilometrai</title>
    </head>
    <body >
        <h1><?php print $text; ?></h1>       
    </body>
</html>


