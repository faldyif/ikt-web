@extends('layouts.admin.app')

@section('title', 'List Gambar Album')

@section('breadcrumb')
  <li><a href="{{ route('album.index') }}"><i class="fa fa-newspaper-o"></i> Album</a></li>
  <li><a href="{{ url('id/galeri') }}/{{ $album->slug }}" target="_blank"> {{ \App\Album::find($album->id)->title }}</a></li>
  <li><a href="{{ route('photo.index', $album->id) }}"> List Foto Album</a></li>
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
              <a href="{{ route('photo.create', $album->id) }}" class="btn btn-block btn-primary">
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
                  <th>File Gambar</th>
                  <th>Caption</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($albumPhotos as $key)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td><a href="{{ url('storage/' . $key->filename) }}" target="_blank"><img height="100vh" src="{{ url('storage/' . $key->filename) }}"></a></td>
                  <td>
                    @if($key->caption != NULL)
                      Bahasa Indonesia: {{ $key->caption }}
                    @else
                      Bahasa Indonesia: -
                    @endif
                    @if($key->caption_en != NULL)
                      <br>
                      English: {{ $key->caption_en }}
                    @endif
                    @if($key->caption_jp != NULL)
                      <br>
                      日本語: {{ $key->caption_jp }}
                    @endif
                  </td>
                  <td>
                    <div class="btn-group">
                      <a href="{{ route('photo.edit', $key->id) }}" class="btn btn-default btn-xs"><i class="fa fa-edit"></i> Edit</a>
                      <a href="#" onclick="deleteConfirmation({{ $key->id }})" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
                      {!! Form::open(['route' => ['photo.destroy',$key->id,$album->id], 'method' => 'delete', 'id' => 'delete_form_'.$key->id]) !!}
                      {!! Form::close() !!}
                    </div>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Nomor</th>
                  <th>File Gambar</th>
                  <th>Caption</th>
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
      text: 'Anda tidak akan dapat mengembalikan Album yang sudah dihapus!',
      type: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Ya, hapus!',
      cancelButtonText: 'Tidak, batalkan'
    }).then(function() {
      swal(
        'Terhapus!',
        'Album yang anda pilih berhasil terhapus. Reload otomatis dalam 2 detik..',
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
          'Album yang anda pilih aman di database :)',
          'error'
        )
      }
    })
  }
</script>
@endsection