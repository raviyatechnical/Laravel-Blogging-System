<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Modules\Blog\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return response()->json(['data' => $post], 201);
    }
    public function PostOrderByCreatedDateDESC()
    {
        $post = Post::OrderBy('created_at','DESC')->all();
        return response()->json(['data' => $post], 201);
    }
    public function store(Request $request)
    {
       $post = Post::create($request->all());
       return response()->json($post, 201);
 
    }
    public function show($id)
    {
        $post = Post::find($id);
        return response()->json(['data' => $post], 201);
    }
    public function update(Request $request, $id)
    {
        $post->update($request->all());
        return response()->json($post, 200);
    }
    public function destroy($id)
    {
        $post->delete();
        return response()->json(null, 204);
    }
}
