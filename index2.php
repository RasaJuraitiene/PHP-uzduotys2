<?php
$drinks = [
    [
        'name' => 'Cenoteâ„¢  Blanco',
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
        'name' => 'GASPADORIÅ² TAMSUSIS 8',
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

foreach ($drinks as $key => $drink) {
    $drinks[$key]['price_retail'] = $drink['price_stock'] * (1 - $drink['discount'] * 0.01);
    $drinks[$key]['price_retail_display'] = "&euro;" . number_format($drinks[$key]['price_retail'], 2);

    if ($drink['discount']) {
        $drinks[$key]['price_stock_display'] = "&euro;" . number_format($drinks[$key]['price_stock'], 2);
    }

    $drinks[$key]['in_stock'] = rand(0, 1);

    if ($drinks[$key]['in_stock']) {
        $drinks[$key]['in_stock_class'] = 'in-stock';
        $drinks[$key]['in_stock_display'] = 'Yra sandelyje';
    } else {
        $drinks[$key]['in_stock_class'] = 'not-in-stock';
        $drinks[$key]['in_stock_display'] = 'Nera sandelyje';

        unset($drinks[$key]['price_retail_display']);
        unset($drinks[$key]['price_stock_display']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gerti gerti</title>
    <style>
        .drinks-container {
            max-width: 800px;
            position: relative;
            display: flex;
        }

        .drink {
            position: relative;
            display: inline-block;
            margin: 10px;
            border: 1px solid gray;
            height: 250px;
            width: 200px;
            text-align: center;
        }

        .drink-image {
            object-fit: cover;
            height: 150px;
            margin: 0 auto;
            padding: 5px;
        }

        .drink-name {
            font-size: 16px;
        }

        .price {
            display: block;
            position: absolute;
            color: white;
            padding: 4px;
        }

        .price.stock {
            background: gray;
            left: 0;
            top: 0;
        }

        .price.retail {
            background: red;
            right: 0;
            top: 0;
            padding: 6px;
        }
        .in-stock-class{
            color: red;

        }
        .not-in-stock{
            filter: grayscale(100%);
        }
    </style>
</head>
<body>
<div class="drinks-container">
    <?php foreach ($drinks as $key => $drink): ?>
        <div class="drink <?php print $drink['in_stock_class']; ?>">
            <?php if (isset($drink['price_stock_display'])): ?>
                <div class="price stock"><?php print $drink['price_stock_display']; ?></div>
            <?php endif; ?>

            <?php if (isset($drink['price_retail_display'])): ?>
                <div class="price retail"><?php print $drink['price_retail_display']; ?></div>
            <?php endif; ?>

            <img class="drink-image" src="<?php print $drink['img']; ?>">
            <div class="drink-name"><?php print $drink['name']; ?></div>
            <div class="drink-stock"><?php print $drink['in_stock_display']; ?></div>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>