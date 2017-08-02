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
        return view('dashboard', ['people' => Person::orderBy('rsvp', 'asc')->orderBy('first_guest', 'asc')->get()]);
    }
}
