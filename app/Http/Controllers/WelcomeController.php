<?php

namespace App\Http\Controllers;

use App\Services\FeatureFlag\Feature;
use App\User;

class WelcomeController extends Controller
{
    public function index()
    {
        $user = User::find(1);

        if (app(Feature::class)->isActive(Feature::MEETUP_PLACE, $user)) {
            $meetup = $this->getMeetupPlace();
        }

        return view('welcome')->with(compact('meetup', 'user'));
    }

    private function getMeetupPlace(): string
    {
        return 'Vilnius, Oberlo office';
    }
}
