@extends('templates.base')

@section('pageTitle', 'Film disponibili')

@section('pageMain')
    <main>
        <ul>
            @foreach ($movie as $movies)
                <li>{{$movies->title}}</li>
            @endforeach
        </ul>
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