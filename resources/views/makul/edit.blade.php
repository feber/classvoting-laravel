@extends('app')
@section('content')

<h1>Perbaharui {{$prodi->name}}</h1>

{!! Form::model($prodi, ['method' => 'PUT', 'url' => 'prodi/'.$prodi->id ]) !!}

@include('prodi._form', ['submitText' => 'Perbaharui'])

{!! Form::close() !!}

@stop
