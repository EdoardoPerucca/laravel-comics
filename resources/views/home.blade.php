@extends('layouts/main-layout')

@section('content')
<main>

    <div class="main-bg-cards">

        <div class="container-1000">
            <div class="row">

                @foreach ($comics as $singleComics)
                <div class="col-2 comics-card">
                    <div class="comics-card-inner">
                        <div class="img-main-container">
                            <img src="{{ $singleComics['thumb'] }}" alt="immagine">
                        </div>
                        {{ $singleComics['series'] }}
                    </div>
                </div>
                @endforeach
            </div>

            <div class="button-main">
                <a href="#"><button>Load More</button></a>
            </div>
        </div>

    </div>

    <div class="main-bg-links">
        <div class="container-1000">
            <div class="row">

                <div class="links-card">
                    @foreach ($icons as $singleIcons) 

                        <div class="links-inner">
                            <img src="{{Vite::asset('resources/img/' . $singleIcons['src'])}}" alt="">
                            {{$singleIcons['text']}}
                        </div>
                    
                    @endforeach
                </div>
            </div>

        </div>
    </div>


</main>
@endsection