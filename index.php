<?php

$car_price_new = 30000;
$depreciation = 0.98;
$car_price_used = $car_price_new;
$santaupos = 15000;

for ($months = 1; $car_price_used <= $santaupos ; $months++){

    $car_price_used = $car_price_used * $depreciation;

}

$car_price_used = round($car_price_used, 2);

$h1 = "Kiek nuvertės mašina?";
$h2 = " Naujos mašinos kaina: $car_price_new";
$h3 = "Mašiną galėsi nusipirkti po $months mėn. , kai jos vertė bus: $car_price_used ."

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
<h1><?php print $h1; ?></h1>
<h2><?php print $h2; ?></h2>
<h3><?php print $h3; ?></h3>
</body>
</html>