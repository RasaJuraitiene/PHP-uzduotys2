<?php

$cars =
[
$car = new Cars('Audi', 'Audi A6', 'red', 13000, 2015),
$car2 = new Cars('Audi', 'Audi Q5', 'brown', 33000, 2016),
$car3 = new Cars('Bmw', 'Bmw X5', 'blue', 8000, 2012),
$car4 = new Cars('Bmw', 'Bmw M3', 'black', 23000, 2014),
];


class Cars
{
    public $brand;
    public $model;
    public $color;
    public $price;
    public $year;
    public $cars;

    function __construct($brand, $model, $color, $price, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->price = $price;
        $this->year = $year;
    }

    function get_all_info()
    {
        return $this->brand . ' ' . $this->model . ' ' . $this->color . ' ' . $this->price . ' ' . $this->year;
    }

    function get_all_cars($array)
    {
        $result = '';
        foreach ($array as $car) {
            foreach ($car as $stat => $value) {
                if ($stat == 'cars') {
                    continue;
                }
                $result .= $stat . ': ' . $value . '<br>';
            }
            $result .= '<br>';
        }
        return $result;
    }
}

print $car->get_all_cars($cars);

?>

<html>
<head>
    <title>Person</title>
<!--    <style>-->
<!--        section {-->
<!--            width: 80vw;-->
<!--            height: 100vh;-->
<!--            margin: 0 auto;-->
<!--        }-->
<!---->
<!--        table, th, td   {-->
<!--            border: 2px solid black;-->
<!--            border-collapse: collapse;-->
<!--        }-->
<!--    </style>-->
</head>
<body>
<!--<section>-->
<!--    <table>-->
<!--        <thead>-->
<!--        <tr>-->
<!--            <th>Name</th>-->
<!--            <th>Surname</th>-->
<!--            <th>ID</th>-->
<!--        </tr>-->
<!--        </thead>-->
<!--        <tbody>-->
<!--        --><?php //print $pirmas->get_table_row(); ?>
<!--        --><?php //print $pirmas2->get_table_row(); ?>
<!--        </tbody>-->
<!--    </table>-->
<!--</section>-->
</body>
</html>




