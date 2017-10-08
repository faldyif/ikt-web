
<input type="hidden" name="news_id" value="{{ $news->id }}">
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