@foreach ($posts as $post)
<h1><a href="{{ route('post.show',$post->id) }}">{{$post->title}}</a></h1>
<div>{{$post->category_id}}</div>
<a href="{{$post->slug}}">{{$post->slug}}</a>
<h5>Summary:-{{$post->summary}}</h5>
<h5>Description:-{{$post->description}}</h5>
<p>{{$post->content}}</p>
<div class="badge">{{$post->status}}</div>
<div class="badge">{{$post->comments}}</div>
<div class="badge">{{$post->featured}}</div>
@endforeach