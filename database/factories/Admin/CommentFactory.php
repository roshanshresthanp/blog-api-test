<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Article;
use App\Models\Admin\Commentator;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'commentator_id' => function(){
                return Commentator::all()->random();
            },
            'article_id' => function(){
                return Article::take(35)->get()->random();
            },
            'comment' => fake()->paragraph()
        ];
    }
}
