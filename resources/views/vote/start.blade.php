@extends('app')
@section('content')

<h1>Vote mata kuliah</h1>

<p>
    {!! Form::open(['url' => 'vote']) !!}
    <ul class="list-group">

        @foreach ($makuls as $item)
            <li class="list-group-item">
                <label>{!! Form::checkbox('vote[]', $item->id) !!} {{ $item->nama }} </label>
            </li>
        @endforeach

    </ul>
    {!! Form::submit('Submit', ['class' => 'btn btn-primary btn-block']) !!}
    {!! Form::close() !!}
</p>

@stop
