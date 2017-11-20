
<div class="form-group col-md-4">
    <label>Nama <sup>*</sup></label>
    {{ Form::text('nama', null, array('class' => 'form-control', 'placeholder' => 'Masukkan nama pemberi testimonial')) }}
</div>
<div class="form-group col-md-4">
    <label>Asal Instansi <sup>*</sup></label>
    {{ Form::text('instansi', null, array('class' => 'form-control', 'placeholder' => 'Masukkan asal instansi')) }}
</div>
<div class="form-group col-md-4">
    <label>Foto <sup>*</sup></label>
    {{ Form::file('foto', array('class' => 'form-control')) }}
</div>
<div class="form-group col-md-12">
    <label for="inputKonten">Testimonial <sup>*</sup></label>
    {{ Form::text('testimonial', null, array('class' => 'form-control')) }}
</div>
<div class="col-md-2 pull-right">
<button type="submit" class="btn btn-block btn-primary">
    Publish
</button>
</div>