@extends('app')
@section('content')

<h1>Tambah pengguna</h1>

{!! Form::open(['url'=>'user']) !!}

@include('user._form', ['submitText' => 'Tambah'])

{!! Form::close() !!}

@stop

@section('script')
<script charset="utf-8">
    // when change triggered on select
    $("#role").on('change', function() {
        // if dosen is selected
        if ($("#role option:selected").text() === "{{$dosen}}") {
            $("#prodi_id").removeAttr('disabled');
            $("#additional").empty().html(
                "<div class='form-group'>"+
                "<label for='nip'>NIP:</label>"+
                "<input class='form-control' name='nip' type='text' id='nip' required>"+
                "</div>"
            );
        } else if ($("#role option:selected").text() === "{{$mahasiswa}}") {
            $("#prodi_id").removeAttr('disabled');
            $("#additional").empty().html(
                "<div class='form-group'>"+
                "<label for='nim'>NIM:</label>"+
                "<input class='form-control' name='nim' type='text' id='nim' required>"+
                "</div>"
            );
        } else {
            // set is empty to admin
            $("#additional").empty();
            $("#prodi_id").attr('disabled', 'disabled');
        }
    });
</script>
@stop
