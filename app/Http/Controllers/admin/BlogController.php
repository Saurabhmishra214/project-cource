<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Validator;


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
    // Manual validation using Validator
    $validator = Validator::make($request->all(), [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'category' => 'nullable|string|max:100',
        'description' => 'nullable|string',
        'image' => 'nullable|string|max:255',
        'author' => 'nullable|string|max:100',
        'published_at' => 'nullable|date',
    ]);

    // Check if validation fails
    if ($validator->fails()) {
        return redirect()->back()
                         ->withErrors($validator)
                         ->withInput();
    }

    // Save Blog
    Blog::create([
        'title' => $request->title,
        'slug' => \Str::slug($request->title), // auto-generate slug
        'content' => $request->content,
        'category' => $request->category ?? 'General',
        'description' => $request->description ?? '',
        'image' => $request->image ?? null,
        'author' => $request->author ?? 'Admin',
        'published_at' => $request->published_at ?? now(),
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
    // Validator facade use करके validation
    $validator = Validator::make($request->all(), [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    // अगर validation fail हो तो वापस redirect करें
    if ($validator->fails()) {
        return redirect()->back()
                         ->withErrors($validator)
                         ->withInput();
    }

    // Blog update
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
