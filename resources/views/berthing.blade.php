@extends('layout.app-with-footer')

@section('title', 'Berthing Plan | IPC Car Terminal')

@section('content')
    <!--HERO-->
    <section id="heroTitle">
        <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
            <div class="overlay"></div>
            <section class="container-fluid pd-30">
                <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Berthing Plan</h2>
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
                                    <a data-toggle="pill" href="#international">
                                        <div class="be-flex">
                                            <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>International</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="">
                                    <a data-toggle="pill" href="#domestic">
                                        <div class="be-flex">
                                            <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Domestic</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content">
                                <div id="international" class="tab-pane fade in active">
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
@endsection