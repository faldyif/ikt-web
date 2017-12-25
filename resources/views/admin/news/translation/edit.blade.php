@extends('layouts.admin.app')

@section('title', 'Edit Berita')

@section('breadcrumb')
    <li><a href="{{ url('admin/news') }}"><i class="fa fa-newspaper-o"></i> Berita</a></li>
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
            {!! Form::model($news, array('route' => array('news-translation.update', $news->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data')) !!}
                <input type="hidden" name="news_id" value="{{ $news->id }}">
                <div class="form-group col-md-2">
                    <label>Bahasa <sup>*</sup></label>
                    {{ Form::select('locale', array(
                        'id' => 'Bahasa Indonesia',
                        'en' => 'English',
                        'jp' => '日本語',
                    ), $news->locale, array('class' => 'form-control', 'disabled' => 'true')) }}
                </div>
                <div class="form-group col-md-6">
                    <label>Judul Berita <sup>*</sup></label>
                    {{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Masukkan judul berita')) }}
                </div>
                <div class="form-group col-md-4">
                    <label>Gambar Thumbnail <sup>*</sup></label>
                    {{ Form::file('thumbnail' ,array('class' => 'form-control')) }}
                </div>
                <div class="form-group col-md-12">
                    <label for="inputKonten">Konten <sup>*</sup></label>
                    {{ Form::textarea('content', null, array('class' => 'tinymce')) }}
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
          media_poster: false,
          relative_urls: false,
          file_browser_callback: function(field_name, url, type, win) {
              // trigger file upload form
              if (type == 'image') $('#formUpload input').click();
          },
          default_link_target: "_blank"
      });
  </script>
@endsection

@section('page-script')
@endsection