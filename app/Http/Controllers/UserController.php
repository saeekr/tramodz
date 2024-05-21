<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('home');
    }

    /**
     * Display the gallery page.
     */
    public function gallery()
    {
        return view('gallery');
    }

    /**
     * Display the member page.
     */
    public function member()
    {
        return view('member');
    }

    /**
     * Display the join page.
     */
    public function join()
    {
        return view('join');
    }

    /**
     * Display the booking page.
     */
    public function booking()
    {
        return view('booking');
    }
    public function profil()
    {
        return view('profil');
    }
    

}
