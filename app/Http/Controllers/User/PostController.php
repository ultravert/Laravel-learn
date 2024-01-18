<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod temp',
        ];

        $posts = array_fill(0, 10, $post);

        return view('user.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'Запрос на создание поста';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod temp',
        ];

        return view('user.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $post)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipiscing elit, sed do eiusmod temp',
        ];

        return view('user.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'Обновление поста';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'Удаление поста';
    }

    public function like ()
    {
        return 'Лайк + 1';
    }
}
