@extends('layouts.admin.app')

@section('title', 'Edit Testimonial')

@section('breadcrumb')
    <li><a href="{{ route('testimonial.index') }}"><i class="fa fa-newspaper-o"></i> Testimonial</a></li>
    <li><a href="{{ route('testimonial.edit', $testimonial->id) }}">Edit Testimonial</a></li>
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
            {!! Form::model($testimonial, array('route' => array('testimonial.update', $testimonial->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data')) !!}
              @include('admin.testimonial.fields')
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