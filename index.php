<?php

require_once __DIR__ . '/vendor/autoload.php';

use Work5\Car;
use Work5\Rectangle;
use Work5\Dog;
use Work5\Cat;
use Work5\Zoo;

// --- Тест Car ---
$car = new Car("Toyota", "Camry", 2020, 15000);
echo $car->getInfo() . PHP_EOL;
$car->drive(100);
echo "Новый пробег: " . $car->getMileage() . " км" . PHP_EOL;

echo str_repeat("-", 40) . PHP_EOL;

// --- Тест Rectangle ---
$rect = new Rectangle(5.5, 3.0);
echo "Площадь: " . $rect->getArea() . PHP_EOL;
echo "Периметр: " . $rect->getPerimeter() . PHP_EOL;

echo str_repeat("-", 40) . PHP_EOL;

// --- Тест Zoo ---
$zoo = new Zoo();
$zoo->addAnimal(new Dog("Рекс"));
$zoo->addAnimal(new Cat("Мурка"));
$sounds = $zoo->getAllSounds();
foreach ($sounds as $sound) {
    echo $sound . PHP_EOL;
}