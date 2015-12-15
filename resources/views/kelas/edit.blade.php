@extends('app')
@section('content')

<h1>Perbaharui {{$kelas->nama}}</h1>

{!! Form::model($kelas, ['method' => 'PUT', 'url' => 'kelas/'.$kelas->id ]) !!}

@include('kelas._form', ['submitText' => 'Perbaharui'])

{!! Form::close() !!}

@stop
