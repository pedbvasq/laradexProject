@extends('layout.app')

@section('title', 'trainers');
@section('content')
    <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">

        @csrf
        <div class="form-group">

            <label for="">Nombre</label>
            <input type="text" name="name" class="form-control" class="form-control-file"id="">
            <label for="">Slug</label>
            <input type="text" name="slug" class="form-control" class="form-control-file"id="">
            <label for="">Avatar</label>
            <input type="File" name="avatar" id="">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>


@endsection
