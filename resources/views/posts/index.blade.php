@extends('layouts.app')

@section('content')
<h1 style="text-align:center;">Posts</h1>
@if(count($posts) > 0)
    @foreach($posts as $post)
  <center>  <div class="well" style="width:700px;">
      <h1 ><a href = "/post/{{$post->id}}" style="color:black;">{{$post->title}}</a></h1>
      <small>Created {{$post->created_at}}</small>
    </div>
    @endforeach
    {{$posts->links()}}
@else
     <p>No posts found</p>

@endif
@endsection
