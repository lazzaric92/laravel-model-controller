@extends('layouts.app')

@section('page-title', 'Homepage')

@section('main-content')
    <h1>
        Movies List
    </h1>

    <section id="movies-list">
        <div class="movies-wrapper container-fluid d-flex flex-wrap justify-content-center py-4 px-5">
            @foreach ($movies as $movie)
                <article class="card mx-2 mb-4">
                    <div class="card-body d-flex flex-column">
                        <div>
                            <h5 class="card-title mb-2 fw-bold"> {{ $movie->title }} </h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary"> {{ $movie->original_title }} </h6>
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
