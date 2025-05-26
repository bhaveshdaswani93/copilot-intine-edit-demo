<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request)
    {
        // Logic to create a post
        return response()->json(['message' => 'Post created successfully']);
    }
}
