@extends('layout.app')

@section('title','Statistic & Data | IPC Car Terminal')

@section('content')
<!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
        <div class="overlay"></div>
        <section class="container-fluid pd-30">
          <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Statistik & Data</h2>
          <h4 class="alignCenter wh mg-t-20">PT. Indonesia Kendaraan Terminal</h4>
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
                                <a id="statistic-tab-a" data-toggle="pill" href="#statistic">
                                    <div class="be-flex">
                                        <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Statistik</span>
                                    </div>
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="pill" href="#international">
                                    <div class="be-flex">
                                        <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Berthing International</span>
                                    </div>
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="pill" href="#domestic">
                                    <div class="be-flex">
                                        <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Berthing Domestic</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div id="statistic" class="tab-pane fade in active">
                                <hr class="hrSpec hrSpecOrange">
                                <h4 class="card-title roboBold">International Ship Call</h4>
                                <div id="ship-call-international" class="row">
                                    <div class="col-md-6">
                                        <canvas id="line-chart-international-ship-call-unit" width="800" height="450"></canvas>
                                    </div>
                                    <div class="col-md-6">
                                        <canvas id="line-chart-international-ship-call-gt" width="800" height="450"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div id="international" class="tab-pane fade">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>ETA</th>
                                        <th>Vessel</th>
                                        <th>Agent</th>
                                        <th>VOY</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        @foreach($international as $key)
                                            <td>{{ \Carbon\Carbon::parse($key->eta)->toFormattedDateString() }}</td>
                                            <td>{{ $key->vessel }}</td>
                                            <td>{{ $key->agent }}</td>
                                            <td>{{ $key->voy }}</td>
                                        @endforeach
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="domestic" class="tab-pane fade">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>ETA</th>
                                        <th>Vessel</th>
                                        <th>Agent</th>
                                        <th>VOY</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        @foreach($domestic as $key)
                                            <td>{{ \Carbon\Carbon::parse($key->eta)->toFormattedDateString() }}</td>
                                            <td>{{ $key->vessel }}</td>
                                            <td>{{ $key->agent }}</td>
                                            <td>{{ $key->voy }}</td>
                                        @endforeach
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
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


@section('bottom')
    <script src="{{ url('js/chart.min.js') }}"></script>
    <script type="text/javascript">
        function reInitializeChart() {
            var international_ship_call_unit = new Chart(document.getElementById("line-chart-international-ship-call-unit"), {
                type: 'line',
                data: {
                    labels: [2008,2009,2010,2011,2012,2013,2014,2015,2016],
                    datasets: [{
                        data: [250,208,271,268,282,235,237,221,246],
                        label: "Kapal (Unit)",
                        borderColor: "#3e95cd",
                        fill: false,
                        lineTension: 0
                    }]
                },
                options: {
                }
            });

            var international_ship_call_gt = new Chart(document.getElementById("line-chart-international-ship-call-gt"), {
                type: 'line',
                data: {
                    labels: [2008,2009,2010,2011,2012,2013,2014,2015,2016],
                    datasets: [{
                        data: [4359244,5369493,5804423,7587429,10984763,9168209,9340992,8967622,10528988],
                        label: "Kapal (GT)",
                        borderColor: "#cd7743",
                        fill: false,
                        lineTension: 0
                    }]
                },
                options: {
                }
            });
        }
        $(document).ready(function () {
            // use setTimeout() to execute
            reInitializeChart();
            $('#statistic-tab-a').click(function () {
                reInitializeChart();
            });
        });
    </script>
@endsection
