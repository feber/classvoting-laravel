<div class="form-group">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    @if (!isset($user))
    {!! Form::password('password', ['class' => 'form-control', 'required']) !!}
    @else
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Kosongkan bila tidak diubah']) !!}
    @endif
</div>

<div class="form-group">
    {!! Form::label('prodi_id', 'Program studi:') !!}
    {!! Form::select('prodi_id', $prodis, isset($user->userable->prodi_id)?$user->userable->prodi_id:null, ['class' => 'form-control']) !!}
</div>

@if (!isset($user))
<div class="form-group">
    {!! Form::label('role', 'Hak akses:') !!}
    {!! Form::select('role', $roles, null, ['class' => 'form-control']) !!}
</div>
@endif

<div id="additional">
    <div class="form-group">
        @if (isset($user))
        @if ($user->userable_type === $dosen)
        {!! Form::label('nip', 'NIP:') !!}
        {!! Form::text('nip', $user->userable->nip, ['class' => 'form-control', 'required']) !!}
        @elseif ($user->userable_type === $mahasiswa)
        {!! Form::label('nim', 'NIM:') !!}
        {!! Form::text('nim', $user->userable->nim, ['class' => 'form-control', 'required']) !!}
        @endif
        @else
        {!! Form::label('nim', 'NIM:') !!}
        {!! Form::text('nim', null, ['class' => 'form-control', 'required']) !!}
        @endif
    </div>
</div>

<div class="form-group">
    {!! Form::submit($submitText, ['class' => 'btn btn-primary btn-block']) !!}
</div>
