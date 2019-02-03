<?php

namespace App\Http\Controllers;

use App\Tag;

class TagController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get a list of all image tags
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $tags = Tag::all(['id', 'name']);

        return response()->json($tags);
    }
}
