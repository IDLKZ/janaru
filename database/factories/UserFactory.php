<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'is_admin' => $this->faker->randomDigitNotNull,
        'name' => $this->faker->word,
        'surname' => $this->faker->word,
        'middlename' => $this->faker->word,
        'email' => $this->faker->word,
        'phone' => $this->faker->word,
        'work' => $this->faker->word,
        'birthday' => $this->faker->word,
        'city' => $this->faker->word,
        'skills' => $this->faker->text,
        'about' => $this->faker->text,
        'email_verified' => $this->faker->randomDigitNotNull,
        'password' => $this->faker->word,
        'remember_token' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
