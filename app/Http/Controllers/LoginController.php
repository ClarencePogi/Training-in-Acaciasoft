<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class LoginController
{
    public function show($post)
    {
        $posts = [
            'add' => 'Successfully added.....',
            'get' => 'Please wait for response.....'
        ];

        if (!array_key_exists($post, $posts)) {
            abort(404, 'Sorry page not found.');
        } else {
            return view('login', ['posts' => $posts[$post]]);
            
        }
    }

    public function login(Request $request) {
        dd($request->username);

    }
}