<?php

namespace Work5;

class Car
{
    private string $marka;
    private string $model;
    private int $year;
    private int $mileage;

    public function __construct(string $marka, string $model, int $year, int $mileage)
    {
        $this->marka = $marka;
        $this->model = $model;
        $this->year = $year;
        $this->mileage = $mileage;
    }

    public function getInfo(): string
    {
        return "Машина: {$this->marka}, модель: {$this->model}, год: {$this->year}, пробег: {$this->mileage} км";
    }

    public function drive(int $kilometers): void
    {
        if ($kilometers < 0) {
            throw new \InvalidArgumentException("Пробег не может быть отрицательным.");
        }
        $this->mileage += $kilometers;
    }

    public function getMileage(): int
    {
        return $this->mileage;
    }
}