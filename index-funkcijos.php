<?php

$zoo =
[
$gyvunas = new Zoo('gyvunas','zebras', 'juoda_balta' ),
$paukstis = new Zoo('paukstis', 'pelikanas', 'rozinis'),
$gyvunas2 = new Zoo('gyvunas', 'liutas', 'rudas'),
$paukstis2 = new Zoo('paukstis', 'peleda', 'balta'),
];


class Zoo
{
    public $tipas;
    public $rusis;
    public $spalva;

    function __construct($tipas, $rusis, $spalva)
    {
        $this->tipas = $tipas;
        $this->rusis = $rusis;
        $this->spalva = $spalva;
    }

    function get_all_info()
    {
        return $this->tipas . ' ' . $this->rusis . ' ' . $this->spalva;
    }

    function get_item_tipas()
    {
        return $this->tipas;
    }
    function get_item_rusis()
    {
        return $this->rusis;
    }
    function get_item_spalva()
    {
        return $this->spalva;
    }

    function get_all_gyvunai($zoo)
    {
        $card1 = [];
        $card2 = [];

        foreach ($zoo as $objektas) {
            if ($objektas->get_item_tipas() == 'gyvunas') {
                $card1[] = $objektas;
            } else {
                $card2[] = $objektas;
            }
        }
        return[
            'gyvunas'=>$card1,
            'paukstis'=>$card2,
        ];
    }
}
    function get_table($array, $key)
    {
        foreach ($array[$key] as $value){
         print '
            <tr>
                <td>' . $value->get_item_tipas() . '</td>
                <td>' . $value->get_item_rusis() . '</td>
                <td>' . $value->get_item_spalva() . '</td>
            </tr>
        ';
           }
}
$zoo = $gyvunas->get_all_gyvunai($zoo);

//    function get_all_cars($array)
//    {
//        $result = '';
//        foreach ($array as $car) {
//            foreach ($car as $stat => $value) {
//                if ($stat == 'cars') {
//                    continue;
//                }
//                $result .= $stat . ': ' . $value . '<br>';
//            }
//            $result .= '<br>';
//        }
//        return $result;
//    }
//}
//
//print $car->get_all_cars($cars);

?>

<html>
<head>
    <title>Person</title>
    <style>
        tr, td, th {
            border: 2px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
<body>
<table>
    <?php get_table($zoo, 'gyvunas'); ?>
</table>
<table>
    <?php get_table($zoo, 'paukstis'); ?>
</table>
</body>
</body>
</html>




