<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class  CommentFactory extends Factory
{

    protected $model = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id' => Post::factory(),
            'author'=> $this->faker->name(),
            'content' => $this->faker->paragraph(3, true)

        ];
    }
}
