@extends('templates.base')

@section('pageTitle', 'Film disponibili')

@section('pageMain')
    <main>
        <h1>Film proiettati in sala:</h1>
        <div id="flex">
            <ul>
                @foreach ($movie as $movies)
                    <li><div>Titolo: {{$movies->title}}</div>
                    <div>Un film: {{$movies->nationality}}</div>
                    <div>Voto complessivo: {{$movies->vote}}</div>
                    <div>Titolo originale: {{$movies->original_title}}</div>
                    <div>Data: {{$movies->date}}</div></li>
                    <br>
                @endforeach
            </ul>
        </div>
    </main>

@endsection
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$pageName}}</title>
</head>
<body>
    <h1>{{$pageTitle}}</h1>
    <ul>
        @foreach ($movie as $movies)
            <li>{{$movies->title}}</li>
        @endforeach
    </ul>
</body>
</html> --}}