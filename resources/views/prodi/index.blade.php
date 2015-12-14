@extends('app')
@section('content')

<h1>Program Studi</h1>&nbsp;<a href="{{url('/prodi/create')}}" class="btn btn-success">Tambah program studi</a><hr>

<table class="table table-condensed table-hover">
<thead>
    <tr>
        <th>Nama</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
    @foreach ($prodis as $item)
    <tr>
        <td>
            <a href="{{url('/prodi', [$item->id])}}">{{ $item->nama }}</a>
        </td>
        <td>{{ str_limit($item->deskripsi, 30) }}</td>
        <td>
            {!! Form::open(array('url' => 'prodi/'.$item->id)) !!}
                <a href="{{url('/prodi', [$item->id, 'edit'])}}" class="btn btn-warning btn-xs">Perbaharui</a>
                {!! Form::hidden('_method', 'DELETE') !!}
                {!! Form::submit('Hapus', array('class' => 'btn btn-danger btn-xs')) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</tbody>
</table>

@stop
