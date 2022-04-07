<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use App\User;

class PracticeController extends Controller
{
    // private $tablers;
    CONST SUPER = ['key' => 'Game1'];

    public function __construct()
    {
        // $tablers = self::SUPER['key'];
        $this->locator = self::SUPER['key'];
    }

    public static function toCollect()
    {

    $users = User::all();
    $collection = collect($users);
    \Log::info('Collections '. $collection);
     
    $coValues = $collection->pluck('firstname')->toArray();
    // \Log::info($coValues[2]);
    $jsonResponse = response()->json($coValues);
    $jsonEncode = json_encode($jsonResponse);
    \Log::info($jsonEncode);

    // $collection = collect(['taylor', 'abigail', null])->map(function ($name) {n
    // \Log::info(strtoupper($name));
    // });

    // $array = array('foo' => 'bar');

    // $array = Arr::add($array, 'git', 'linus');
    // // \Log::info($array);
    
    // if (array_key_exists('git', $array)){
    //     $arrValue = $array['git'];
    //     \Log::info('Atom '. $arrValue);
    // }

    }
    
    public function cacheData()
    {
        // $userData = \Cache::putMany(
        //     ['product_id' => '1',
        //     'product_name' => 'gameset',
        //     'url' => 'www.game.com'
        //     ], 10080);

        $serData = \Cache::putMany(
            ['manta' => [
                'product_id' => '1',
                'product_name' => 'gameset',
                'url' => 'www.gme.com'
            ], ['email', 'hey', 30
        ]]);
    }

    public function getCacheData()
    {
        $all = \Cache::get('emailSettings');
        return $all;
    }
}
