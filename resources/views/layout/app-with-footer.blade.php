@extends('layout.app')

@section('footer')
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