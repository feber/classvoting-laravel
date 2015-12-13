@extends('app')
@section('content')

<h1>Produk</h1>&nbsp;<a href="{{url('/products/create')}}" class="btn btn-success">Buat produk</a><hr>

<table class="table table-condensed table-hover">
<thead>
    <tr>
        <td>Nama</td>
        <td>Aksi</td>
    </tr>
</thead>
<tbody>
    @foreach ($products as $item)
    <tr>
        <td><a href="{{url('/products', [$item->id])}}">{{ $item->name }}</a></td>
        <td>
            {!! Form::open(array('url' => 'products/'.$item->id)) !!}
                <a href="{{url('/products', [$item->id, 'edit'])}}" class="btn btn-warning btn-xs">Perbaharui</a>
                {!! Form::hidden('_method', 'DELETE') !!}
                {!! Form::submit('Hapus', array('class' => 'btn btn-danger btn-xs')) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
</tbody>
</table>

@stop
