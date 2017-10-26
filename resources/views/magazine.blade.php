@extends('layout.app')

@section('title','Limouzine Magazine | IPC Car Terminal')

@section('content')
    <!--HERO-->
    <section id="heroTitle">
        <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
            <div class="overlay"></div>
            <section class="container-fluid pd-30">
                <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Limouzine Magazine</h2>
                <h4 class="alignCenter wh mg-t-20">IPC Car Terminal's Company Magazine</h4>
            </section>
        </div>
    </section>
    <!--/HERO-->
    <!-- -->
    <section>
        <div class="container-fluid wow fadeInUpBig">
            <section class="row pd-t-20">
                <div class="col-md-10 col-sm-10 col-sm-offset-1 pd-bt-30">
                    <div class="col-md-12">
                        <div class="row book-shelf">
                            <div class="col-xs-4 col-md-2">
                                <img src='http://online.fliphtml5.com/tlahn/uarx/files/shot.jpg' data-rel='fh5-light-box-demo' data-href='http://online.fliphtml5.com/tlahn/uarx/' data-width='700' data-height='400' data-title='Majalah Limouzine Edisi 1' class="img-responsive book">
                                <p class="text-center text-caption">Edisi 1</p>
                            </div>
                            <div class="col-xs-4 col-md-2">
                                <img src='http://online.fliphtml5.com/tlahn/dink/files/shot.jpg' data-rel='fh5-light-box-demo' data-href='http://online.fliphtml5.com/tlahn/dink/' data-width='700' data-height='400' data-title='Majalah Limouzine Edisi 2' class="img-responsive book">
                                <p class="text-center text-caption">Edisi 2</p>
                            </div>
                            <div class="col-xs-4 col-md-2">
                                <img src='http://online.fliphtml5.com/tlahn/tdeu/files/shot.jpg' data-rel='fh5-light-box-demo' data-href='http://online.fliphtml5.com/tlahn/tdeu/' data-width='700' data-height='400' data-title='Majalah Limouzine Edisi 3' class="img-responsive book">
                                <p class="text-center text-caption">Edisi 3</p>
                            </div>
                            <div class="col-xs-12 shelf hidden-md hidden-lg"></div>
                            <div class="col-xs-4 col-md-2">
                                <img src='http://online.fliphtml5.com/tlahn/hauh/files/shot.jpg' data-rel='fh5-light-box-demo' data-href='http://online.fliphtml5.com/tlahn/hauh/' data-width='700' data-height='400' data-title='Majalah Limouzine Edisi Ulang Tahun' class="img-responsive book">
                                <p class="text-center text-caption">Edisi Ulang Tahun</p>
                            </div>
                            <div class="col-xs-4 col-md-2">
                                <img src='http://online.fliphtml5.com/tlahn/wtlr/files/shot.jpg' data-rel='fh5-light-box-demo' data-href='http://online.fliphtml5.com/tlahn/wtlr/' data-width='700' data-height='400' data-title='Majalah Limouzine Edisi 4' class="img-responsive book">
                                <p class="text-center text-caption">Edisi 5</p>
                            </div>
                            <div class="col-xs-4 col-md-2">
                                <img src='http://online.fliphtml5.com/tlahn/sehd/files/shot.jpg' data-rel='fh5-light-box-demo' data-href='http://online.fliphtml5.com/tlahn/sehd/' data-width='700' data-height='400' data-title='Majalah Limouzine Edisi 5' class="img-responsive book">
                                <p class="text-center text-caption">Edisi 6</p>
                            </div>
                            <div class="col-xs-12 shelf"></div>
                            <div class="col-xs-4 col-md-2">
                                <img src='http://online.fliphtml5.com/tlahn/nugt/files/shot.jpg' data-rel='fh5-light-box-demo' data-href='http://online.fliphtml5.com/tlahn/nugt/' data-width='700' data-height='400' data-title='Majalah Limouzine Edisi 6' class="img-responsive book">
                                <p class="text-center text-caption">Edisi 7</p>
                            </div>
                            <div class="col-xs-12 shelf"></div>
                        </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!---->
    <!--footer-->
    <!-- <div class="hiddenSec"></div> -->
    <footer class="footer-1">
        <section class="row">
            <div class="col-md-3 col-sm-3">
                <figure class="logoFooter">
                    <img src="{{ url('img/ikt-logo.png') }}">
                </figure>
                <p class="small">Vix eu etiam mediocrem. Qui debet essent omnium ut. Ne qui recusabo temporibus, in eum singulis posidonium. Nec reque saepe ea, esse veniam definitionem est ei.</p>
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

@section('head')
    <script src='//static.fliphtml5.com/web/js/plugin/LightBox/js/fliphtml5-light-box-api-min.js'></script>
@endsection