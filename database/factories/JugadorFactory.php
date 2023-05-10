<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jugador>
 */
class JugadorFactory extends Factory {
    public  $id = 230010;
 
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array {
        $gender = $this->faker->numberBetween(1,2);
        return [
            "idAfiliacion" => $this->id++,
            "nombre" => $gender == 1 ? $this->faker->firstNameMale() : $this->faker->firstNameFemale(),
            "apellidos" => $this->faker->lastName() . " " . $this->faker->lastName(),
            "fechaNacimiento" => $this->faker->date(),
            "curp" => $this->faker->bothify("????######??????#?"),
            "posicion" => $this->faker->numberBetween(1,11),
            "golpea" => $this->dominio(),
            "tira" => $this->dominio(),
            "abreviacion" => $this->faker->lexify("???."),
            "status" => 1

        ];
    }

    private function dominio(){
        switch($this->faker->numberBetween(1,3)){
            case 1:
                return "Derecho";
            case 2:
                return "Izquierdo";
            case 3:
                return "Ambidiestro";
        }
    }
}