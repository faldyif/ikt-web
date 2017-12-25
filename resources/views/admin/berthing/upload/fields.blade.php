

<div class="form-group col-md-8">
    <label>File xls <sup>*</sup></label>
    {{ Form::file('berthing', array('class' => 'form-control')) }}
</div>
<div class="form-group col-md-4">
    <label>Tipe Berthing <sup>*</sup></label><br>
    {{ Form::radio('type', 'International') }} Internasional <br>
    {{ Form::radio('type', 'Domestic') }} Domestik
</div>
<div class="col-md-2 pull-right">
<button type="submit" class="btn btn-block btn-primary">
    Publish
</button>
</div>