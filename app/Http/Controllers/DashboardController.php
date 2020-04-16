<?php

namespace App\Http\Controllers;

use App\Person;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function __invoke()
    {
        $attendingPeople = Person::where(['rsvp' => 1])->get();
        $total = 0;

        foreach ($attendingPeople as $attendee) {
            if(!empty($attendee->first_guest)) {
                $total++;
            }
            if(!empty($attendee->second_guest)) {
                $total++;
            }
            if(!is_null($attendee->extra_people)) {
                foreach($attendee->extra_people as $extra) {
                    if($extra['name']) {
                        $total++;
                    }
                }
            }
        }

        return view('dashboard', [
                'people' => Person::orderBy('rsvp', 'asc')->orderBy('first_guest', 'asc')->get(),
                'total' => $total,
            ]);
    }
}
