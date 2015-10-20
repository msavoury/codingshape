<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class WorkoutController extends Controller
{
    public function index() {
        $tags = array_get($_GET, 'tag', []);
        $accessToken = getenv('CONTENTFUL_ACCESS_TOKEN');
        //get cards
        $jsonDataUrl = "https://cdn.contentful.com/spaces/x9l1w0gxdbuo/entries?access_token=$accessToken&content_type=49FgA0eZcQUCogAo6a8oEg";
        $json = file_get_contents($jsonDataUrl);
        $jsonObj = json_decode($json);

        $result = array();
        foreach($jsonObj->items as $item) {
            foreach($item->fields->tags as $tag){
                $cardTags[] = $tag->sys->id;
                if (!empty($tags) && in_array($tag->sys->id, $tags)) {
                    $result[] = $item->fields;
                    continue;
                }
                else if (empty($tags)) {
                    $result[] = $item->fields;
                }
            }
        }
        shuffle($result);
        $jsonData = json_encode($result);
        return view('partials.workout')->with('cards', $jsonData);
    }

    public function home() {
        $accessToken = getenv('CONTENTFUL_ACCESS_TOKEN');
        //get tags
        $jsonDataUrl = "https://cdn.contentful.com/spaces/x9l1w0gxdbuo/entries?access_token=$accessToken&content_type=6OXBfKosEw4yuWKegeQQ2M";
        $json = file_get_contents($jsonDataUrl);
        $jsonObj = json_decode($json);
        $tags = array();
        foreach($jsonObj->items as $item) {
            $tags[$item->fields->name] = $item->sys->id;
        }

        return view('partials.index')->with('tags', $tags);
    }
}
