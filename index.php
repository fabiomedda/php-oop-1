<?php
/*
Istruzioni:
Create una classe per descrivere un entitá, assegnatele degli attributi, utilizzate il constructor. 
Create alcune istanze della classe. Stampate a schermo gli attributi di ogni istanza.
Per chi non ha fantasia ecco qualche entitá che potete usare:
Animale, Persona, Casa, Computer, Hotel, Film, Videogioco, Sport, Bicicletta, Veicolo, Nazione etc.
*/


/** class Computer
 * @author Fabio Fabio@gmail.com
 * @copyright 2021 Fabio.
 */

class Computer {

    public $brand;
    public $model;
    public $motherboard;
    public $CPU;
    public $GPU;
    public $memory;
    public $storage;
    public $price;

    public function __construct(string $brand, string $model, string $motherboard, string $CPU, string $GPU, string $memory, string $storage, float $price)
    {

        $this->brand = $brand;
        $this->model = $model;
        $this->motherboard = $motherboard;
        $this->CPU = $CPU;
        $this->GPU = $GPU;
        $this->memory = $memory;
        $this->storage = $storage;
        $this->price = $price;
    }

    public function getCPU()
    {
        return $this->CPU;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

}

$Trident = new Computer('MSI', 'Trident', 'Intel B460', 'i7-10700k', 'RTX 2070 Super 8GB GDDR6', '2x8GB DDR4 2666MHz', '1TB HDD + 500GB SSD', 2599.99);
$MrWhite = new Computer('Asus', 'MrWhite i9', 'Intel ROG Strix Z490', 'i9-10900', 'ROG Strix GeForce RTX 2080 SUPER', '32GB Pro Kit 4x8GB DDR4 3000MHz', 'WD 1TB BLACK NVME SSD M.2', 3599.99);
$HP = new Computer('HP', 'Omen', 'Intel Z390', 'i7-9700F', 'RTX 2070', '8GB DDR4 2666MHz', '1TB HDD + 256GB SSD', 1999.99);
$Predator = new Computer('Acer', 'Predator', 'Intel Z490', 'i9-10980HK', 'RTX 2080 Super 8GB GDDR6', '32GB DDR4 2666MHz', '1TB SSD', 3999.00);
$Infinite = new Computer('MSI', 'Infinite', 'Intel Z490', 'i9-10900KF', 'RTX 2080 Ti 11GB GDDR6', '32GB DDR4 2666MHz', '1TB HDD + 1TB SSD', 3699.99);

//var_dump($Trident, $MrWhite, $HP, $Predator, $Infinite);
/*
var_dump($Trident->brand);

foreach ($Trident as $key => $value) {
    var_dump($key, $value);
}

var_dump($Predator->getCPU());

*/
$Infinite->setPrice(3399.39);
//var_dump($Infinite->price);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: rgb(77, 77, 77);
            display: flex;
            flex-wrap: wrap;
        }
        div{
            margin: 20px;
        }
    </style>
</head>

<body>

    <?php

    echo '<div>';
    echo '<h2>' . $Trident->model . '</h2>';
    foreach ($Trident as $key => $value) {
        echo '<h3>' . $key . ': ' . $value . '</h3>';
    }
    echo '</div>';

    echo '<div>';
    echo '<h2>' . $MrWhite->model . '</h2>';
    foreach ($MrWhite as $key => $value) {
        echo '<h3>' . $key . ': ' . $value . '</h3>';
    }
    echo '</div>';

    echo '<div>';
    echo '<h2>' . $HP->model . '</h2>';
    foreach ($HP as $key => $value) {
        echo '<h3>' . $key . ': ' . $value . '</h3>';
    }
    echo '</div>';

    echo '<div>';
    echo '<h2>' . $Predator->model . '</h2>';
    foreach ($Predator as $key => $value) {
        echo '<h3>' . $key . ': ' . $value . '</h3>';
    }
    echo '</div>';

    echo '<div>';
    echo '<h2>' . $Infinite->model . '</h2>';
    foreach ($Infinite as $key => $value) {
        echo '<h3>' . $key . ': ' . $value . '</h3>';
    }
    echo '</div>';

    ?>

</body>

</html>
