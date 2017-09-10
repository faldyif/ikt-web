@extends('layouts.admin.app')

@section('title', 'Edit Album')

@section('breadcrumb')
    <li><a href="{{ route('album.index') }}"><i class="fa fa-newspaper-o"></i> Album</a></li>
    <li><a href="{{ route('gallery.detail', $album->slug) }}" target="_blank">{{ \App\Album::find($album->id)->title }}</a></li>
    <li><a href="{{ route('album.edit', $album->id) }}">Edit</a></li>
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
            {!! Form::model($album, array('route' => array('album.update', $album->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data')) !!}
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
                        Simpan
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