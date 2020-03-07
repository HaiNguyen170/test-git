@extends('layout.master')
@section('title')
    <title>HNTT Blog </title>
    @endsection
@section('body.content')

<div class="container">
    @foreach($article as $a)
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h3>{{$a->title}}</h3>
                <p>{{$a->content}}</p>
                <p> <a href="{{  route('article.show', $a->id)}}"> Read more</a></p>
            </div>
        </div>
    @endforeach
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
                {!! $article->render() !!}
        </div>
    </div>
</div>

@endsection
