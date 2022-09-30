@extends('layout.app')

@section('title', 'trainer');
@section('content')


    <form class="form-group" method="POST" action="/trainers/{{ $trainer->slug }}/pokemones" enctype="multipart/form-data">
        @method('PUT')

        @csrf
        <div class="form-group">

            <label for="">Nombre</label>
            <input type="text" name="name" value=""class="form-control" class="form-control-file"id="">

            <label for="">Avatar</label>
            <input type="File" name="avatar" id="">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>


@endsection
