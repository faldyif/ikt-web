@extends('layouts.admin.app')

@section('title', 'List Berthing Plan')

@section('breadcrumb')
    <li><a href="{{ route('berthing.index') }}"><i class="fa fa-calendar"></i> Berthing Plan</a></li>
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
                <a href="{{ route('berthing.create') }}" class="btn btn-block btn-primary">
                  Buat Baru
                </a>
              </div>
              <div class="col-md-2 pull-right">
                <a href="{{ route('upload.create') }}" class="btn btn-block btn-primary">
                  Upload XLS Bulanan
                </a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Tipe</th>
                  <th>Vessel</th>
                  <th>Agent</th>
                  <th>VOY</th>
                  <th>ETA</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($berthing as $key)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $key->type }}</td>
                  <td>{{ $key->vessel }}</td>
                  <td>{{ $key->agent }}</td>
                  <td>{{ $key->voy }}</td>
                  <td>{{ \Carbon\Carbon::parse($key->eta )->toDateString() }}</td>
                  <td>
                    <div class="btn-group">
                      <a href="{{ route('berthing.edit', $key->id) }}" class="btn btn-default btn-xs"><i class="fa fa-edit"></i> Edit</a>
                      <a href="#" onclick="deleteConfirmation({{ $key->id }})" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
                      {!! Form::open(['route' => ['berthing.destroy',$key->id], 'method' => 'delete', 'id' => 'delete_form_'.$key->id]) !!}
                      {!! Form::close() !!}
                    </div>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Nomor</th>
                  <th>Tipe</th>
                  <th>Vessel</th>
                  <th>Agent</th>
                  <th>VOY</th>
                  <th>ETA</th>
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
      text: 'Anda tidak akan dapat mengembalikan Berthing Plan yang sudah dihapus!',
      type: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Ya, hapus!',
      cancelButtonText: 'Tidak, batalkan'
    }).then(function() {
      swal(
        'Terhapus!',
        'Berthing Plan yang anda pilih berhasil terhapus. Reload otomatis dalam 2 detik..',
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
          'Berthing Plan yang anda pilih aman di database :)',
          'error'
        )
      }
    })
  }
</script>
@endsection