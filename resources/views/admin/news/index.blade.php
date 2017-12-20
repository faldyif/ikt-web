@extends('layouts.admin.app')

@section('title', 'List Berita')

@section('breadcrumb')
    <li><a href="{{ url('admin/news') }}"><i class="fa fa-newspaper-o"></i> Berita</a></li>
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

          <div class="box">
            <div class="box-header">
              <div class="col-md-2 pull-right">
              <a href="{{ url('admin/news/create') }}" class="btn btn-block btn-primary">
                Buat Baru
              </a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Judul Berita</th>
                  <th>Ditulis Pada</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($news as $key)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $key->title }}</td>
                  <td>{{ \Carbon\Carbon::parse($key->created_at) }}</td>
                  <td>
                    <div class="btn-group">
                      <a href="{{ url('id/berita') . '/' . $key->slug }}" class="btn btn-default btn-xs" target="_blank"><i class="fa fa-eye"></i> Lihat</a>
                      <a href="{{ route('news.show', $key->id) }}" class="btn btn-default btn-xs"><i class="fa fa-language"></i> Terjemahkan</a>
                        <a href="#" data-id="{{ $key->id }}" class="btn btn-default btn-xs share-modal-facebook"><i class="fa fa-facebook-official"></i> Publish</a>
                        <a href="#" data-id="{{ $key->id }}" class="btn btn-default btn-xs share-modal-twitter"><i class="fa fa-twitter"></i> Tweet</a>
                      <a href="#" onclick="deleteConfirmation({{ $key->id }})" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
                      {!! Form::open(['route' => ['news.destroy',$key->id], 'method' => 'delete', 'id' => 'delete_form_'.$key->id]) !!}
                      {!! Form::close() !!}
                    </div>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Nomor</th>
                  <th>Judul Berita</th>
                  <th>Ditulis Pada</th>
                  <th>Aksi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="modal fade" id="modal-7">
          {!! Form::model($news, array('route' => array('facebook.news.post', 'method' => 'POST', 'enctype' => 'multipart/form-data'))) !!}
          <div class="modal-dialog modal-lg">
              <div class="modal-content">

                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Publikasikan Berita di Facebook</h4>
                  </div>

                  <div class="modal-body">
                      <div class="form-group col-md-12">
                          <label for="inputKonten">Konten <sup>*</sup></label>
                          {{ Form::textarea('content', null, array('class' => 'tinymce mce-facebook', 'id' => 'mce-facebook-content')) }}
                      </div>
                      <div class="form-group col-md-12">
                          <label for="signature"><input type="checkbox" name="signature"> Enable Signature (<a href="{{ url('admin/facebook/login') }}">edit</a>)</label>
                          {!! Auth::user()->news_signature !!}
                      </div>
                  </div>

                  <div class="modal-footer">
                      <div class="col-md-12 pull-right" style="display: inline-block;">
                          <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-info" style="background-color: #3b5998; border-color: #3b5998"><i class="fa fa-facebook-official"></i> Publish</button>
                      </div>
                  </div>

              </div>
          </div>
          {!! Form::close() !!}
      </div>

      <div class="modal fade" id="modal-8">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  {!! Form::model($news, array('route' => array('twitter.news.post', 'method' => 'POST', 'enctype' => 'multipart/form-data'))) !!}

                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Share di Twitter</h4>
                      <input id="uid-berita" name="id" type="hidden">
                  </div>

                  <div class="modal-body">
                      <div class="form-group col-md-12">
                          <label for="inputKonten">Konten <sup>*</sup></label>
                          <span id="rchars">160</span> Character(s) Remaining
                          {{ Form::textarea('content', null, array('class' => 'form-control', 'id' => 'twitter-content', 'maxlength' => 160, 'rows' => 2)) }}
                      </div>
                      <div class="form-group col-md-12">
                          <label for="inputKonten">Gambar (maksimal 4)</label>
                          <div class="well" id="image-selector-twitter" style="overflow-y: auto; height: 40vh;">
                              <select name="twitter_images[]" id="twitter-image-select" class="image-picker masonry show-html" data-limit="4" multiple="multiple">

                              </select>
                          </div>
                      </div>
                  </div>

                  <div class="modal-footer">
                      <div class="col-md-12 pull-right" style="display: inline-block;">
                          <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-info" style="background-color: #0084b4; border-color: #0084b4"><i class="fa fa-twitter"></i> Tweet</button>
                      </div>
                  </div>
                  {!! Form::close() !!}

              </div>
          </div>

      </div>
      @include('mceImageUpload::upload_form')
@endsection


@section('page-style')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.8/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.8/sweetalert2.min.css">

<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<!-- DataTables -->
<link rel="stylesheet" href="{{ url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ url('css/image-picker.css') }}">
@endsection

@section('page-script')
<!-- DataTables -->
<script src="{{ url('js/image-picker.min.js') }}"></script>
<script src="{{ url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ url('assets/dist/js/tinymce/tinymce.min.js') }}"></script>
<script src="{{ url('js/jquery.masonry.min.js') }}"></script>

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
<!-- page script -->
<script>
    jQuery(function($){
        $('a.share-modal-facebook').click(function(ev){
            ev.preventDefault();
            var uid = $(this).data('id');
            $('#modal-7').modal('show', {backdrop: 'static'});
            $.get('{{ url('api/v1/news') }}/' + uid, function(html){

                $('#modal-7 .id-berita').attr('value', uid);

                var tmp = html.title + html.content;
                tmp += '<img src="' + '{{ url('storage') }}/' + html.filename + '" />';
                for (var i = 0; i < html.imgs.length; i++) {
                    $(html.imgs[i] + '<br>').appendTo("#image-list");
                    tmp += html.imgs[i] + '<br>';
                }
                tinyMCE.activeEditor.setContent(tmp);
            });
        });
        $('a.share-modal-twitter').click(function(ev){
            ev.preventDefault();
            var uid = $(this).data('id');
            $('#modal-8').modal('show', {backdrop: 'static'});
            $.get('{{ url('api/v1/news') }}/' + uid, function(html) {
                $('#uid-berita').attr('value', uid);
                var content = html.title + ' {{ url('id/berita') }}/' + html.slug;

                var maxLength = 160;
                $('#rchars').text(maxLength - content.length);
                $('#twitter-content').keyup(function() {
                    var textlen = maxLength - $(this).val().length;
                    $('#rchars').text(textlen);
                });

                $('#twitter-content').val(content);

                // <option data-img-src="http://placekitten.com/280/300" value="1">Cute Kitten 1</option>
                var imgListTwitter = [];
                imgListTwitter.push('{{ url('storage') }}/' + html.filename);
                for (var i = 0; i < html.imgs_url.length; i++) {
                    console.log(html.imgs_url[i]);
                    imgListTwitter.push(html.imgs_url[i]);
                }

                // loop through item
                $.each(imgListTwitter, function (i, item) {
                    $('#twitter-image-select').append('<option value="'+i+'" data-img-src="'+item+'">'+'Option '+i+'</option>');
                });

                // Initialize the object
                $("select#twitter-image-select").imagepicker();

                var container = jQuery("select.image-picker.masonry").next("ul.thumbnails");
                container.imagesLoaded(function(){
                    container.masonry({
                        itemSelector: "li",
                    });
                });
            });
        });
        $('#modal-7').on('hidden.bs.modal', function () {
            console.log('closed');
        });
        $('#modal-8').on('hidden.bs.modal', function () {
            console.log('closed');
            $('#twitter-image-select').html('');
        });
    });
  $(function () {
    $('#example1').DataTable();
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
  function deleteConfirmation(id) {
    swal({
      title: 'Apakah anda yakin?',
      text: 'Anda tidak akan dapat mengembalikan berita yang sudah dihapus!',
      type: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Ya, hapus!',
      cancelButtonText: 'Tidak, batalkan'
    }).then(function() {
      swal(
        'Terhapus!',
        'Berita yang anda pilih berhasil terhapus. Reload otomatis dalam 2 detik..',
        'success'
      )
      setTimeout(function() {
        document.getElementById('delete_form_' + id).submit();
      }, 2000); //2 second delay (2000 milliseconds = 2 seconds)
      
    }, function(dismiss) {
      // dismiss can be 'overlay', 'cancel', 'close', 'esc', 'timer'
      if (dismiss === 'cancel') {
        swal(
          'Dibatalkan',
          'Berita yang anda pilih aman di database :)',
          'error'
        )
      }
    })
  }
</script>
</head>
@endsection