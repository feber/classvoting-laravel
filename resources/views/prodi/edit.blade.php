@extends('app')
@section('content')

<h1>Perbaharui {{$prodi->nama}}</h1>

{!! Form::model($prodi, ['method' => 'PUT', 'url' => 'prodi/'.$prodi->id ]) !!}

@include('prodi._form', ['submitText' => 'Perbaharui'])

{!! Form::close() !!}

@stop
