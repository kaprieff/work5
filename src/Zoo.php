<?php

namespace Work5;

class Zoo
{
    /** @var Animal[] */
    private array $animals = [];

    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    public function getAllSounds(): array
    {
        $sounds = [];
        foreach ($this->animals as $animal) {
            $sounds[] = $animal->makeSound();
        }
        return $sounds;
    }
}