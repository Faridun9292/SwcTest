<?php

namespace App\Http\Services;

use App\Models\Event;

class EventService
{
    public function getEvents($id = null): array
    {
        $authUserEvents = Event::query()
            ->where(function ($query) {
                $query->where('user_id', auth()->id())
                    ->orWhereRelation('users', 'user_id', auth()->id());
            })
            ->with('user', 'users')
            ->latest()
            ->get();

        $allEvents = Event::query()
            ->whereNot(function ($query) {
                $query->where('user_id', auth()->id())
                    ->orWhereRelation('users', 'user_id', auth()->id());
            })
            ->with('user', 'users')
            ->latest()
            ->get();

        $event = $allEvents[0];

        if ($id !== null) {
            $event = Event::find($id);
            abort_if($event === null, 404);
        }

        return [
            'authUserEvents' => $authUserEvents,
            'allEvents' => $allEvents,
            'event' => $event
        ];
    }
}
