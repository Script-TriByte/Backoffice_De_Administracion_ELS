<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserUsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => '1',
            'docDeIdentidad' => '77777777',
        ];
    }
}
