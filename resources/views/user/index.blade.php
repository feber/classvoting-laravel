@extends('app')
@section('content')

<h1>Pengguna</h1>&nbsp;<a href="{{url('user/create')}}" class="btn btn-success">Tambah pengguna</a><hr>

<table class="table table-condensed table-hover">
<thead>
    <tr>
        <th>Nama</th>
        <th>Username</th>
        <th>Role</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
    @foreach ($users as $item)
    <tr>
        <td>
            <a href="{{url('user', [$item->id])}}">{{ $item->nama }}</a>
        </td>
        <td>{{ $item->username }}</td>
        <td>{{ substr($item->userable_type, 4) }}</td>
        <td>
            {!! Form::open(array('url' => 'user/'.$item->id)) !!}
                <a href="{{url('user', [$item->id, 'edit'])}}" class="btn btn-warning btn-xs">Perbaharui</a>
                {!! Form::hidden('_method', 'DELETE') !!}
                {!! Form::submit('Hapus', array('class' => 'btn btn-danger btn-xs')) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</tbody>
</table>

@stop
