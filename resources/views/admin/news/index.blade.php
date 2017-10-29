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
                      <a href="#" data-id="{{ $key->id }}" class="btn btn-default btn-xs share-modal"><i class="fa fa-share"></i> Share</a>
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
        <div class="modal-dialog">
          <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Publikasikan Berita di Media Sosial</h4>
            </div>

            <div class="modal-body">
              <img src="" class="img-responsive gambar-berita"><br>
              <div id="image-list">
              </div>
              <br>
              <p class="judul-berita">Judul Berita</p>
              <p class="konten-berita">Konten berita</p>
              <br><br><p>Salam CINTA</p><p>Salam Merah Putih</p><p>Bangga Berkarya Bangga Indonesia</p><br><p>IPC Car Terminal</p><p>We Will Shine With You</p>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
              {!! Form::open(array('route' => 'twitter.news.post', 'enctype' => 'multipart/form-data')) !!}
              <input name="id" class="id-berita" type="hidden" value="">
              <button type="submit" class="btn btn-info" style="background-color: #00aced; border-color: #00aced"><i class="fa fa-twitter"></i> Tweet</button>
              {!! Form::close() !!}
              {!! Form::open(array('route' => 'facebook.news.post', 'enctype' => 'multipart/form-data')) !!}
              <input name="id" class="id-berita" type="hidden" value="">
              <button type="submit" class="btn btn-info" style="background-color: #3b5998; border-color: #3b5998"><i class="fa fa-facebook-official"></i> Publish</button>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
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
<!-- DataTables -->
<script src="{{ url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- page script -->
<script>
    jQuery(function($){
        $('a.share-modal').click(function(ev){
            ev.preventDefault();
            var uid = $(this).data('id');
            $('#modal-7').modal('show', {backdrop: 'static'});
            $.get('{{ url('api/v1/news') }}/' + uid, function(html){
                $('#modal-7 .gambar-berita').attr('src', '{{ url('storage') }}/' + html.filename);
                $('#modal-7 .judul-berita').html(html.title);
                $('#modal-7 .konten-berita').html(html.content);
                $('#modal-7 .id-berita').attr('value', uid);
                for (var i = 0; i < html.imgs.length; i++) {
                    $(html.imgs[i] + '<br>').appendTo("#image-list");
                }
            });
        });
        $('#modal-7').on('hidden.bs.modal', function () {
            console.log('closed');
            $('#image-list').html('');
        })
    });
  $(function () {
    $('#example1').DataTable()
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
@endsection