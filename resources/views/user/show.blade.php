@extends('app')
@section('content')

<h1>{{ $user->nama }}</h1>
<p>{{ $user->email }}</p>
<p>{{ $user->userable_type }}</p>
<p>{{ $user->userable->prodi_id }}</p>
<p>{{ $user->role }}</p>
<hr>
{!! Form::open(array('url' => 'user/'.$user->id)) !!}
    <a href="{{url('/user', [$user->id, 'edit'])}}" class="btn btn-warning">Perbaharui</a>
    {!! Form::hidden('_method', 'DELETE') !!}
    {!! Form::submit('Hapus', array('class' => 'btn btn-danger')) !!}
{!! Form::close() !!}
@stop
