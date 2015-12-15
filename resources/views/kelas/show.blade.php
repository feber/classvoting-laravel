@extends('app')
@section('content')

<h1>{{ $prodi->nama }}</h1>
<p>{{ $prodi->deskripsi }}</p>

{!! Form::open(array('url' => 'prodi/'.$prodi->id)) !!}
    <a href="{{url('/prodi', [$prodi->id, 'edit'])}}" class="btn btn-warning btn-xs">Perbaharui</a>
    {!! Form::hidden('_method', 'DELETE') !!}
    {!! Form::submit('Hapus', array('class' => 'btn btn-danger btn-xs')) !!}
{!! Form::close() !!}
@stop
