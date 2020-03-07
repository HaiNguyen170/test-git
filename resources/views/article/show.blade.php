@extends('layout.master')
@section('title')
<title> Articles</title>
@endsection
@section('body.content')
<div class="container">
        <div class="row">
            <div class="col-sm 6 col-sm-offset-3">
                <a href="{{url('/index')}}" class="btn-btn-link">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    Back
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h3>{{$article->title}}</h3>
                <p>{{$article->content}}</p>

                {!! Form::open([
                    'route'=>['article.edit', $article->id],
                    'method'=>'GET',
                    'style'=>'display: inline',
                ]) !!}
                {!! Form::submit('Edit article', ['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}

                {!! Form::open([
                    'route'=>['article.destroy', $article->id],
                    'method'=>'DELETE',
                    'style'=>'display: inline',
                ]) !!}
                {!! Form::submit('Delete article', ['class'=>'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>


</div>

@endsection
