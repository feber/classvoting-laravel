@extends('app')
@section('content')

<h1>Vote mata kuliah</h1>

<p>
    Pada laman ini anda akan diminta untuk melakukan voting mata kuliah yang Anda inginkan.
    Anda hanya dapat melakukan voting satu kali.
    Pastikan anda memilih mata kuliah yang Anda inginkan.
</p>

@if(Auth::user()->userable->voted)
<hr>
<p class="alert alert-danger">
    Maaf, Anda sudah melakukan voting.
    Voting hanya dapat dilakukan sekali.
</p>
@else
<p>
    <a href="{{ url('vote/start') }}" class="btn btn-primary btn-large">Start</a>
</p>
@endif

@stop
