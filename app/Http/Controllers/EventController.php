<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Setting;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {

        $events = Event::where('status', '=', 1)->get();

        $settings = Setting::where('page', '=', 'news')->first();

        if (str_ends_with($settings->file, 'png') || str_ends_with($settings->file, 'jpg')) {
            $img = true;
        } else {
            $img = false;
        }

        return view('news', [
            'events' => $events,
            'settings' => $settings,
            'img' => $img
        ]);
    }

    public function single($slug) {

        $event = Event::where('slug', '=', $slug)->first();;
        $events = Event::where('slug', '!=', $slug)->where('status', '=', 1)->orderBy('order')->take(2)->get();


        return view('news-single', [
            'event' => $event,
            'events' => $events
        ]);
    }
}
