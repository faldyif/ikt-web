@extends('layout.app-with-footer')

@section('title','Press Release | IPC Car Terminal')

@section('content')
    <!--HERO-->
    <section id="heroTitle">
        <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
            <div class="overlay"></div>
            <section class="container-fluid pd-30">
                <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Press Release</h2>
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
                                @foreach($pressReleases as $key)
                                <li class="{{ ($loop->iteration == 1) ? 'active' : '' }}">
                                    <a data-toggle="pill" href="#menu-{{ $key->id }}">
                                        <div class="be-flex">
                                            <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>{{ $key->title }}</span>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content">
                                @foreach($pressReleases as $key)
                                <div id="menu-{{ $key->id }}" class="tab-pane fade in {{ ($loop->iteration == 1) ? 'active' : '' }}">
                                    <h2 class="roboBlack">{{ $key->title }}</h2>
                                    <h6 class="roboBlack">{{ trans('core.published-on') }} {{ \Carbon\Carbon::parse($key->created_at)->toDayDateTimeString() }}</h6>
                                    {!! $key->content !!}
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </div>
    </section>
    <!---->
@endsection

@section('bottom')
    <script type="text/javascript">
        $(document).ready(function(){
            $('img').not('img[class]').each(function(e){
                $(this).addClass('img-responsive');
            });
        });
    </script>
@endsection