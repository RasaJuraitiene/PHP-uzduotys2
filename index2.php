<?php
$zodziai = [
    'Kaip',
    'kartais',
    'užknisa',
    'kai',
    'net',
    'nesupranti',
    'užduoties',
    'o',
    'reikia',
    'ja',
    'atlikti',
    'ir',
    'padaryti',
    'ja',
    'teisingai',
    'ir',
    'greitai',
    'greiciau',
    'uz',
    'kitus'
];
$rasinys = '';
//$count_index = count($zodziai);
//$random_index = rand(0, $count_index -1);

for($i = 0; $i < rand(100, 300); $i++) {
    $random_word = $zodziai[(rand(0, count($zodziai) -1))];
    $rasinys .= " $random_word";
}


//foreach ($my_memories as $my_memory) {
//    if (in_array($my_memories, $friend_memories)) {
//        if(!in_array($my_memory, $common_memories))
//        $common_memories[] = $my_memory;
//    }
//}


$h1 = 'Lietuvių egzaminas';
$p = "$rasinys ";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>

        <h1><?php print $h1; ?></h1>
        <p><?php print $p; ?></p>
<!--        <ul>-->
<!--            --><?php //foreach ($my_memories as $value): ?>
<!--                <li>--><?php //print $value; ?><!--</li>-->
<!--            --><?php //endforeach; ?>
<!--        </ul>-->
<!--       <h3>--><?php ////print $h3; ?><!--</h3>-->
<!---->
<!--        <h3>--><?php //print $h3; ?><!--</h3>-->
<!--        <ul>-->
<!--            --><?php //foreach ($friend_memories as $value): ?>
<!--                <li>--><?php //print $value; ?><!--</li>-->
<!--            --><?php //endforeach; ?>
<!--        </ul>-->

    </body>
</html>