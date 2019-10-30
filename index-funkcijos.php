<?php
class Person {
    public $name;
    public $surname;
    public $id;

    function set_all($name, $surname, $id) {
        $this->name = $name;
        $this->surname = $surname;
        $this->id = $id;
    }
    function set_name($name) {
        $this->name = $name;
    }
    function set_surname($surname) {
        $this->surname = $surname;
    }
    function set_id($id) {
        $this->id = $id;
    }
    function get_name() {
        return $this->name;
    }
    function get_surname() {
        return $this->surname;
    }
    function get_id() {
        return $this->id;
    }
    function get_table_row() {
        return "
            <tr>
                <td>" . $this->name . "</td>
                <td>" . $this->surname . "</td>
                <td>" . $this->id . "</td>
            </tr>
        ";
    }
}
$pirmas = new Person();
$pirmas2 = new Person();
$pirmas->set_all('Petras', 'Petraitis', 36845214452);
$pirmas2->set_all('Jonas', 'Jonaitis', 3678908755);

?>

<html>
<head>
    <title>Person</title>
    <style>
        section {
            width: 80vw;
            height: 100vh;
            margin: 0 auto;
        }

        table, th, td   {
            border: 2px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<section>
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>ID</th>
        </tr>
        </thead>
        <tbody>
        <?php print $pirmas->get_table_row(); ?>
        <?php print $pirmas2->get_table_row(); ?>
        </tbody>
    </table>
</section>
</body>
</html>




