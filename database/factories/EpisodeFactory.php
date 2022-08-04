<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Episode;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Episode>
 */
class EpisodeFactory extends Factory
{
    protected $model = Episode::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'course_id' => Course::all()->random()->id,
            'title' => $this->faker->sentence(4),
            'content' => $this->faker->paragraph(80),
            'video_url' => '1.jpg'
        ];
    }
}
  