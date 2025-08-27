@extends('admin_dashboard.master_layout')
@section('content')

<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid"> 
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                        <h4 class="page-title">Blog Posts</h4>
                        <div class="">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Mifty</a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active">Edit Blog Post</li>
                            </ol>
                        </div>                      
                    </div>
                </div>
            </div>                  

            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">                       
                                    <h4 class="card-title">Edit Blog Post</h4>                   
                                </div>
                            </div>                                       
                        </div>

                        <div class="card-body pt-0">
                            {{-- The form is now set up to update a blog post --}}
                        <form class="row g-3 needs-validation was-validated" 
      method="POST" 
      action="{{ route('blogs.update', $blog->id) }}" 
      novalidate
      enctype="multipart/form-data">
    @csrf
    @method('POST') {{-- अगर आप POST route use कर रहे हैं update के लिए --}}

    {{-- Blog Title --}}
    <div class="col-md-12">
        <label for="title" class="form-label">Blog Title</label>
        <input type="text" 
               class="form-control @error('title') is-invalid @enderror" 
               id="title" 
               name="title" 
               value="{{ old('title', $blog->title) }}" 
               required>
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Slug --}}
    <div class="col-md-12">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" 
               class="form-control @error('slug') is-invalid @enderror" 
               id="slug" 
               name="slug" 
               value="{{ old('slug', $blog->slug) }}">
        @error('slug')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Blog Content --}}
    <div class="col-md-12">
        <label for="content" class="form-label">Blog Content</label>
        <textarea class="form-control @error('content') is-invalid @enderror" 
                  id="content" 
                  name="content" 
                  rows="10"
                  required>{{ old('content', $blog->content) }}</textarea>
        @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Description --}}
    <div class="col-md-12">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" 
                  id="description" 
                  name="description" 
                  rows="3">{{ old('description', $blog->description) }}</textarea>
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Category --}}
    <div class="col-md-6">
        <label for="category" class="form-label">Category</label>
        <select class="form-select @error('category') is-invalid @enderror" 
                id="category" 
                name="category" 
                required>
            <option disabled value="">Choose...</option>
            <option value="technology" {{ old('category', $blog->category) == 'technology' ? 'selected' : '' }}>Technology</option>
            <option value="lifestyle" {{ old('category', $blog->category) == 'lifestyle' ? 'selected' : '' }}>Lifestyle</option>
            <option value="travel" {{ old('category', $blog->category) == 'travel' ? 'selected' : '' }}>Travel</option>
            <option value="food" {{ old('category', $blog->category) == 'food' ? 'selected' : '' }}>Food</option>
        </select>
        @error('category')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Author --}}
    <div class="col-md-6">
        <label for="author" class="form-label">Author</label>
        <input type="text" 
               class="form-control @error('author') is-invalid @enderror" 
               id="author" 
               name="author" 
               value="{{ old('author', $blog->author) }}">
        @error('author')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Published Date --}}
    <div class="col-md-6">
        <label for="published_at" class="form-label">Published Date</label>
  <input type="date" 
       class="form-control @error('published_at') is-invalid @enderror" 
       id="published_at" 
       name="published_at" 
       value="{{ old('published_at', $blog->published_at ? \Carbon\Carbon::parse($blog->published_at)->format('Y-m-d') : '') }}">

        @error('published_at')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Image --}}
    <div class="col-md-6">
        <label for="image" class="form-label">Blog Image</label>
        <input type="file" 
               class="form-control @error('image') is-invalid @enderror" 
               id="image" 
               name="image">
        @if($blog->image)
            <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" class="img-thumbnail mt-2" style="max-width: 150px;">
        @endif
        @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-12">
        <button class="btn btn-primary" type="submit">Update Blog</button>
    </div>
</form>

                        </div> 
                    </div>
                </div> 
            </div>
        </div>

        <footer class="footer text-center text-sm-start d-print-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-0 rounded-bottom-0">
                            <div class="card-body">
                                <p class="text-muted mb-0">
                                    © <script> document.write(new Date().getFullYear()) </script>2025
                                    Mifty
                                    <span class="text-muted d-none d-sm-inline-block float-end">
                                        Design with
                                        <i class="iconoir-heart-solid text-danger align-middle"></i>
                                        by Mannatthemes
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
</div>
@endsection
