@extends('layouts.admin.app')

@section('title', 'Edit Caption')

@section('breadcrumb')
    <li><a href="{{ route('album.index') }}"><i class="fa fa-photo"></i> Album</a></li>
    <li><a href="{{ url('id/galeri') }}/{{ $album->slug }}" target="_blank">{{ \App\Album::find($album->id)->title }}</a></li>
    <li><a href="{{ route('photo.index', $album->id) }}">List Foto Album</a></li>
    <li><a href="#">Edit Caption</a></li>
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
                    <div class="col-md-12">
                        <img class="img-responsive" src="{{ url('storage/' . $photo->filename) }}" style="margin: 0 auto">
                    </div>
                    {!! Form::model($photo, array('route' => array('photo.update', $album->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data')) !!}
                    <div class="form-group col-md-12">
                        <label>Caption Foto (Bahasa Indonesia)</label>
                        {{ Form::text('caption', null, array('class' => 'form-control', 'placeholder' => 'Masukkan caption album')) }}
                    </div>
                    <div class="form-group col-md-12">
                        <label>Caption Foto (English)</label>
                        {{ Form::text('caption_en', null, array('class' => 'form-control', 'placeholder' => 'Masukkan caption album (english)')) }}
                    </div>
                    <div class="form-group col-md-12">
                        <label>Caption Foto (日本語)</label>
                        {{ Form::text('caption_jp', null, array('class' => 'form-control', 'placeholder' => 'Masukkan caption album (japanese)')) }}
                    </div>
                    <div class="col-md-2 pull-right">
                        <button type="submit" class="btn btn-block btn-primary">
                            Simpan
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
@endsection