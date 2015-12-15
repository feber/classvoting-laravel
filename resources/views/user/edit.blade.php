@extends('app')
@section('content')

<h1>Perbaharui {{$user->nama}}</h1>

{!! Form::model($user, ['method' => 'PUT', 'url' => 'user/'.$user->id ]) !!}

@include('user._form', ['submitText' => 'Perbaharui'])

{!! Form::close() !!}

@stop
