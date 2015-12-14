@extends('app')
@section('content')

<h1>{{ $makul->nama }}</h1>
<p>{{ $makul->kode }}</p>
<p>{{ $makul->prodi->nama }}</p>
<p>{{ $makul->deskripsi }}</p>
<hr>
{!! Form::open(array('url' => 'makul/'.$makul->id)) !!}
    <a href="{{url('/makul', [$makul->id, 'edit'])}}" class="btn btn-warning">Perbaharui</a>
    {!! Form::hidden('_method', 'DELETE') !!}
    {!! Form::submit('Hapus', array('class' => 'btn btn-danger')) !!}
{!! Form::close() !!}
@stop
