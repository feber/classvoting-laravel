<div class="form-group">
    {!! Form::label('name', 'Nama:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('category_id', 'Kategori:') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Deskripsi:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('images[]', 'Gambar-gambar:') !!}
    {!! Form::file('images[]', ['multiple' => true, 'class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitText, ['class' => 'btn btn-primary btn-block']) !!}
</div>
