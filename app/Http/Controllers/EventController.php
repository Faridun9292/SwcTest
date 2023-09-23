<?php

namespace App\Http\Controllers;

use App\Http\Services\EventService;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index(Request $request)
    {
        $events = (new EventService())->getEvents($request->query('id'));

        $authUserEvents = $events['authUserEvents'];

        $allEvents = $events['allEvents'];

        $event = $events['event'];

        return view('events.events', compact('allEvents', 'authUserEvents', 'event'));
    }

    public function joinEvent(Event $event)
    {
        $event->users()->attach(auth()->id());

        return back()->with('status', 'Вы успешно присоединились к Event');
    }

    public function leaveEvent(Event $event)
    {
        $event->users()->detach(auth()->id());

        return back()->with('status', 'Вы успешно покинули Event');
    }
}
