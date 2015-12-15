<div class="form-group">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('kapasitas', 'Kapasitas kelas:') !!}
    {!! Form::number('kapasitas', 0, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('makul_id', 'Matakuliah:') !!}
    {!! Form::select('makul_id', $makuls, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitText, ['class' => 'btn btn-primary btn-block']) !!}
</div>
