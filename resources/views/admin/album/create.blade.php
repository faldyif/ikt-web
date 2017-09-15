@extends('layouts.admin.app')

@section('title', 'Buat Album Baru')

@section('breadcrumb')
    <li><a href="{{ route('album.index') }}"><i class="fa fa-newspaper-o"></i> Album</a></li>
    <li><a href="{{ route('album.create') }}">Buat Album Baru</a></li>
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
            {!! Form::open(array('route' => 'album.store', 'enctype' => 'multipart/form-data')) !!}
              @include('admin.album.fields')
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