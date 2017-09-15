@extends('layouts.admin.app')

@section('title', 'Buat Press Release Baru')

@section('breadcrumb')
    <li><a href="{{ route('press-release.index') }}"><i class="fa fa-newspaper-o"></i> Press Release</a></li>
    <li><a href="{{ route('press-release.create') }}">Buat Press Release Baru</a></li>
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
            {!! Form::open(array('route' => 'press-release.store', 'enctype' => 'multipart/form-data')) !!}
              @include('admin.press-release.fields')
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