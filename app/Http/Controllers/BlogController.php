<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;
use App\Models\Post;
use App\Models\Contact;

class BlogController extends Controller
{
    /**
     * Blog home
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = Home::first();
        return view('welcome', compact('home'));
    }

    /**
     * Blog about us
     * 
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $about = About::first();
        return view('about', compact('about'));
    }

    /**
     * Blog contact us
     * 
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        $contact = Contact::first();
        return view('contact', compact('contact'));
    }
}
