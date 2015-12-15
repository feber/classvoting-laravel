@extends('app')
@section('content')

<h1>Vote mata kuliah</h1>

<p>
    Pada laman ini anda akan diminta untuk melakukan vote mata kuliah yang Anda inginkan.
    Anda hanya dapat melakukan vote satu kali.
    Pastikan anda memilih mata kuliah yang Anda inginkan.
</p>

<p>
    <a href="{{ url('vote/start') }}" class="btn btn-primary btn-large">Start</a>
</p>

@stop
