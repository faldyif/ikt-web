

<div class="form-group col-md-12">
    <label>Foto <sup>*</sup></label>
    {{ Form::file('photos[]', array('class' => 'form-control', 'multiple' => 'multiple')) }}
</div>
<div class="col-md-2 pull-right">
<button type="submit" class="btn btn-block btn-primary">
    Publish
</button>
</div>