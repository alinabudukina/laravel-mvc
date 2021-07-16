<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'description' => "Mon chat est trop mignon",
        'img_url' => $this->faker->imageUrl(640, 480, 'cats'),
        'user_id' => 1
        ];
    }
}
