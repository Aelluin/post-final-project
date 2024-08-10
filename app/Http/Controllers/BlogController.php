<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function createBlog(Request $request) {
        $incomingFields = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['content'] = strip_tags($incomingFields['content']);
        $incomingFields['user_id'] = auth()->id();

        Blog::create($incomingFields);
        return view('blogpage')->with('success', 'Blog created successfully!');
    }

    public function editBlog(Blog $blog) {
        if (auth()->User()->id !== $blog->user_id) {
            return redirect('/')->with('error', 'Unauthorized');
        }

        return view('blog.edit', ['blog' => $blog]);
    }

    public function updateBlog(Blog $blog, Request $request) {
        if (auth()->user()->id !== $blog->user_id) {
            return redirect('/')->with('error', 'Unauthorized');
        }

        $incomingFields = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['content'] = strip_tags($incomingFields['content']);

        $blog->update([
            'title' => $incomingFields['title'],
            'content' => $incomingFields['content'],
        ]);

        return redirect('/');
    }

    public function deleteBlog(Blog $blog) {
        if (auth()->user()->id === $blog->user_id) {
            $blog->delete();
        }
        return redirect('/');
    }

    public function showAllBlogs() {
        $blogs = Blog::paginate(25);
        return view('welcome', ['blogs' => $blogs]);
    }

    public function dashboard() {
        return view('home');
    }
}

