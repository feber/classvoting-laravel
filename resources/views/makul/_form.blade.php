<div class="form-group">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('kode', 'Kode:') !!}
    {!! Form::text('kode', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    {!! Form::textarea('deskripsi', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('prodi_id', 'Program studi:') !!}
    {!! Form::select('prodi_id', $prodis, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitText, ['class' => 'btn btn-primary btn-block']) !!}
</div>
