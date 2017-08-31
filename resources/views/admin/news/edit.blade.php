@extends('layouts.admin.app')

@section('title', 'Edit Berita')

@section('breadcrumb')
    <li><a href="{{ url('admin/news') }}"><i class="fa fa-newspaper-o"></i> Berita</a></li>
    <li><a href="{{ url('admin/news') }}/{{ $news->id }}">{{ \App\News::find($news->id)->title }}</a></li>
    <li><a href="{{ url('admin/news') }}/{{ $news->id }}/edit">Edit</a></li>
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
            {!! Form::model($news, array('route' => array('news.update', $news->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data')) !!}
              @include('admin.news.fields')
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