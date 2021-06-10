<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->word,
        'title_ru' => $this->faker->word,
        'title_kz' => $this->faker->word,
        'subtitle_ru' => $this->faker->word,
        'subtitle_kz' => $this->faker->word,
        'desc_ru' => $this->faker->word,
        'desc_kz' => $this->faker->word,
        'alias' => $this->faker->word,
        'img' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
