
<div class="form-group col-md-12">
    <label>Judul Album <sup>*</sup></label>
    {{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Masukkan judul album')) }}
</div>
<div class="form-group col-md-12">
    <label for="inputKonten">Deskripsi Album <sup>*</sup></label>
    {{ Form::textarea('description', null, array('class' => 'tinymce')) }}
</div>
<div class="col-md-2 pull-right">
<button type="submit" class="btn btn-block btn-primary">
    Publish
</button>
</div>