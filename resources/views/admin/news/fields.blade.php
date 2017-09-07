
<div class="form-group col-md-2">
    <label>Bahasa <sup>*</sup></label>
    {{ Form::select('locale', array(
        'id' => 'Bahasa Indonesia',
        'en' => 'English',
        'jp' => '日本語',
    ), null, array('class' => 'form-control')) }}
</div>
<div class="form-group col-md-6">
    <label>Judul Berita <sup>*</sup></label>
    {{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Masukkan judul berita')) }}
</div>
<div class="form-group col-md-4">
    <label>Gambar Thumbnail <sup>*</sup></label>
    {{ Form::file('thumbnail' ,array('class' => 'form-control')) }}
</div>
<div class="form-group col-md-12">
    <label for="inputKonten">Konten <sup>*</sup></label>
    {{ Form::textarea('content', null, array('class' => 'tinymce')) }}
</div>
<div class="col-md-2 pull-right">
<button type="submit" class="btn btn-block btn-primary">
    Publish
</button>
</div>