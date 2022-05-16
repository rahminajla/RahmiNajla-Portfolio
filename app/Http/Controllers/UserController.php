<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function About()
    {
        return view('about', [
            "title" => "About"
        ]);
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function Contact()
    {
        return view('contact', [
            "title" => "Contact"
        ]);
    }

     /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function Home()
    {
        return view('home', [
            "title" => "Home"
        ]);
    }
}
