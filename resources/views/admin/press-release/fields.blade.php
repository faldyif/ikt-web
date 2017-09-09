
<div class="form-group col-md-4">
    <label>Judul Press Release <sup>*</sup></label>
    {{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Masukkan judul berita')) }}
</div>
<div class="form-group col-md-4">
    <label>Lokasi <sup>*</sup></label>
    {{ Form::text('location', null, array('class' => 'form-control', 'placeholder' => 'Masukkan lokasi')) }}
</div>
<div class="form-group col-md-2">
    <label for="inputKonten">Tanggal <sup>*</sup></label>
    <div class="input-group date">
        <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
        </div>
        {{ Form::text('date', ((isset($pressRelease)) ? \Carbon\Carbon::parse($pressRelease->date_time)->toDateString() : null), array('class' => 'form-control pull-right', 'id' => 'datepicker')) }}
    </div>
</div>
<!-- time Picker -->
<div class="bootstrap-timepicker col-md-2">
    <div class="form-group">
        <label>Waktu:</label>

        <div class="input-group">
            {{ Form::text('time', ((isset($pressRelease)) ? \Carbon\Carbon::parse($pressRelease->date_time)->toTimeString() : null), array('class' => 'form-control timepicker', 'id' => 'timepicker')) }}

            <div class="input-group-addon">
                <i class="fa fa-clock-o"></i>
            </div>
        </div>
        <!-- /.input group -->
    </div>
    <!-- /.form group -->
</div>
<div class="form-group col-md-12">
    <label for="inputKonten">Deskripsi Singkat <sup>*</sup></label>
    {{ Form::textarea('description', null, array('class' => 'tinymce')) }}
</div>
<div class="col-md-2 pull-right">
<button type="submit" class="btn btn-block btn-primary">
    Publish
</button>
</div>

@section('page-style')
    <link rel="stylesheet" href="{{ url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/timepicker/bootstrap-timepicker.min.css') }}">
@endsection

@section('page-script')
    <script src="{{ url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ url('assets/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
    <script>
        $(function () {
            //Date picker
            $('#datepicker').datepicker({
                autoclose: true,
                format: 'yyyy-mm-dd'
            });
            //Timepicker
            $('#timepicker').timepicker({
                showInputs: false,
                showMeridian: false,
                defaultTime: '09:00 AM'
            });
        })
    </script>
    <script src="{{ url('assets/dist/js/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector:'textarea',
            theme: 'modern'
        });
    </script>
@endsection