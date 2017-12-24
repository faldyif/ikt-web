@extends('layouts.admin.app')

@section('title', 'Pengaturan Facebook')

@section('breadcrumb')
    <li><a href="{{ url('admin/facebook/login') }}"><i class="fa fa-facebook"></i> Pengaturan Facebook</a></li>
@endsection

@section('content')
      <div class="row">
        <div class="col-xs-12">
          @if(Session::has('message'))
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-check"></i> Sukses</h4>
              {!! Session::get('message') !!}
            </div>
          @endif
            @if(Session::has('error'))
                <div class="alert alert-error alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-times"></i> Gagal</h4>
                    {!! Session::get('error') !!}
                </div>
            @endif

          <div class="box">
            <div class="box-body">
              <div class="row">
                  <div class="col-md-12">
                <label>Koneksi Akun Facebook</label>
                <br>
                @if(Auth::user()->fb_token_timeout != NULL && Auth::user()->fb_token_timeout > \Carbon\Carbon::now())
                <p><span class="text-success">Terhubung sebagai: {{ $name }}</span> (<a href="{{ url('admin/facebook/logout') }}">log out</a>)</p>
                <p>Koneksi facebook akan expired pada: {{ Auth::user()->fb_token_timeout }}</p>
                @else
                <a href="{{ $login_url }}" class="btn btn-lg btn-info" style="background-color: #3b5998; border-color: #3b5998"><i class="fa fa-facebook-official"></i> Masuk ke Facebook</a>
                @endif
              </div>
              </div>
              <div class="row">
                  <div class="col-md-12">

                  {!! Form::model(null, array('route' => array('facebook.signature', 'method' => 'POST', 'enctype' => 'multipart/form-data'))) !!}

                      <div class="form-group col-md-12">
                          <label for="inputKonten">Signature <sup>*</sup></label>
                          {{ Form::textarea('signature', Auth::user()->news_signature, array('class' => 'tinymce mce-facebook', 'id' => 'mce-facebook-content')) }}
                      </div>

                      <div class="col-md-12">
                          <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Simpan Signature</button>
                      </div>

                  {!! Form::close() !!}
                  </div>
              </div>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.8/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.8/sweetalert2.min.css">

<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<!-- DataTables -->
<link rel="stylesheet" href="{{ url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('page-script')
    <script src="{{ url('assets/dist/js/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            height: 200,
            selector:'#mce-facebook-content',
            theme: 'modern',
            plugins: [
                'image searchreplace'
            ],
            toolbar1: 'undo redo | image | bold italic underline | searchreplace',
            image_advtab: true,
            media_poster: false,
            relative_urls: false,
            file_browser_callback: function(field_name, url, type, win) {
                // trigger file upload form
                if (type == 'image') $('#formUpload input').click();
            }
        });
    </script>
@endsection