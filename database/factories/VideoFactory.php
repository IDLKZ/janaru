<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => $this->faker->word,
        'title_ru' => $this->faker->word,
        'title_kz' => $this->faker->word,
        'subtitle_ru' => $this->faker->word,
        'subtitle_kz' => $this->faker->word,
        'desc_ru' => $this->faker->word,
        'desc_kz' => $this->faker->word,
        'link' => $this->faker->word,
        'alias' => $this->faker->word,
        'img' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
