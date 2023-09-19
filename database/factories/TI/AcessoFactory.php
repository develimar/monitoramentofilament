<?php

namespace Database\Factories\TI;

use App\Models\TI\Acesso;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TI\Acesso>
 */
class AcessoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Acesso::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->title,
            'url' => $this->faker->url,
            'username' => $this->faker->userName,
            'password' => $this->faker->password,
        ];
    }
}
