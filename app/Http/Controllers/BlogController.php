<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BlogController extends Controller
{
    public function createBlog(Request $request)
    {
        // Validate the incoming request data
        $incomingFields = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Sanitize the input
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['content'] = strip_tags($incomingFields['content']);
        $incomingFields['user_id'] = Auth::id(); // Get the ID of the currently logged-in user

        // Create the blog post
        $blog = Blog::create($incomingFields);

        // Redirect to the newly created blog post's page
        return redirect()->route('blogpage', $blog->id);
    }

    public function show($id)
    {
        // Retrieve the blog post by ID and load the associated user
        $blogs = Blog::with('user')->latest()->take(9)->get();

        // Pass the blog post to the view
        return view('blogpage', ['blogs' => $blogs]);



    }
    public function dashboard()
    {
        $blogs = Blog::with('user')->latest()->take(9)->get();

        // Pass the blogs to the view
        return view('home', ['blogs' => $blogs]);
    }

    public function index()
    {

    }

}
