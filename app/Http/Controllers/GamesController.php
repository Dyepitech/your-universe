<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Games;


class GamesController extends Controller
{
    public function fetch()
    {
        $response = Http::get('https://api.rawg.io/api/games?', [
            'key' => 'b7a58e4633904057ad6d089436a2fe3f',
            'limit' => 200,
        ]);
        
        $allgames = json_decode($response->body());
        foreach($allgames->results as $index=>$allgame){
            if ($allgame->{'ratings'}){
                //var_dump($game->{'ratings'}[0]); Affiche la valeur [0] du tableau d'objet ratings
                foreach($allgame->{'ratings'} as $key=>$rating){
                    var_dump($key);
                    var_dump($rating);
                }
            }
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
    } 
}


// <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http;

// class GamesController extends Controller
// {
//     public function fetch()
//     {
//         $response = Http::get('https://api.rawg.io/api/games?', [
//             'key' => 'b7a58e4633904057ad6d089436a2fe3f',
//             'limit' => 200,
//         ]);
//         $games = json_decode($response->body());
//         foreach($games->results as $index=>$game){
//             if ($game->{'ratings'}){
//                 //var_dump($game->{'ratings'}[0]); Affiche la valeur [0] du tableau d'objet ratings
//                 foreach($game->{'ratings'} as $key=>$rating){
//                     var_dump($key);
//                     var_dump($rating);
//                 }
//             }
//             dd($game);
//             if ($index == 0) /* On bloque la boucle pour avoir qu'un jeux pour faire les test avant de boucler sur tout les jeux */ 
//                 break;
//         }
//     } 
// }