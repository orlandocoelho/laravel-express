@extends('template')

@section('content')

    <h1></h1>

    <ul>
        @foreach($notas as $nota)
            <li>{{$nota}}</li>
        @endforeach
    </ul>

@endsection