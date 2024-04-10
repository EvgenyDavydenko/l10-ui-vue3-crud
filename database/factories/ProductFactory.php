<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true), // Генерирует строку из трех слов
            'description' => $this->faker->paragraph, // Генерирует абзац текста
            'price' => $this->faker->randomFloat(2, 100, 1000), // Генерирует число с плавающей точкой с двумя знаками после запятой в диапазоне от 0 до 1000
        ];
    }
}
