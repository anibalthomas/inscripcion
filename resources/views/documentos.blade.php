@extends('layouts.principal')

@section('content')


@foreach (auth()->user()->cursos as $curso)
    {{ $curso->nombre}}<br><br>
@endforeach



@endsection
