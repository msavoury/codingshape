<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class WorkoutController extends Controller
{
    public function index() {
        $accessToken = getenv('CONTENTFUL_ACCESS_TOKEN');
        $jsonDataUrl = "https://cdn.contentful.com/spaces/x9l1w0gxdbuo/entries?access_token=$accessToken&content_type=49FgA0eZcQUCogAo6a8oEg";
        $json = file_get_contents($jsonDataUrl);
        $jsonObj = json_decode($json);

        $result = array();
        foreach($jsonObj->items as $item) {
            //don't need the tags for now, so we can save on payload
            unset($item->fields->tags);
            $result[] = $item->fields;
        }
        shuffle($result);
        $jsonData = json_encode($result);
        return view('partials.workout')->with('cards', $jsonData);
    }
}
