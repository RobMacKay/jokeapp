<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Joke>
 */
class JokeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $response = Http::acceptJson()->get('https://v2.jokeapi.dev/joke/Programming');

        return [
            'category' => $response['category'],
            'type' => $response['type'],
            'joke' =>  $response['joke'] ?? '',
            'setup' => $response['setup'] ?? '',
            'delivery' => $response['delivery'] ?? '',
            'joke_id' => $response['id'],
            'lang' => $response['lang'],
            'safe' => $response['safe'],
        ];
    }
}
