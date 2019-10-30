<?php
//include "./app/php/php.php";
//include "./app/views/layouts/head.php";
//include "./app/views/layouts/header.php";
//include "./app/views/layouts/footer.php";

$clubs = [
        ['name' => 'Impuls',
         'adress' =>'VIENUOLIO G. 4',
         'city' => 'Vilnius'
        ],
        [
        'name' => 'GYM',
        'adress' =>'Gedimino',
        'city' => 'Vilnius'
        ],
        [
        'name' => 'Lemon gym',
        'adress' =>'Pievu 5',
        'city' => 'Vilnius'
         ],
        ];

function clubs_name_city_adress($clubs){
    foreach ($clubs as $value) {
        print $value['name'] . ' ' . $value ['adress'] .' ' . $value['city'] .' ';
    }
    return;
}

$masyvas = clubs_name_city_adress($clubs);

//$money = [
//    [
//        'name' => 'eurai',
//        'qnty' =>'450',
//        'exchange' => '3.4528'
//    ],
//    [
//        'name' => 'baksai',
//        'qnty' =>'500',
//        'exchange' => '2.88'
//    ],
//    [
//        'name' => 'litai',
//        'qnty' =>'1000',
//        'exchange' => '1'
//    ],
//];

$skaicius1 = 15;
$skaicius2 = 35;

function daugyba($skaicius1, $skaicius2){
           print $skaicius3 = $skaicius1 * $skaicius2;
           return $skaicius3;
}

daugyba($skaicius1, $skaicius2);

function muber($numb){
    print abs($numb);
}

number(2);

?>
<body class="bg_img">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="app/views/sporto-klubai.php">Sporto klubai</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="app/views/treneriai.php">Treneriai</a>
                        </li>
                    </ul>
                </div>
            </nav>

        <h3><?php print $masyvas; ?></h3>
        <h3><?php print $daugyba; ?></h3>

<!--        <form action="" method="post">-->
<!--        <label for="club">Sporto klubas:</label>-->
<!--        <select name="club" id="">-->
<!--        --><?php //foreach ($array as $key => $value):   ?>
<!--            <option value="">Impuls</option>-->
<!--            <option value="">Lemon Gym</option>-->
<!--            <option value="">Gym+</option>-->
<!--        --><?php //endforeach; ?>
<!--        </select>;-->
<!--            <label for="club">Miestas:</label>-->
<!--            <select name="club" id="">-->
<!--                --><?php //foreach ($array as $key => $value):   ?>
<!--                    <option value="">Vilnius</option>-->
<!--                    <option value="">Kaunas</option>-->
<!--                    <option value="">Klaipėda</option>-->
<!--                --><?php //endforeach; ?>
<!--            </select>;-->
<!--            <label for="club">Ar sporto klube yra sauna?</label>-->
<!--            <select name="club" id="">-->
<!--                --><?php //foreach ($array as $key => $value):   ?>
<!--                    <option value="">Yra</option>-->
<!--                    <option value="">Nėra</option>-->
<!--                --><?php //endforeach; ?>
<!--            </select>;-->
<!--            <label for="club">Ar sporto klube yra maitinimas?</label>-->
<!--            <select name="club" id="">-->
<!--                --><?php //foreach ($array as $key => $value):   ?>
<!--                    <option value="">Yra</option>-->
<!--                    <option value="">Nėra</option>-->
<!--                --><?php //endforeach; ?>
<!--            </select>;-->
<!--            <label for="club">Ar sporto klube yra soliariumas?</label>-->
<!--            <select name="club" id="">-->
<!--                --><?php //foreach ($array as $key => $value):   ?>
<!--                    <option value="">Yra</option>-->
<!--                    <option value="">Nėra</option>-->
<!--                --><?php //endforeach; ?>
<!--            </select>;-->
<!---->
<!--        <input type="" name="" value="true">-->
<!--        <input type="" name="" value="false">-->
<!---->
<!--        <input type="submit">-->
<!--        </form>-->

