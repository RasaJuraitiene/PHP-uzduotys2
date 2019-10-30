<?php
//include "./app/php/php.php";
//include "./app/views/layouts/head.php";
//include "./app/views/layouts/header.php";
//include "./app/views/layouts/footer.php";

class Fruit
{
    public $name;
    public $color;
    public $country;

    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
    function set_color($color)
    {
        $this->color = $color;
    }
    function get_color()
    {
        return $this->color;
    }
    function set_country($country)
    {
        $this->country = $country;
    }
    function  get_country()
    {
        return $this->country;
    }
//    set al parameters
    function set_all($name, $color, $country)
    {
        $this->name = $name;
        $this->color = $color;
        $this->country = $country;
    }
//    get all parameters
    function get_all()
    {
        return $this->name . $this->color . $this->country;
    }
    function get_all_in_card()
    {
        print "
        <section class =\"card\">
            <h1>". $this->name . "</h1>
            <h3>". $this->color . "</h3>
            <p>". $this->country . "</p>
        </section>
        ";
    }
}


//new object
$apple = new Fruit();

//set object parameters
$apple->set_name('Apple');
$apple->set_name('Red');
$apple->set_name('Lithuania');
$apple->set_all('Kiwi', 'Green', 'Africa');
//print object parameters
print "Name:"  . $apple->get_name();
print "<br>";
print "Color: " . $apple->get_color();
print "<br>";
print "Country: " . $apple->get_country();



//function lyginisNelyginis($numb){
//    if ($numb % 2 == 0){
//        print 'Lyginis ';
//    }else{
//        print 'Nelyginis ';
//    }
//}
//lyginisNelyginis(14);
//
//function saknis($numb){
//    print sqrt($numb);
//}
//
//saknis(24);
//
//$text = 'Blemba kaip mane uzknisa toks oras. Pizdiec nuotaikai.';
//
//function filtras($textArray){
//    $keiksmazodis1 = 'BLEMBA';
//    $keiksmazodis2 = 'PIZDIEC';
//    $textArray = strtoupper($textArray);
//    $textArray = str_replace($keiksmazodis1, '***', $textArray);
//    $textArray = str_replace($keiksmazodis2, '***', $textArray);
//
//        print $textArray;
//}
//filtras($text);

//$vardas = 'Alius';

//function hello($vardas)
//{
//    print "Hello $vardas";
//
//}
//hello($vardas);

//function clubs_name_city_adress($clubs){
//    foreach ($clubs as $value) {
//        print $value['name'] . ' ' . $value ['adress'] .' ' . $value['city'] .' ';
//    }
//    return;
//}
//
//$masyvas = clubs_name_city_adress($clubs);
//
//$skaicius1 = 15;
//$skaicius2 = 35;
//
//function daugyba($skaicius1, $skaicius2){
//    print $skaicius3 = $skaicius1 * $skaicius2;
//    return $skaicius3;
//}
//
//daugyba($skaicius1, $skaicius2);
//
//function muber($numb){
//    print abs($numb);
//}
//
//number(2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fruits</title>
    <style>
        .card{
            border: 3px solid black;
            background-image: url("https://i5.walmartimages.ca/images/Large/094/514/6000200094514.jpg");
        }
    </style>
</head>
<body>
<?php $apple->get_all_in_card(); ?>

</body>





