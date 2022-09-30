@extends('layout.app')

@section('title', 'trainers');
@section('content')


    <div class="row">
        @foreach ($trainers as $trainers)
            <div class="col-sm">
                <div class="card text-center" style="width: 18rem;">
                    <img class="card-img-top" src="/images/{{ $trainers->avatar }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $trainers->name }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's
                            content.</p>
                        <a href="/trainers/{{ $trainers->slug }}" class="btn btn-primary">Ver mas..</a>
                    </div>
                </div>

            </div>
        @endforeach

    </div>



@endsection
