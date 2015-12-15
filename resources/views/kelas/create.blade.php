@extends('app')
@section('content')

<h1>Tambah kelas</h1>

{!! Form::open(['url'=>'kelas']) !!}

@include('kelas._form', ['submitText' => 'Tambah'])

{!! Form::close() !!}

@stop
