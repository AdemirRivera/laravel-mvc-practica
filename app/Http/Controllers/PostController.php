<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function index()
    {
        return 'Listado de post';
    }

    public function show($post)
    {
        return 'Pagina del post' . $post;
    }

    public function create()
    {
        return 'Crear nuevo post';
    }

    public function store()
    {
        return 'Post creado';
    }

    public function edit($post)
    {
        return 'Editar post' . $post;
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