<?php
$drinks = [
    [
        'name' => 'Cenote™  Blanco',
        'price_stock' => 64,
        'discount' => 12,
        'img' => 'http://www.bennet.lt/cache/images/e4a6856510efef3ffec97f63b196f8bf.JPG',
    ],
    [
        'name' => 'RUSSKIJ REZERV PREMIUM',
        'price_stock' => 9.49,
        'discount' => 20,
        'img' => "http://www.bennet.lt/cache/images/de1fb9e4ced07f6d6afd7ceb38881efc.png",
    ],
    [
        'name' => 'GASPADORIŲ TAMSUSIS 8',
        'price_stock' => 1.45,
        'discount' => 0,
        'img' => 'http://www.bennet.lt/cache/images/6a7e71f7c7d57f53ff8ceea25efd9c30.jpg',
    ],
    [
        'name' => 'BULMERS ORIGINAL',
        'price_stock' => 3.09,
        'discount' => 5,
        'img' => 'http://www.bennet.lt/cache/images/498bc9661b9eeb6d208b4291e5468930.JPG',
    ],
];

foreach ($drinks as $key => $value){
    $drinks[$key]['price_retail'] = number_format((float)($value['price_stock']- $value['price_stock'] * $value['discount']/100), 2);
    $drinks[$key]['price_retail_display'] = "&euro;" . $drinks[$key]['price_retail'];
    $drinks[$key]['price_stock_display'] = "&euro;" . number_format($drinks[$key]['price_stock'], 2);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .price_position-right{
            top: 0;
            right: 0;
        }
    </style>
 </head>
<body>

<div class="d-flex row">
    <?php foreach ($drinks as $key => $value): ?>
        <div class="col-sm-3 border text-center position-relative m-2">
            <div class="card-title bg-secondary position-absolute p-2 m-2"><?php print $value['price_stock_display']; ?></div>
            <div class="card-title bg-danger position-absolute price_position-right p-3 m-2"><?php print $value['price_retail_display']; ?></div>
            <img class="card-img" src="<?php print $value['img']; ?>" alt="">
            <h2><?php print $value['name']; ?></h2>
        </div>
    <?php endforeach; ?>
    <!-- bootstrap js  -->
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/jqery.js"></script>
</body>
</html>