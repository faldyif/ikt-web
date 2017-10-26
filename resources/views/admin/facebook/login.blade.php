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

          <div class="box">
            <div class="box-body">
              <div class="col-md-8">
                <label>Koneksi Akun Facebook</label>
                <br>
                @if(Auth::user()->fb_token_timeout != NULL && Auth::user()->fb_token_timeout > \Carbon\Carbon::now())
                <p><span class="text-success">Terhubung sebagai: {{ $name }}</span> (<a href="{{ url('admin/facebook/logout') }}">log out</a>)</p>
                <p>Koneksi facebook akan expired pada: {{ Auth::user()->fb_token_timeout }}</p>
                @else
                <a href="{{ $login_url }}">Masuk ke Facebook</a>
                @endif
              </div>
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
              <h4 class="modal-title">Dynamic Content</h4>
            </div>

            <div class="modal-body">
              <img src="" class="img-responsive gambar-berita">
              <br>
              <p class="judul-berita">Judul Berita</p>
              <p class="konten-berita">Konten berita</p>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-info">Post to Facebook</button>
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
            });
        });
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