@extends('app')
@section('content')

<h1>Tambah program studi</h1>

{!! Form::open(['url'=>'prodi']) !!}

@include('prodi._form', ['submitText' => 'Tambah'])

{!! Form::close() !!}

@stop
