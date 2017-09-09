@extends('layouts.admin.app')

@section('title', 'Terjemahkan Berita')

@section('breadcrumb')
    <li><a href="{{ route('news.index') }}"><i class="fa fa-newspaper-o"></i> Berita</a></li>
    <li><a href="{{ route('news.create') }}">Terjemahkan Berita</a></li>
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
            {!! Form::open(array('route' => 'news-translation.store', 'enctype' => 'multipart/form-data')) !!}
              @include('admin.news.translation.fields')
						{!! Form::close() !!}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      @include('mceImageUpload::upload_form')
@endsection


@section('page-style')
  <script src="{{ url('assets/dist/js/tinymce/tinymce.min.js') }}"></script>
  <script>
      tinymce.init({
          selector:'textarea',
          theme: 'modern',
          plugins: [
              'advlist autolink lists link image charmap print preview hr anchor pagebreak',
              'searchreplace wordcount visualblocks visualchars code fullscreen',
              'insertdatetime media nonbreaking save table contextmenu directionality',
              'template paste textcolor colorpicker textpattern imagetools codesample toc help emoticons hr'
          ],
          toolbar1: 'newdocument | print preview searchreplace | undo redo | image | bullist numlist outdent indent |   visualblocks help',
          toolbar2: 'styleselect | fontselect | fontsizeselect | bold italic underline  | alignleft aligncenter alignright alignjustify | forecolor backcolor | removeformat',
          image_advtab: true,
          relative_urls: false,
          file_browser_callback: function(field_name, url, type, win) {
              // trigger file upload form
              if (type == 'image') $('#formUpload input').click();
          }
      });
  </script>
@endsection

@section('page-script')
@endsection