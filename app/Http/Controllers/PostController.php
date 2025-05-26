<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:200',
            'description' => 'required',
        ]);
        // Logic to create a post
        return response()->json(['message' => 'Post created successfully']);
    }
}
