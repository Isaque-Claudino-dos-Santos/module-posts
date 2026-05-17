<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Override;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentences(1, true);
        $slug = Str::slug($title);

        return [
            'image_file_name' => $this->faker->word(),
            'title' => $title,
            'content' => $this->faker->paragraphs(4, true),
            'slug' => $slug,
        ];
    }

}
