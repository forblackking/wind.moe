@extends('layout')

@section('content')

    @if(Session::has('flash_message'))
        <div class="card mdl-color-text--grey-500 alert alert-success">{{ Session::get('flash_message') }}</div>
    @endif

    @foreach($articles as $article)
        <div class="card">
            <div class="title mdl-color-text--grey-500"><a href="/article/{{ $article->id }}">{{ $article->title }}</a>
            </div>
            <div class="date">{{ $article->author }} - {{ $article->published_at }}</div>
            <hr>
            <div>
                {!! $article->text !!}
                <div>
                    <a href="/article/{{ $article->id }}">Continued Reading...</a>
                </div>
            </div>
        </div>
    @endforeach

@stop