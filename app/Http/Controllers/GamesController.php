<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Games;


class GamesController extends Controller
{
    public function saveGame($allgame)
    {
        $game = new Games;
        $game->game_id = $allgame->id;
        $game->slug = $allgame->slug;
        $game->name = $allgame->name;
        $game->released = $allgame->released;
        $game->background_image = $allgame->background_image;
        $game->rating = $allgame->rating;
        $game->rating_top = $allgame->rating_top;
        $game->ratings_count = $allgame->ratings_count;
        $game->reviews_text_count = $allgame->reviews_text_count;
        $game->added = $allgame->added;
        $game->metacritic = $allgame->metacritic;
        $game->playtime = $allgame->playtime;
        $game->suggestions_count = $allgame->suggestions_count;
        $game->updated = $allgame->updated;
        $game->reviews_count = $allgame->reviews_count;
        $game->save();  
    }

    public function getPlatform($object)
    {
        if ($object->{'platforms'}) {
            foreach ($object->{'platforms'} as $key => $platform) {
                //var_dump($platform->{'platform'}->{'name'}); // Récupere le 'name' de la plateforme
            }
        }
    }

    public function getRatings($object)
    {
        if ($object->{'ratings'}) {
            foreach ($object->{'ratings'} as $key => $rating) {
                //var_dump($rating->{'title'}); // Récupere le 'title' du rating
            }
        }
    }

    public function fetch()
    {
        $response = Http::get('https://api.rawg.io/api/games?', [
            'key' => 'b7a58e4633904057ad6d089436a2fe3f',
            'limit' => 200,
        ]);

        $allgames = json_decode($response->body());
        foreach ($allgames->results as $index => $allgame) {
            $this->getRatings($allgame);
            $this->getPlatform($allgame);
            $this->saveGame($allgame);
        }
    }
}