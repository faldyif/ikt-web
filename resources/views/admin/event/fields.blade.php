
<div class="form-group col-md-12">
    <label>Nama Event <sup>*</sup></label>
    {{ Form::text('event', null, array('class' => 'form-control', 'placeholder' => 'Masukkan judul berita')) }}
</div>
<div class="form-group col-md-12">
    <label for="inputKonten">Subjek <sup>*</sup></label>
    {{ Form::text('subject', null, array('class' => 'form-control', 'placeholder' => 'Masukkan subyek event')) }}
</div>
<div class="form-group col-md-4">
    <label for="inputKonten">Tempat <sup>*</sup></label>
    {{ Form::text('place', null, array('class' => 'form-control', 'placeholder' => 'Masukkan tempat pelaksanaan agenda')) }}
</div>
<div class="form-group col-md-4">
    <label for="inputKonten">Tanggal <sup>*</sup></label>
    <div class="input-group date">
        <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
        </div>
        {{ Form::text('event_date_time', null, array('class' => 'form-control pull-right', 'id' => 'datepicker')) }}
    </div>
</div>
<div class="form-group col-md-4">
    <label>Gambar Agenda <sup>(opsional)</sup></label>
    {{ Form::file('thumbnail' ,array('class' => 'form-control')) }}
</div>
<div class="col-md-2 pull-right">
<button type="submit" class="btn btn-block btn-primary">
    Publish
</button>
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