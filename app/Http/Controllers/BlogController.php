<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    // List all blogs
    public function index()
    {
        $blogs = Blog::latest()->get(); // sab blogs latest order me le lo
        return view('admin_dashboard.blog.list', compact('blogs'));
    }

    // Show add blog form
    public function create()
    {
        return view('admin_dashboard.blog.add');
    }

    // Store new blog
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog added successfully!');
    }

    // Show single blog details (optional)
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin_dashboard.blog.show', compact('blog'));
    }

    // Show edit blog form
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin_dashboard.blog.edit', compact('blog'));
    }

    // Update blog
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully!');
    }

    // Delete blog
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully!');
    }
}
