<?php 

namespace App\Http\Controllers;

use App\Modules\Blog\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
      $posts=Post::get();
      return view('blog.post.index',compact('posts'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('blog_posts');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    //dd($request->all());
    $post = new Post;
    $post->category_id = $request->category_id;
    $post->title = $request->title;
    $post->slug = $request->slug;
    $post->description = $request->description;
    $post->summary = $request->summary;
    $post->content = $request->content;
    $post->status = $request->status;
    $post->comments = $request->comments;
    $post->featured = $request->featured;
    $post->save();
    return redirect('post');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $post=Post::find($id);
    return view('blog.post.show',compact('post'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>