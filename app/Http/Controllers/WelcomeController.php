<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $meetup = $this->getMeetupPlaceWrongMethod();

        return view('welcome')->with(compact('meetup'));
    }

    private function getMeetupPlace(): string
    {
        return 'Vilnius, Oberlo office';
    }
}
