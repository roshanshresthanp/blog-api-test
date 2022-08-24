<?php

namespace Database\Factories\Admin;

use App\Models\Admin\Author;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>fake()->text(),
            'description'=>fake()->paragraph(),
            'author_id'=>function(){
                return Author::all()->random();
            }
        ];
    }
}
