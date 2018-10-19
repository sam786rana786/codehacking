@extends('layouts.blog-home')

@section('content')
<!-- Blog Entries Column -->
<div class="col-md-8">

    <h1 class="page-header">
        Page Heading
        <small>Secondary Text</small>
    </h1>
    @if($posts)
        @foreach($posts as $post)
            <!-- First Blog Post -->
            <h2>
                {{$post->title}}
            </h2>
            <p class="lead">
                by {{$post->user->name}}
            </p>
            <p><span class="glyphicon glyphicon-time"></span> {{$post->created_at->diffForHumans()}}</p>
            <hr>
            <img class="img-responsive" src="{{$post->photo->file}}" alt="">
            <hr>
            <p>{!! str_limit($post->body, 100) !!}</p>
            <a class="btn btn-primary" href="{{route('home.post', $post->slug)}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
        @endforeach
    @endif
    <hr>    
    <!-- Paginate -->
    <ul class="pager">
        <li>{{$posts->render()}}</li>
    </ul>

</div>
@endsection
