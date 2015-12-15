@extends('app')
@section('content')

<h1>Kelas</h1>&nbsp;<a href="{{url('/kelas/create')}}" class="btn btn-success">Tambah Kelas</a><hr>

<table class="table table-condensed table-hover">
<thead>
    <tr>
        <th>Nama</th>
        <th>Kapasitas</th>
        <th>Peminat</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
    @foreach ($kelas as $item)
    <tr>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->kapasitas }}</td>
        <td>{{ $item->peminat }}</td>
        <td>
            {!! Form::open(array('url' => 'kelas/'.$item->id)) !!}
                <a href="{{url('/kelas', [$item->id, 'edit'])}}" class="btn btn-warning btn-xs">Perbaharui</a>
                {!! Form::hidden('_method', 'DELETE') !!}
                {!! Form::submit('Hapus', array('class' => 'btn btn-danger btn-xs')) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</tbody>
</table>

@stop
