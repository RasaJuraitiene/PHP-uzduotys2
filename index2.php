<?php
$my_memories = [
    'darbas',
    'popkornai',
    'namai',
    'vaikai',
    'penktadienio_filmas',
    'non-alcoholic_drinks',
    'bemieges_naktys',
    'poilsis'
];

$count_index = count($my_memories);
$random_index = rand(0, $count_index);

$h1 = 'Kas buvo penktadieni?!';
$h2 = 'Rasos prisiminimai:';
$h3 = "$random_index $my_memories[$random_index]";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    </head>
    <body>

        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <ul>
            <?php foreach ($my_memories as $value): ?>
                <li><?php print $value; ?></li>
            <?php endforeach; ?>
        </ul>
        <h3><?php print $h3; ?></h3>

    </body>
</html>