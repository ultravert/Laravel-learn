<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StorePostRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

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
//        $title = $request->input('title');
//        $content = $request->input('content');

//        $validated = $request->validate([
//            'title' => ['required', 'string', 'max:100'],
//            'content' => ['required', 'string', 'max:1000'],
//        ]);


//        $validator = validator($request->all(), [
//            'title' => ['required', 'string', 'max:100'],
//            'content' => ['required', 'string', 'max:1000'],
//
//        ])->validate();

//        $validated = $request->validated();

        $validated = validate($request->all(), [
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:1000'],

        ]);

//        if (true) {
//            throw ValidationException::withMessages([
//                'account' => __('Недостаточно средств!'),
//            ]);
//        }


        dd($validated);

        alert(__('Сохранено!'));

        return redirect()->route('user.posts.show', 123);
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
    public function update(Request $request, $post)
    {
//        $title = $request->input('title');
//        $content = $request->input('content');
//        dd($title, $content);

        $validated = validate($request->all(), [
            'title' => ['required', 'string', 'max:100'],
            'content' => ['required', 'string', 'max:1000'],

        ]);

        dd($validated);

        alert(__('Сохранено!'));

//        return redirect()->back();

        return redirect()->route('user.posts.show', $post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($post)
    {
        return redirect()->route('user.posts');
    }

    public function like ()
    {
        return 'Лайк + 1';
    }
}
