@extends('layout.master')
@section('title')
    <title>Create Article</title>
@endsection
@section('body.content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <h1>Create new article</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
@include('layout.error')
            {!! Form::open([
                'route' =>['article.store'],
                'method' => 'POST',
                'class' => 'form-horizontal',
            ]) !!}
                <div class="form-group">
                    {!! Form::label('title', 'Title', ['class'=>'control-label']) !!}
                    {!! Form::text('title', '',['id'=>'title', 'class'=>'form-control', 'placeholder'=>'Write your title', 'required'=>'true'] ) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('content', 'Content', ['class'=>'control-label']) !!}
                    {!! Form::text('content', '',['id'=>'title', 'class'=>'form-control', 'placeholder'=>'Write your title', 'required'=>'true'] ) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Add article', ['class'=>'btn-btn-primary']) !!}
                </div>
            {!! Form::close() !!}

        </div>
    </div>
</div>
@endsection
