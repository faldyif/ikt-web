
<div class="row">
    <div class="form-group col-md-5">
        <label>Vessel <sup>*</sup></label>
        {{ Form::text('vessel', null, array('class' => 'form-control', 'placeholder' => 'Masukkan Vessel')) }}
    </div>
    <div class="form-group col-md-5">
        <label for="inputKonten">Agent <sup>*</sup></label>
        {{ Form::text('agent', null, array('class' => 'form-control', 'placeholder' => 'Masukkan nama agent')) }}
    </div>
    <div class="form-group col-md-2">
        <label>Tipe Berthing <sup>*</sup></label><br>
        {{ Form::radio('type', 'International') }} Internasional <br>
        {{ Form::radio('type', 'Domestic') }} Domestik
    </div>
</div>
<div class="row">
    <div class="form-group col-md-6">
        <label for="inputKonten">VOY <sup>*</sup></label>
        {{ Form::text('voy', null, array('class' => 'form-control', 'placeholder' => 'Masukkan VOY')) }}
    </div>
    <div class="form-group col-md-6">
        <label for="inputKonten">Estimated Time of Arrival <sup>*</sup></label>
        <div class="input-group date">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            {{ Form::text('eta', null, array('class' => 'form-control pull-right', 'id' => 'datepicker')) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-2 pull-right">
        <button type="submit" class="btn btn-block btn-primary">
            Publish
        </button>
    </div>
</div>

@section('page-style')
    <link rel="stylesheet" href="{{ url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
@endsection

@section('page-script')
    <script src="{{ url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script>
        $(function () {
            //Date picker
            $('#datepicker').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
            })
        })
    </script>
@endsection