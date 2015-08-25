<?php

namespace App\Http\Controllers;

use Input;
use Illuminate\Http\Request;
use App\Travel;
use App\Activity;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TravelsController extends Controller
{
    public function create()
    {
        return view('create-travel');
    }

    public function store()
    {
        $travel = new Travel;
        $travel->description = Input::get('destination');
        $travel->origin_lat_lng = Input::get('origin-lat-lng');
        $travel->destination_lat_lng = Input::get('destination-lat-lng');
        $travel->map_zoom = Input::get('map-zoom');
        $travel->map_lat_lng = Input::get('map-lat-lng');

        $activities = json_decode(Input::get('activities'));
        $travel->save();

        foreach ($activities as $activity) {
            $a = new Activity;
            $a->lat_lng = $activity->position;
            $travel->activities()->save($a);
            $a->save();
        }

        return view('amazing')->with('zomg', Input::get('destination-lat-lng'));
    }
}
