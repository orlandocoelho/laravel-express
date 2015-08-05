@extends('template')

@section('title')
   Blog
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            @foreach($content as $post)
                <div class="jumbotron">
                    <h1>{{$post['title']}}</h1>
                    <h6>Autor: {{$post['author']}} - Data: {{$post['date']}} - Hora: {{$post['time']}}</h6>
                    <h3 class="description">{{$post['description']}}</h3>
                    <p class="text-justify">{{$post['text']}}</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
                </div>
            @endforeach
        </div>
    </div>
@endsection