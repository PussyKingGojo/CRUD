<?php
require_once('resource/php/class/cars.php');
$car = new cars('Toyota','Black','SUV','120hp');
$car2 = new cars('Nissan','White','SUV','150hp');
$car3 = new cars('Ford','Blue','Sedan','70hp');

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Cars OOP Demo </title>
        <link href="https://cdn.jsdeliver.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php
    
    $car->displayCarInfo();
    $car2->displayCarInfo();
    $car3->displayCarInfo();
    
    ?>
    </body>
    </html>

