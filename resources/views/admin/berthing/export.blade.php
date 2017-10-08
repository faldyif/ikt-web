@extends('layouts.admin.app')

@section('title', 'Buat Berthing Plan Baru')

@section('breadcrumb')
    <li><a href="{{ route('berthing.index') }}"><i class="fa fa-calendar"></i> Berthing Plan</a></li>
    <li><a href="{{ route('berthing.create') }}">Export Berthing Plan</a></li>
@endsection

@section('content')
      <div class="row">
        <div class="col-xs-12">
          @if (count($errors) > 0)
          <div class="callout callout-warning">
              <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
            {!! Form::open(array('route' => 'berthing.store.export', 'enctype' => 'multipart/form-data')) !!}
                <div class="form-group col-md-12">
                    <label>File (xls / xlsx) <sup>*</sup></label>
                    {{ Form::file('file', array('class' => 'form-control')) }}
                </div>
                <div class="col-md-2 pull-right">
                    <button type="submit" class="btn btn-block btn-primary">
                        Publish
                    </button>
                </div>
            {!! Form::close() !!}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
@endsection


@section('page-style')
  <script src="{{ url('assets/dist/js/tinymce/tinymce.min.js') }}"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
@endsection

@section('page-script')
@endsection