@extends('layouts.app')

@section('page-title', 'Homepage')

@section('main-content')
    <h1 class="fw-bold p-3 text-center"> Movies List </h1>

    <section id="movies-list">
        <div class="movies-wrapper container-fluid d-flex flex-wrap justify-content-center py-4 px-5">
            @foreach ($movies as $movie)
                <article class="card mx-2 mb-4 bg-transparent text-white">
                    <div class="card-body d-flex flex-column">
                        <div>
                            <h5 class="card-title mb-2 fw-bold"> {{ $movie->title }} </h5>
                            @if ($movie->original_title <> $movie->title)
                                <h6 class="card-subtitle mb-4"> {{ $movie->original_title }} </h6>
                            @endif
                        </div>
                        <div class="card-info mt-auto">
                            <p class="card-text mb-1">Nationality: {{$movie->nationality}} </p>
                            <p class="card-text mb-1">Release date: {{$movie->date}} </p>
                            <p class="card-text mb-0">Rating: {{$movie->vote}} </p>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
@endsection
