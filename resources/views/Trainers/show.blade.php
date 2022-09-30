@extends('layout.app')

@section('title', 'trainer');
@section('content')

    @method('DELETE')
    <div class="card text-center" style="width: 18rem;">
        <img style="height: 200px; width:200px;  background-color: #EFEFEF; margin:20px;"
            class="card-img-top rounded-circle mx-auto d-block" src="/images/{{ $trainer->avatar }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{ $trainer->name }}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                card's
                content.</p>

            <form method="POST" action="{{ route('trainers.destroy', $trainer->slug) }}">
                @csrf
                @method('DELETE')
                <div class="form-group">
                    <button type="submit" class="btn btn-danger">Delete</button>


                </div>
            </form>
            <a href="/trainers/{{ $trainer->slug }}/edit" class="btn btn-primary">Editar</a>
        </div>
        <div id="app">
            <add></add>
            <create></create>
            <Pokemones></Pokemones>

        </div>


    @endsection
