<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SitesController extends Controller
{
    //
    public function index ()
    {
        return \view('welcome');
    }

    public function about ()
    {
        return \view('sites.about');
    }

    public function contact()
    {
        return \view('sites.contact');
    }
}
