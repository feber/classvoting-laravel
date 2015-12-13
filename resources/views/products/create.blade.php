@extends('app')
@section('content')

<h1>Buat produk</h1>

{!! Form::open(['url'=>'products', 'files' => true]) !!}

@include('products._form', ['submitText' => 'Buat produk'])

{!! Form::close() !!}

@stop
