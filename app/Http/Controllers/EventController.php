<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    //

    public function getIndex() {
        $events = Event::withTranslations()->orderBy('start_date', 'DESC')->paginate(10);
        return view('frontend.events.index', compact('events'));
    }

    public function getEventDetail($id) {
        $event = Event::withTranslations()->findOrFail($id);
        return view('frontend.events.event_detail', compact('event'));
    }
}
