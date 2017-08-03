<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Person extends Model
{
    use Searchable;

    protected $casts = [
        'extra_people' => 'json',
        'rsvp' => 'boolean',
        'allow_guest' => 'boolean',
    ];

    protected $fillable = [
        'first_guest', 'second_guest', 'email', 'rsvp', 'special', 'extra_people'
    ];
}
