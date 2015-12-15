@extends('app')
@section('content')

<h1>Tambah mata kuliah</h1>

{!! Form::open(['url'=>'makul']) !!}

@include('makul._form', ['submitText' => 'Tambah'])

{!! Form::close() !!}

@stop
