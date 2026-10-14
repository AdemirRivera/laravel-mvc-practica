<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function show($post)
    {
        // return view('posts.show', [
        //     'post' => $post
        // ]);
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function edit($post)
    {
        return view('posts.edit', compact('post'));
    }

    public function store()
    {
        return 'Post creado';
    }

    public function update($post)
    {
        return 'Post actualizado' . $post;
    }

    public function destroy($post)
    {
        return 'Post eliminado' . $post;
    }
}
