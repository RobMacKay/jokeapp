<?php

namespace App\Livewire;

use App\Models\Joke;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class TestPage extends Component
{

    public $joke = '';

    public function mount()
    {
        $this->joke = $this->getJoke();
    }

    public function newJoke()
    {
        $this->joke = $this->getJoke();
    }

    protected function getJoke()
    {
        $joke = Http::acceptJson()->get('https://v2.jokeapi.dev/joke/Programming');

        Joke::firstOrCreate([
            'category' => $joke['category'],
            'type' => $joke['type'],
            'joke' =>  $joke['joke'] ?? '',
            'setup' => $joke['setup'] ?? '',
            'delivery' => $joke['delivery'] ?? '',
            'joke_id' => $joke['id'],
            'lang' => $joke['lang'],
            'safe' => $joke['safe'],
        ]);

        return $joke['joke'] ?? $joke['setup'] . ' <br /> ' . $joke['delivery'];
    }


    public function render()
    {
        return view('livewire.test-page');
    }
}
