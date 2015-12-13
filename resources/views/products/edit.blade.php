@extends('app')
@section('content')

<h1>Ubah {{$product->name}}</h1>

{!! Form::model($product, ['method' => 'PUT', 'url' => 'products/'.$product->id, 'files' => true]) !!}

@include('products._form', ['submitText' => 'Ubah produk'])

{!! Form::close() !!}

@stop
