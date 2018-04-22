<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;
use App\Models\Post;
use App\Models\Contact;
use App\Models\ContactRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Change home page content
     * 
     * @return \Illuminate\Http\Response
     */
    public function homeContent()
    {
        $home = Home::first();
        return view('home-content', compact('home'));
    }

    /**
     * Change home page content
     * 
     * @return \Illuminate\Http\Response
     */
    public function homeContentUpdate(Request $request)
    {
       $request->validate([
           'title' => 'required',
           'subTitle' => 'required'
       ]);
       $name = Home::first()->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = public_path('img');
            $name = 'homeImage.jpg';
            $path = $request->image->storeAs(public_path('img'), $name);
        }
       Home::first()->update([
           'title' => $request->title,
           'sub_title' => $request->subTitle,
           'image' => $name
           ]);
       return redirect()->back()->with('flash_success', 'Home page content edited successfully.');    
    }

    /**
     * Change home page content
     * 
     * @return \Illuminate\Http\Response
     */
    public function aboutContent()
    {
        $about = About::first();
        return view('about-content', compact('about'));
    }

    /**
     * Change about page content
     * 
     * @return \Illuminate\Http\Response
     */
    public function aboutContentUpdate(Request $request)
    {
       $request->validate([
           'title' => 'required',
           'subTitle' => 'required',
           'content' => 'required'
       ]);

       About::first()->update([
           'title' => $request->title,
           'sub_title' => $request->subTitle,
           'image' => $request->image,
           'content' => $request->content
           ]);
       return redirect()->back()->with('flash_success', 'About page content edited successfully.');    
    }

    /**
     * Change contact page content
     * 
     * @return \Illuminate\Http\Response
     */
    public function contactContent()
    {
        $contact = Contact::first();
        return view('contact-content', compact('contact'));
    }

    /**
     * Change contact page content
     * 
     * @return \Illuminate\Http\Response
     */
    public function contactContentUpdate(Request $request)
    {
       $request->validate([
           'title' => 'required',
           'subTitle' => 'required',
           'content' => 'required'
       ]);

      $contact = Contact::first()->update([
           'title' => $request->title,
           'sub_title' => $request->subTitle,
           'image' => $request->image,
           'content' => $request->content
           ]);
       return redirect()->back()->with('flash_success', 'Contact page content edited successfully.');    
    }

    /**
     * Get the post list
     * 
     * @return \Illuminate\Http\Response 
     */
    public function postList()
    {
        $post = Post::all();
        return view('post-list', compact('post'));
    }

    /**
     * Get the post
     * 
     * @param integer $postId
     * 
     * @return \Illuminate\Http\Response
     */
    public function post($postId)
    {
        $post = Post::find($postId);
        return view('post-content', compact('post'));
    }

    /**
     * Update Post
     * 
     * @param integer $postId
     * 
     * @return \Illuminate\Http\Response
     */
    public function postUpdate(Request $request, $postId)
    {
        $request->validate([
            'title' => 'required',
            'subTitle' => 'required',
            'content' => 'required',
            'createdBy' => 'required'
        ]);
        Post::where('id', $postId)->update([
            'title' => $request->title,
            'sub_title' => $request->subTitle,
            'image' => $request->image,
            'content' => $request->content,
            'created_by' => $request->createdBy
        ]);
        return redirect()->back()->with('flash_success', 'Your post '.$request->title.' has been updated successfully.');
    }

    /**
     * Show new post create form
     * 
     * @return \Illuminate\Http\Response
     */
    public function addPost()
    {
        return view('add-post');
    }
    /**
     * Create a new Post
     * 
     * @param integer $postId
     * 
     * @return \Illuminate\Http\Response
     */
    public function storePost(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subTitle' => 'required',
            'content' => 'required',
            'createdBy' => 'required'
        ]);
        Post::create([
            'title' => $request->title,
            'sub_title' => $request->subTitle,
            'image' => $request->image,
            'content' => $request->content,
            'created_by' => $request->createdBy
        ]);
        return redirect()->route('post.list')->with('flash_success', 'Your post '.$request->title.' has been updated successfully.');
    }
    
    /**
     * Store contact me
     * 
     * @return \Illuminate\Http\Response
     */
    public function storeContactMe(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);

        ContactRequest::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message
        ]);
        return redirect()->back()->with('flash_success', 'Your request is submitted successfully.');
    }

    /**
     * Contact me list
     * 
     * @return \Illuminate\Http\Response
     */
    public function contactList()
    {
        $contact = ContactRequest::get();
        return view('contact-list', compact('contact'));
    }
}
