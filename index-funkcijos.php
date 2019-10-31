<?php

//include "app/php/global.php";
//
//include "app/views/layouts/head.php";
//
//include "app/views/layouts/navigation.php";

class Zoo

{

    public $type;

    public $race;

    public $color;

    public $size;

    function __construct($type, $race, $color, $size)

    {

        $this->type = $type;

        $this->race = $race;

        $this->color = $color;

        $this->size = $size;

    }

}

$animals = [

    $animal_1 = new Zoo ('Bird', 'Eagle', 'grey', 'small'),

    $animal_2 = new Zoo ('Bird', 'Hawk', 'brown', 'medium'),

    $animal_3 = new Zoo ('Fish', 'Salmon', 'orange', 'small'),

    $animal_4 = new Zoo ('Fish', 'Whale', 'blue', 'big'),

];

function displayBirdsRow($array)

{

    foreach ($array as $key => $value) {

        if ($value->type == 'Bird') {

            print "

<tr>

<td>" . $value->type . "</td>

<td>" . $value->race . "</td>

<td>" . $value->color . "</td>

<td>" . $value->size . "</td>

</tr>

";

        }

    }

}

function displayFishRow($array)

{

    foreach ($array as $key => $value) {

        if ($value->type == 'Fish') {

            print "

<tr>

<td>" . $value->type . "</td>

<td>" . $value->race . "</td>

<td>" . $value->color . "</td>

<td>" . $value->size . "</td>

</tr>

";

        }

    }

}

?>

<div class="mx-auto text-center pt-5 d-flex justify-content-around">

    <table>

        <thead>

        <tr>

            <td>Type</td>

            <td>Race</td>

            <td>Color</td>

            <td>Size</td>

        </tr>

        </thead>

        <tbody>

        <?php displayBirdsRow($animals); ?>

        </tbody>

    </table>

    <table>

        <thead>

        <tr>

            <td>Type</td>

            <td>Race</td>

            <td>Color</td>

            <td>Size</td>

        </tr>

        </thead>

        <tbody>

        <?php displayFishRow($animals); ?>

        </tbody>

    </table>

</div>

<?php include "app/views/layouts/footer.php"; ?>



