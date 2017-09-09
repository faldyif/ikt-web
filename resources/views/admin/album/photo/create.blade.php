@extends('layouts.admin.app')

@section('title', 'List Foto Dalam Album')

@section('breadcrumb')
    <li><a href="{{ route('album.index') }}"><i class="fa fa-newspaper-o"></i> Album</a></li>
    <li><a href="{{ route('gallery.detail', $album->id) }}" target="_blank"><i class="fa fa-newspaper-o"></i> {{ \App\Album::find($album->id)->name }}</a></li>
    <li><a href="{{ route('photo.create', $album->id) }}"><i class="fa fa-newspaper-o"></i> Tambahkan Foto</a></li>
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
            {!! Form::open(array('route' => ['photo.store', $album->id], 'enctype' => 'multipart/form-data')) !!}
              @include('admin.album.photo.fields')
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