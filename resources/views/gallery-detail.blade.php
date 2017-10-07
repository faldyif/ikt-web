@extends('layout.app')

@php
$album->view_count++;
$album->save();
@endphp

@section('title', $album->title . ' | IPC Car Terminal')

@section('content')
    <!--HERO-->
    <section id="heroTitle">
        <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
            <div class="overlay"></div>
            <section class="container-fluid pd-30">
                <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">{{ $album->title }}</h2>
                <p class="alignCenter wh mg-t-20"><span>20 June 2017</span> / <span>{{ $album->view_count }} viewers</span></p>
            </section>
        </div>
    </section>
    <!--/HERO-->
    <!--GALLERY-->
    <section id="gallery-list">
        <div class="container-fluid wow fadeInUpBig pd-30">
            <!-- masonry -->
            <div class="grid">
                <div class="grid-sizer"></div>
                @foreach($albumPhotos as $key)
                <div class="grid-item">
                    <figure>
                        <a href="{{ url('storage/' . $key->filename) }}" data-rel="lightcase:galleryCollection"
                           title="{{ $album->title }}">
                            <img src="{{ url('storage/' . $key->filename) }}">
                        </a>
                    </figure>
                </div>
                @endforeach
            </div>
            <!-- /masonry -->
            <section class="row mg-bt-30">
                <div class="alignCenter mg-t-20">
                    {!! $album->description !!}
                </div>
            </section>
            <hr>
            <section class="row">
                <div class="col-md-8 col-md-offset-2">
                    <section class="mg-t-30">
                        @if (count($errors) > 0)
                            <div class="callout callout-warning">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div id="showToggle-r" class="alignCenter mg-t-20">
                            <p class="btn btn-gray-full wd-100"><span>Leave a comment</span></p>
                        </div>
                        <div id="thisToggle-r">
                            {!! Form::open(array('route' => 'album-comment.post', 'enctype' => 'multipart/form-data')) !!}
                            <input type="hidden" name="album_id" value="{{ $album->id }}">
                            <div class="form-group">
                                <textarea name="comment" class="form-control" rows="5" id="" placeholder="Your comment ..."></textarea>
                            </div>
                            <div class="form-group">
                                <input name="name" type="text" class="form-control" id="" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input name="email" type="text" class="form-control" id="" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-blue-full fullWidth">Sent</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </section>
                    <section class="mg-bt-30">
                        <hr class="hrSpec hrSpecOrange">
                        <h4 class="roboBold fullWidth">Comments</h4>
                        @foreach($albumComments as $key)
                            <section class="row pd-t-10">
                                <figure class="col-md-1 col-md-1 col-sm-1 bg-img mg-t-10">
                                    <img src="{{ url('img/bg-square.png') }}" alt="user" style="background-image: url('{{ url('img/port02.jpg') }}');" class="rounded">
                                </figure>
                                <div class="col-md-9 col-sm-10 col-sm-10">
                                    <h5 class="big roboBold">{{ $key->name }}</h5>
                                    <p class="text-muted">{{ $key->created_at }}</p>
                                    <p>{{ $key->comment }}</p>
                                </div>
                                <div class=" alignRight col-md-2 col-sm-1 col-xs-1 mg-t-10">
                                    <a href="#" class="roboBold big"><i class="fa fa-reply mg-r-10"></i> Reply</a>
                                </div>
                            </section>
                            <hr>
                        @endforeach
                    </section>
                </div>
            </section>
        </div>
    </section>
    <!--/GALLERY-->
    <!--footer-->
    <!-- <div class="hiddenSec"></div> -->
    <footer class="footer-1">
        <section class="row">
            <div class="col-md-3 col-sm-3">
                <figure class="logoFooter">
                    <img src="{{ url('img/ikt-logo.png') }}">
                </figure>
                <p class="small">Vix eu etiam mediocrem. Qui debet essent omnium ut. Ne qui recusabo temporibus, in eum
                    singulis posidonium. Nec reque saepe ea, esse veniam definitionem est ei.</p>
            </div>
            <div class="col-md-2 col-md-offset-4 col-sm-3 col-sm-offset-3 mg-t-30">
                <h5 class="roboBold mg-b-30">Useful Links</h5>
                <ul class="noPad">
                    <li><a href="#">Tentang</a></li>
                    <li><a href="#">Helpdesk</a></li>
                    <li><a href="#">Storages</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3 mg-t-30">
                <h5 class="roboBold mg-b-30">Locate Us</h5>
                <p class="small">JL Sindang Laut, Cilincing Jakarta Utara, 14110</p>
                <p class="small">+62 21 4393 2251<br>info@indonesiacarterminal.co.id</p>
            </div>
        </section>
    </footer>
    <!--/footer-->
@endsection

@section('bottom')
    <script src="{{ url('js/masonry.js') }}"></script>
    <script src="{{ url('js/imagesloaded.js') }}"></script>
    <script src="{{ url('js/custom.gallery.js') }}"></script>
@endsection
