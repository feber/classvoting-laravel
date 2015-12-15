@extends('app')
@section('content')

<h1>Vote mata kuliah</h1>

<p>
    <ul>
        @foreach ($makuls as $item)
            <li>
                {{ $item->nama }}
            </li>
        @endforeach
    </ul>
</p>

@stop
