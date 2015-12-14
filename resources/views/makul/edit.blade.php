@extends('app')
@section('content')

<h1>Perbaharui {{$makul->name}}</h1>

{!! Form::model($makul, ['method' => 'PUT', 'url' => 'makul/'.$makul->id ]) !!}

@include('makul._form', ['submitText' => 'Perbaharui'])

{!! Form::close() !!}

@stop
