@extends('layout.app-with-footer')

@section('title','IPC')

@section('content')
    <!--HERO-->
    <section id="heroTitle">
        <div class="heroTitle" style="background-image: url('./img/2.jpg');">
            <div class="overlay"></div>
            <section class="container-fluid pd-30">
                <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Title goes here</h2>
                <h4 class="alignCenter wh mg-t-20">PT Indonesia Kendaraan Terminal</h4>
            </section>
        </div>
    </section>
    <!--/HERO-->
    <!-- -->
    <section>
        <div class="container-fluid wow fadeInUpBig">
          <section class="row pd-bt-30 mg-bt-20">
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
              <section class="row be-block-768">
                <div class="col-md-3">
                  <ul class="nav nav-pills nav-stacked">
                    <li class="active">
                      <a data-toggle="pill" href="#home">
                        <div class="be-flex">
                          <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Home</span>
                        </div>
                      </a>
                    </li>
                    <li class="">
                      <a data-toggle="pill" href="#menu1">
                        <div class="be-flex">
                          <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Lorem ipsum dolor sit amet</span>
                        </div>
                       </a>
                     </li>
                    <li class="">
                      <a data-toggle="pill" href="#menu2">
                        <div class="be-flex">
                         <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Menu 2</span>
                        </div>
                       </a>
                     </li>
                    <li class="">
                      <a data-toggle="pill" href="#menu3">
                        <div class="be-flex">
                          <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Kesehatan Sosial dan Lingkungan</span>
                        </div>

                       </a>
                     </li>
                  </ul>
                </div>
                <div class="col-md-9">
                  <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                      <h3 class="roboBlack">Lorem ipsum dolor sit amet</h3>
                      <p>Lorem ipsum dolor sit amet, quas integre sit no, mei velit virtute oportere cu. Aeque adipisci instructior sit ne, equidem imperdiet ullamcorper cum no. Cu est integre democritum, mediocrem democritum ullamcorper no sit. Minim latine vix ut.</p>
                      <p>Vix eu etiam mediocrem. Qui debet essent omnium ut. Ne qui recusabo temporibus, in eum singulis posidonium. Nec reque saepe ea, esse veniam definitionem est ei.</p>
                      <p>Eam no eripuit noluisse intellegebat. Nominavi mnesarchum ad eam, pro dico recteque id, cu dicant audiam mel. At eum mazim dolore aliquid, id sed quas saepe doming. Atomorum assentior ne pri, ut cum fugit facilis electram.</p>
                      <p>Aliquam principes deterruisset cum et, vel an eius equidem. Id quando legimus inermis eum, cibo consul democritum cum te, cu cum suas laudem graeci. Bonorum gloriatur signiferumque an pro. Justo corpora suscipit quo et, vim te noluisse praesent scriptorem, pro ea incorrupte intellegam mediocritatem. Hinc laoreet mediocrem te nec, petentium iracundia ut cum. Fabulas ornatus iudicabit an pri, qui at decore legimus voluptatibus. Ei semper adipisci constituto eum, ad reque dicam nec.</p>
                      <p>Delenit utroque vivendo est ea. Vim autem virtute concludaturque id. Cu ferri oblique has. At sed impedit apeirian ullamcorper, eum cu amet viris. Duo alia causae vituperatoribus ea, salutatus adolescens conclusionemque qui an. Illum euripidis eu vix.</p>
                      <figure class="mg-bt-30">
                        <img src="./img/blog02.jpg">
                        <figcaption class="caption">salutatus adolescens conclusionemque qui an. Illum euripidis eu vix.</figcaption>
                      </figure>
                      <p>Delenit utroque vivendo est ea. Vim autem virtute concludaturque id. Cu ferri oblique has. At sed impedit apeirian ullamcorper, eum cu amet viris. Duo alia causae vituperatoribus ea, salutatus adolescens conclusionemque qui an. Illum euripidis eu vix.</p>
                      <p>Aliquam principes deterruisset cum et, vel an eius equidem. Id quando legimus inermis eum, cibo consul democritum cum te, cu cum suas laudem graeci. Bonorum gloriatur signiferumque an pro. Justo corpora suscipit quo et, vim te noluisse praesent scriptorem, pro ea incorrupte intellegam mediocritatem. Hinc laoreet mediocrem te nec, petentium iracundia ut cum. Fabulas ornatus iudicabit an pri, qui at decore legimus voluptatibus. Ei semper adipisci constituto eum, ad reque dicam nec.</p>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                      <h3 class="roboBlack">Lorem ipsum dolor sit amet</h3>
                      <p>Lorem ipsum dolor sit amet, quas integre sit no, mei velit virtute oportere cu. Aeque adipisci instructior sit ne, equidem imperdiet ullamcorper cum no. Cu est integre democritum, mediocrem democritum ullamcorper no sit. Minim latine vix ut.</p>
                      <p>Vix eu etiam mediocrem. Qui debet essent omnium ut. Ne qui recusabo temporibus, in eum singulis posidonium. Nec reque saepe ea, esse veniam definitionem est ei.</p>
                      <p>Eam no eripuit noluisse intellegebat. Nominavi mnesarchum ad eam, pro dico recteque id, cu dicant audiam mel. At eum mazim dolore aliquid, id sed quas saepe doming. Atomorum assentior ne pri, ut cum fugit facilis electram.</p>
                      <p>Aliquam principes deterruisset cum et, vel an eius equidem. Id quando legimus inermis eum, cibo consul democritum cum te, cu cum suas laudem graeci. Bonorum gloriatur signiferumque an pro. Justo corpora suscipit quo et, vim te noluisse praesent scriptorem, pro ea incorrupte intellegam mediocritatem. Hinc laoreet mediocrem te nec, petentium iracundia ut cum. Fabulas ornatus iudicabit an pri, qui at decore legimus voluptatibus. Ei semper adipisci constituto eum, ad reque dicam nec.</p>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                      <h3 class="roboBlack">3 Lorem ipsum dolor sit amet</h3>
                      <p>Lorem ipsum dolor sit amet, quas integre sit no, mei velit virtute oportere cu. Aeque adipisci instructior sit ne, equidem imperdiet ullamcorper cum no. Cu est integre democritum, mediocrem democritum ullamcorper no sit. Minim latine vix ut.</p>
                      <p>Vix eu etiam mediocrem. Qui debet essent omnium ut. Ne qui recusabo temporibus, in eum singulis posidonium. Nec reque saepe ea, esse veniam definitionem est ei.</p>
                      <p>Eam no eripuit noluisse intellegebat. Nominavi mnesarchum ad eam, pro dico recteque id, cu dicant audiam mel. At eum mazim dolore aliquid, id sed quas saepe doming. Atomorum assentior ne pri, ut cum fugit facilis electram.</p>
                      <p>Aliquam principes deterruisset cum et, vel an eius equidem. Id quando legimus inermis eum, cibo consul democritum cum te, cu cum suas laudem graeci. Bonorum gloriatur signiferumque an pro. Justo corpora suscipit quo et, vim te noluisse praesent scriptorem, pro ea incorrupte intellegam mediocritatem. Hinc laoreet mediocrem te nec, petentium iracundia ut cum. Fabulas ornatus iudicabit an pri, qui at decore legimus voluptatibus. Ei semper adipisci constituto eum, ad reque dicam nec.</p>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                      <h3 class="roboBlack">4 Lorem ipsum dolor sit amet</h3>
                      <p>Lorem ipsum dolor sit amet, quas integre sit no, mei velit virtute oportere cu. Aeque adipisci instructior sit ne, equidem imperdiet ullamcorper cum no. Cu est integre democritum, mediocrem democritum ullamcorper no sit. Minim latine vix ut.</p>
                      <p>Vix eu etiam mediocrem. Qui debet essent omnium ut. Ne qui recusabo temporibus, in eum singulis posidonium. Nec reque saepe ea, esse veniam definitionem est ei.</p>
                      <p>Eam no eripuit noluisse intellegebat. Nominavi mnesarchum ad eam, pro dico recteque id, cu dicant audiam mel. At eum mazim dolore aliquid, id sed quas saepe doming. Atomorum assentior ne pri, ut cum fugit facilis electram.</p>
                      <p>Aliquam principes deterruisset cum et, vel an eius equidem. Id quando legimus inermis eum, cibo consul democritum cum te, cu cum suas laudem graeci. Bonorum gloriatur signiferumque an pro. Justo corpora suscipit quo et, vim te noluisse praesent scriptorem, pro ea incorrupte intellegam mediocritatem. Hinc laoreet mediocrem te nec, petentium iracundia ut cum. Fabulas ornatus iudicabit an pri, qui at decore legimus voluptatibus. Ei semper adipisci constituto eum, ad reque dicam nec.</p>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </section>
        </div>
    </section>
    <!---->
@endsection
