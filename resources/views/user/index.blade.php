@extends('app')
@section('content')

<h1>Mata Kuliah</h1>&nbsp;<a href="{{url('/makul/create')}}" class="btn btn-success">Tambah mata kuliah</a><hr>

<table class="table table-condensed table-hover">
<thead>
    <tr>
        <th>Nama</th>
        <th>Kode</th>
        <th>Program Studi</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
    @foreach ($makuls as $item)
    <tr>
        <td>
            <a href="{{url('/makul', [$item->id])}}">{{ $item->nama }}</a>
        </td>
        <td>{{ $item->kode }}</td>
        <td>{{ $item->prodi->nama }}</td>
        <td>{{ str_limit($item->deskripsi, 30) }}</td>
        <td>
            {!! Form::open(array('url' => 'makul/'.$item->id)) !!}
                <a href="{{url('/makul', [$item->id, 'edit'])}}" class="btn btn-warning btn-xs">Perbaharui</a>
                {!! Form::hidden('_method', 'DELETE') !!}
                {!! Form::submit('Hapus', array('class' => 'btn btn-danger btn-xs')) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</tbody>
</table>

@stop
