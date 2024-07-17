@extends('layouts.app')

@section('page-title', 'Homepage')

@section('main-content')
    <h1>
        Movies List
    </h1>

    @foreach ($movies as $movie)
        <ul>
            <li>
                <p>
                    {{ $movie->title }}
                </p>
            </li>
        </ul>
    @endforeach
@endsection
