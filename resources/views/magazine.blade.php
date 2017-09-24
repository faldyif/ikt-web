@extends('layout.app')

@section('title','IPC')

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
                        <hr class="hrSpec hrSpecOrange">
                        <h3 class="mg-b-30 roboBold">Limouzine Magazine</h3>
                        <img src='http://online.fliphtml5.com/tlahn/xoee/files/shot.jpg' data-rel='fh5-light-box-demo' data-href='http://online.fliphtml5.com/tlahn/xoee/' data-width='700' data-height='400' data-title='Cover Edisi 1'>
                        <img src='http://online.fliphtml5.com/tlahn/ydua/files/shot.jpg' data-rel='fh5-light-box-demo' data-href='http://online.fliphtml5.com/tlahn/ydua/' data-width='700' data-height='400' data-title='Cover Edisi 2'>
                        <img src='http://online.fliphtml5.com/tlahn/ewgo/files/shot.jpg' data-rel='fh5-light-box-demo' data-href='http://online.fliphtml5.com/tlahn/ewgo/' data-width='700' data-height='400' data-title='Cover Edisi 3'>
                        <img src='http://online.fliphtml5.com/tlahn/kwsu/files/shot.jpg' data-rel='fh5-light-box-demo' data-href='http://online.fliphtml5.com/tlahn/kwsu/' data-width='700' data-height='400' data-title='Cover Edisi 4'>
                        <img src='http://online.fliphtml5.com/tlahn/hwjp/files/shot.jpg' data-rel='fh5-light-box-demo' data-href='http://online.fliphtml5.com/tlahn/hwjp/' data-width='700' data-height='400' data-title='Cover Edisi 5'>
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