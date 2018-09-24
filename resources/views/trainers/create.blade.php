@extends('layouts.app')
@section('title','Trainers Create')
@section('sidebar')
@parent
<p>This is appended to the master sidebar.</p>
@endsection
@section('content')
<form action="/trainers" class="form-group" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="nombre">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection

