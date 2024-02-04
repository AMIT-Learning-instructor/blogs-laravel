<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Author;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $context = [
        //     'posts' => Post::all()
        // ];
        $posts = Post::all();

        $context = [
            'posts' => $posts
        ];
        // dd($context);
        return view('post.list',$context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $context = [
            'authors' => Author::all()
        ];
        return view('post.form',$context);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $post = Post::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'author_id'=>$request->author,
        ]);
        // return redirect(route('posts.index'),201);
        return redirect('posts'); // URL 
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
