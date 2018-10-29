@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
<div>
  {{$posts->body}}
</div>
<hr>
<small>written on {{$posts->created_at}}</small>
@endsection
