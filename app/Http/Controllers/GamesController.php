<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Games;
use App\Models\GameRatings;
use App\Models\GamePlatforms;
use App\Models\GameGenres;
use App\Models\GameScreenshots;
use App\Models\GameStores;
use App\Models\GameTags;


class GamesController extends Controller
{

    public function isAlreadyExist($id)
    {
        $games = Games::where('game_id', '=', $id)->exists();
        if ($games)
            return true;
        else
            return false;
    }

    public function saveGame($allgame, $i)
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
        $game->from_api_page = $i;
        $game->save();  
    }

    public function getScreens($object, $gameId)
    {
        if ($object->{'short_screenshots'}) {
            $game = new GameScreenshots;
            foreach ($object->{'short_screenshots'} as $key => $screen) {
                $game->game_id = $gameId;
                if ($key == 0) {
                    $game->screen_1 = $screen->{'image'};
                    $game->save();
                }
                if ($key == 1) {
                    $game->screen_2 = $screen->{'image'};
                    $game->save();
                }
                if ($key == 2) {
                    $game->screen_3 = $screen->{'image'};
                    $game->save();
                }
                if ($key == 3) {
                    $game->screen_4 = $screen->{'image'};
                    $game->save();
                }
                if ($key == 4) {
                    $game->screen_5= $screen->{'image'};
                    $game->save();
                }
                if ($key == 5) {
                    $game->screen_6= $screen->{'image'};
                    $game->save();
                }
                if ($key == 6) {
                    $game->screen_7= $screen->{'image'};
                    $game->save();
                }
                if ($key == 7) {
                    $game->screen_8= $screen->{'image'};
                    $game->save();
                }
                if ($key == 8) {
                    $game->screen_9= $screen->{'image'};
                    $game->save();
                }
                if ($key == 9) {
                    $game->screen_10= $screen->{'image'};
                    $game->save();
                }
            }
        }
    }

    public function getTags($object, $gameId)
    {
        if ($object->{'tags'}) {
            $game = new GameTags;
            foreach ($object->{'tags'} as $key => $tag) {
                $game->game_id = $gameId;
                if ($key == 0) {
                    $game->tag_1_name = $tag->{'name'};
                    $game->tag_1_slug = $tag->{'slug'};
                    $game->save();
                }
                if ($key == 1) {
                    $game->tag_2_name = $tag->{'name'};
                    $game->tag_2_slug = $tag->{'slug'};
                    $game->save();
                }
                if ($key == 2) {
                    $game->tag_3_name = $tag->{'name'};
                    $game->tag_3_slug = $tag->{'slug'};
                    $game->save();
                }
                if ($key == 3) {
                    $game->tag_4_name = $tag->{'name'};
                    $game->tag_4_slug = $tag->{'slug'};
                    $game->save();
                }
                if ($key == 4) {
                    $game->tag_5_name = $tag->{'name'};
                    $game->tag_5_slug = $tag->{'slug'};
                    $game->save();
                }
                if ($key == 5) {
                    $game->tag_6_name = $tag->{'name'};
                    $game->tag_6_slug = $tag->{'slug'};
                    $game->save();
                }
                if ($key == 6) {
                    $game->tag_7_name = $tag->{'name'};
                    $game->tag_7_slug = $tag->{'slug'};
                    $game->save();
                }
                if ($key == 7) {
                    $game->tag_8_name = $tag->{'name'};
                    $game->tag_8_slug = $tag->{'slug'};
                    $game->save();
                }
                if ($key == 8) {
                    $game->tag_9_name = $tag->{'name'};
                    $game->tag_9_slug = $tag->{'slug'};
                    $game->save();
                }
                if ($key == 9) {
                    $game->tag_10_name = $tag->{'name'};
                    $game->tag_10_slug = $tag->{'slug'};
                    $game->save();
                }
                if ($key == 10) {
                    $game->tag_11_name = $tag->{'name'};
                    $game->tag_11_slug = $tag->{'slug'};
                    $game->save();
                }
                if ($key == 11) {
                    $game->tag_12_name = $tag->{'name'};
                    $game->tag_12_slug = $tag->{'slug'};
                    $game->save();
                }
                if ($key == 12) {
                    $game->tag_13_name = $tag->{'name'};
                    $game->tag_13_slug = $tag->{'slug'};
                    $game->save();
                }
                if ($key == 13) {
                    $game->tag_14_name = $tag->{'name'};
                    $game->tag_14_slug = $tag->{'slug'};
                    $game->save();
                }
                if ($key == 14) {
                    $game->tag_15_name = $tag->{'name'};
                    $game->tag_15_slug = $tag->{'slug'};
                    $game->save();
                }
                if ($key == 15) {
                    $game->tag_16_name = $tag->{'name'};
                    $game->tag_16_slug = $tag->{'slug'};
                    $game->save();
                }
                if ($key == 16) {
                    $game->tag_17_name = $tag->{'name'};
                    $game->tag_17_slug = $tag->{'slug'};
                    $game->save();
                }
                if ($key == 17) {
                    $game->tag_18_name = $tag->{'name'};
                    $game->tag_18_slug = $tag->{'slug'};
                    $game->save();
                }
                if ($key == 18) {
                    $game->tag_19_name = $tag->{'name'};
                    $game->tag_19_slug = $tag->{'slug'};
                    $game->save();
                }
                if ($key == 19) {
                    $game->tag_20_name = $tag->{'name'};
                    $game->tag_20_slug = $tag->{'slug'};
                    $game->save();
                }
            }
        }
    }

    public function getStores($object, $gameId)
    {
        $game = new GameStores;
        if ($object->{'stores'}) {
            $game->game_id = $gameId;
            foreach ($object->{'stores'} as $key => $store) {
                if ($key == 0) {
                    $game->store_1_name = $store->{'store'}->{'name'};
                    $game->store_1_slug = $store->{'store'}->{'name'};
                    $game->store_1_domain = $store->{'store'}->{'name'};
                    $game->save();
                }
                if ($key == 1) {
                    $game->store_2_name = $store->{'store'}->{'name'};
                    $game->store_2_slug = $store->{'store'}->{'name'};
                    $game->store_2_domain = $store->{'store'}->{'name'};
                    $game->save();
                }
                if ($key == 2) {
                    $game->store_3_name = $store->{'store'}->{'name'};
                    $game->store_3_slug = $store->{'store'}->{'name'};
                    $game->store_3_domain = $store->{'store'}->{'name'};
                    $game->save();
                }
                //var_dump($store->{'store'}->{'name'}); // Récupere le 'name' des stores
            }
        }
    }

    public function getPlatforms($object, $gameId)
    {
        $game = new GamePlatforms;
        if ($object->{'platforms'}) {
            foreach ($object->{'platforms'} as $key => $platform) {
                $game->game_id = $gameId;
                if ($key == 0) {
                    $game->platform_1_name = $platform->{'platform'}->{'name'};
                    $game->platform_1_slug = $platform->{'platform'}->{'slug'};
                    $game->platform_1_image = $platform->{'platform'}->{'image'};
                    $game->platform_1_year_start = $platform->{'platform'}->{'year_start'};
                    $game->platform_1_year_end = $platform->{'platform'}->{'year_end'};
                    $game->platform_1_games_count = $platform->{'platform'}->{'games_count'};
                    $game->platform_1_released_at = $platform->{'released_at'};
                    $game->save();
                }
                if ($key == 1) {
                    $game->platform_2_name = $platform->{'platform'}->{'name'};
                    $game->platform_2_slug = $platform->{'platform'}->{'slug'};
                    $game->platform_2_image = $platform->{'platform'}->{'image'};
                    $game->platform_2_year_start = $platform->{'platform'}->{'year_start'};
                    $game->platform_2_year_end = $platform->{'platform'}->{'year_end'};
                    $game->platform_2_games_count = $platform->{'platform'}->{'games_count'};
                    $game->platform_2_released_at = $platform->{'released_at'};
                    $game->save();
                }
                if ($key == 2) {
                    $game->platform_3_name = $platform->{'platform'}->{'name'};
                    $game->platform_3_slug = $platform->{'platform'}->{'slug'};
                    $game->platform_3_image = $platform->{'platform'}->{'image'};
                    $game->platform_3_year_start = $platform->{'platform'}->{'year_start'};
                    $game->platform_3_year_end = $platform->{'platform'}->{'year_end'};
                    $game->platform_3_games_count = $platform->{'platform'}->{'games_count'};
                    $game->platform_3_released_at = $platform->{'released_at'};
                    $game->save();
                }
                if ($key == 3) {
                    $game->platform_4_name = $platform->{'platform'}->{'name'};
                    $game->platform_4_slug = $platform->{'platform'}->{'slug'};
                    $game->platform_4_image = $platform->{'platform'}->{'image'};
                    $game->platform_4_year_start = $platform->{'platform'}->{'year_start'};
                    $game->platform_4_year_end = $platform->{'platform'}->{'year_end'};
                    $game->platform_4_games_count = $platform->{'platform'}->{'games_count'};
                    $game->platform_4_released_at = $platform->{'released_at'};
                    $game->save();
                }
                if ($key == 4) {
                    $game->platform_5_name = $platform->{'platform'}->{'name'};
                    $game->platform_5_slug = $platform->{'platform'}->{'slug'};
                    $game->platform_5_image = $platform->{'platform'}->{'image'};
                    $game->platform_5_year_start = $platform->{'platform'}->{'year_start'};
                    $game->platform_5_year_end = $platform->{'platform'}->{'year_end'};
                    $game->platform_5_games_count = $platform->{'platform'}->{'games_count'};
                    $game->platform_5_released_at = $platform->{'released_at'};
                    $game->save();
                }
                if ($key == 5) {
                    $game->platform_6_name = $platform->{'platform'}->{'name'};
                    $game->platform_6_slug = $platform->{'platform'}->{'slug'};
                    $game->platform_6_image = $platform->{'platform'}->{'image'};
                    $game->platform_6_year_start = $platform->{'platform'}->{'year_start'};
                    $game->platform_6_year_end = $platform->{'platform'}->{'year_end'};
                    $game->platform_6_games_count = $platform->{'platform'}->{'games_count'};
                    $game->platform_6_released_at = $platform->{'released_at'};
                    $game->save();
                }
                //var_dump($platform->{'platform'}->{'name'}); // Récupere le 'name' de la plateforme
            }
        }
    }

    public function getGenres($object, $gameId)
    {
        $game = new GameGenres;
        if ($object->{'genres'}) {
            foreach ($object->{'genres'} as $key => $genre) {
                $game->game_id = $gameId;
                if ($key == 0) {
                    $game->genre_1_name = $genre->{'name'};
                    $game->genre_1_slug = $genre->{'slug'};
                    $game->save();
                }
                if ($key == 1) {
                    $game->genre_2_name = $genre->{'name'};
                    $game->genre_2_slug = $genre->{'slug'};
                    $game->save();
                }
                if ($key == 2) {
                    $game->genre_3_name = $genre->{'name'};
                    $game->genre_3_slug = $genre->{'slug'};
                    $game->save();
                }
            }
        }
    }

    public function getRatings($object, $gameId)
    {
        $game = new GameRatings;
        if ($object->{'ratings'}) {
            foreach ($object->{'ratings'} as $key => $rating) {
                $game->game_id = $gameId;
                if ($key == 0) {
                    $game->exc_title = $rating->{'title'};
                    $game->exc_count = $rating->{'count'};
                    $game->exc_percent = $rating->{'percent'};
                    $game->save();
                }
                if ($key == 1) {
                    $game->rec_title = $rating->{'title'};
                    $game->rec_count = $rating->{'count'};
                    $game->rec_percent = $rating->{'percent'};
                    $game->save();
                }
                if ($key == 2) {
                    $game->meh_title = $rating->{'title'};
                    $game->meh_count = $rating->{'count'};
                    $game->meh_percent = $rating->{'percent'};
                    $game->save();
                }
                if ($key == 3) {
                    $game->ski_title = $rating->{'title'};
                    $game->ski_count = $rating->{'count'};
                    $game->ski_percent = $rating->{'percent'};
                    $game->save();
                }
                //var_dump($rating->{'title'}); // Récupere le 'title' du rating
            }
        }
    }

    public function fetch()
    {
        // ini_set('max_execution_time', 3600);
        for ($i = 1; $i < 2; $i++){
            $response = Http::get('https://api.rawg.io/api/games/search/', [
                'key' => 'b7a58e4633904057ad6d089436a2fe3f',
                'page' => $i,
            ]);
            if ($response->successful() == true){
                $allgames = json_decode($response->body());
                foreach ($allgames->results as $index => $allgame) {
                    if($this->isAlreadyExist($allgame->id) == false) {
                        $this->getRatings($allgame, $allgame->id);
                        $this->getPlatforms($allgame, $allgame->id);
                        $this->getGenres($allgame, $allgame->id);
                        $this->getTags($allgame, $allgame->id);
                        $this->saveGame($allgame, $i);
                        $this->getScreens($allgame, $allgame->id);
                        $this->getStores($allgame, $allgame->id);
                    }
                }
            }
            else {
                return;
            }
        }
    }
}