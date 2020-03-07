@extends('layout.master')
@section('title')
    <title>Update Article</title>
@endsection
@section('body.content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h1>Update article</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
@include('layout.error')
                {!! Form::model($article,[
                    'route' =>['article.update', $article->id ],
                    'method' => 'PUT',
                    'class' => 'form-horizontal',
                ]) !!}
                <div class="form-group">
                    <p><i><b><u>Old Title Article: </u></b> </i>{{$article->title}}</p>
                    {!! Form::label('title', 'Title', ['class'=>'control-label']) !!}
                    {!! Form::text('title', '',['id'=>'title', 'class'=>'form-control', 'placeholder'=>'Write your title', 'required'=>'true'] ) !!}
                </div>
                <div class="form-group">
                    <p><i><b><u>Old Content Article: </u></b> </i>{{$article->content}}</p>
                    {!! Form::label('content', 'Content', ['class'=>'control-label']) !!}
                    {!! Form::text('content', '',['id'=>'title', 'class'=>'form-control', 'placeholder'=>'Write your title', 'required'=>'true'] ) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Update article', ['class'=>'btn-btn-primary']) !!}
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection
