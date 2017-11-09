@extends('layout.app-with-footer')

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
                                <div id="ship-call-international" class="row mg-b-30">
                                    <div class="col-md-6">
                                        <canvas id="line-chart-international-ship-call-unit" width="800" height="450"></canvas>
                                    </div>
                                    <div class="col-md-6">
                                        <canvas id="line-chart-international-ship-call-gt" width="800" height="450"></canvas>
                                    </div>
                                </div>
                                <hr class="hrSpec hrSpecOrange">
                                <h4 class="card-title roboBold">Throughput International</h4>
                                <div id="throughput-international" class="row">
                                    <div class="col-md-12">
                                        <canvas id="line-chart-throughput-international-car" width="800" height="450"></canvas>
                                    </div>
                                    <div class="col-md-12 mg-bt-20">
                                        <canvas id="line-chart-throughput-international" width="800" height="450"></canvas>
                                    </div>
                                </div>
                                <hr class="hrSpec hrSpecOrange">
                                <h4 class="card-title roboBold">Ship Call Domestic</h4>
                                <div id="ship-call-domestic" class="row mg-b-30">
                                    <div class="col-md-6">
                                        <canvas id="line-chart-domestic-ship-call-unit" width="800" height="450"></canvas>
                                    </div>
                                    <div class="col-md-6">
                                        <canvas id="line-chart-domestic-ship-call-gt" width="800" height="450"></canvas>
                                    </div>
                                </div>
                                <hr class="hrSpec hrSpecOrange">
                                <h4 class="card-title roboBold">Throughput Domestic</h4>
                                <div id="throughput-domestic" class="row">
                                    <div class="col-md-12">
                                        <canvas id="line-chart-throughput-domestic-car" width="800" height="450"></canvas>
                                    </div>
                                    <div class="col-md-12 mg-bt-20">
                                        <canvas id="line-chart-throughput-domestic" width="800" height="450"></canvas>
                                    </div>
                                </div>
                                <hr class="hrSpec hrSpecOrange">
                                <h4 class="card-title roboBold">Market Share Cargo Import</h4>
                                <div id="market-share-cargo-import" class="row mg-b-20">
                                    <div class="col-md-6 mg-b-10">
                                        <canvas id="pie-chart-market-share-cargo-import-2014" width="800" height="600"></canvas>
                                    </div>
                                    <div class="col-md-6 mg-b-10">
                                        <canvas id="pie-chart-market-share-cargo-import-2015" width="800" height="600"></canvas>
                                    </div>
                                    <div class="col-md-6 mg-b-10">
                                        <canvas id="pie-chart-market-share-cargo-import-2016" width="800" height="600"></canvas>
                                    </div>
                                    <div class="col-md-6 mg-b-10">
                                        <canvas id="pie-chart-market-share-cargo-import-2017" width="800" height="600"></canvas>
                                    </div>
                                </div>
                                <hr class="hrSpec hrSpecOrange">
                                <h4 class="card-title roboBold">Market Share Cargo Export</h4>
                                <div id="market-share-cargo-export" class="row mg-b-10">
                                    <div class="col-md-6 mg-b-10">
                                        <canvas id="pie-chart-market-share-cargo-export-2014" width="800" height="600"></canvas>
                                    </div>
                                    <div class="col-md-6 mg-b-10">
                                        <canvas id="pie-chart-market-share-cargo-export-2015" width="800" height="600"></canvas>
                                    </div>
                                    <div class="col-md-6 mg-b-10">
                                        <canvas id="pie-chart-market-share-cargo-export-2016" width="800" height="600"></canvas>
                                    </div>
                                    <div class="col-md-6 mg-b-10">
                                        <canvas id="pie-chart-market-share-cargo-export-2017" width="800" height="600"></canvas>
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

            var throughput_international_car = new Chart(document.getElementById("line-chart-throughput-international-car"), {
                type: 'line',
                data: {
                    labels: [2008,2009,2010,2011,2012,2013,2014,2015,2016],
                    datasets: [{
                        data: [180104,103263,188138,219800,341409,304519,297380,280394,262625],
                        label: "Car (Unit)",
                        borderColor: "#0ca6ff",
                        fill: false,
                        lineTension: 0
                    }]
                },
                options: {
                }
            });

            var throughput_international = new Chart(document.getElementById("line-chart-throughput-international"), {
                type: 'line',
                data: {
                    labels: [2008,2009,2010,2011,2012,2013,2014,2015,2016],
                    datasets: [{
                        data: [9952,5492,15903,20957,27790,17284,14420,15007,14162],
                        label: "Spare Part (Pkgs)",
                        borderColor: "#ffc30c",
                        fill: false,
                        lineTension: 0
                    },
                    {
                      data: [5226,3023,7907,10795,11071,8375,7243,5360,5481],
                      label: "Alat Berat (Unit)",
                      borderColor: "#a5a5a5",
                      fill: false,
                      lineTension: 0
                    },
                    {
                      data: [2664,1159,4207,5304,6602,2978,2763,3693,4721],
                      label: "Truck & Bus (Unit)",
                      borderColor: "#ed7d31",
                      fill: false,
                      lineTension: 0
                    }]
                },
                options: {
                }
            });

            var domestic_ship_call_gt = new Chart(document.getElementById("line-chart-domestic-ship-call-gt"), {
                type: 'line',
                data: {
                    labels: [2014,2015,2016],
                    datasets: [{
                        data: [545098,1123335,781846],
                        label: "Kapal (GT)",
                        borderColor: "#cd7743",
                        fill: false,
                        lineTension: 0
                    }]
                },
                options: {
                }
            });

            var domestic_ship_call_unit = new Chart(document.getElementById("line-chart-domestic-ship-call-unit"), {
                type: 'line',
                data: {
                    labels: [2014,2015,2016],
                    datasets: [{
                        data: [69,156,86],
                        label: "Kapal (Unit)",
                        borderColor: "#3e95cd",
                        fill: false,
                        lineTension: 0
                    }]
                },
                options: {
                }
            });

            var throughput_domestic_car = new Chart(document.getElementById("line-chart-throughput-domestic-car"), {
                type: 'line',
                data: {
                    labels: [2014,2015,2016],
                    datasets: [{
                        data: [29801,58925,33269],
                        label: "Mobil (Unit)",
                        borderColor: "#0ca6ff",
                        fill: false,
                        lineTension: 0
                    }]
                },
                options: {
                }
            });

            var throughput_domestic = new Chart(document.getElementById("line-chart-throughput-domestic"), {
                type: 'line',
                data: {
                    labels: ["Spare Part (Pkgs)","Alat Berat, Truck & Bus (Unit)","Motor (Unit)"],
                    datasets: [{
                        data: [2651,120,11985],
                        label: 2014,
                        borderColor: "#5b9bd5",
                        fill: false,
                        lineTension: 0
                    },
                    {
                      data: [5942,9373,26437],
                      label: 2015,
                      borderColor: "#ed7d31",
                      fill: false,
                      lineTension: 0
                    },
                    {
                      data: [6709,8645,23927],
                      label: 2016,
                      borderColor: "#c7c7c7",
                      fill: false,
                      lineTension: 0
                    }]
                },
                options: {
                }
            });

            // pie chart
            var market_share_cargo_import_2014 = new Chart(document.getElementById("pie-chart-market-share-cargo-import-2014"), {
                type: 'pie',
                data: {
                    labels: ["MITSUBISHI","TOYOTA","FORD","MAZDA","SUZUKI","NISSAN","HONDA","DAIHATSU","OTHER","CHEVROLET"],
                    datasets: [{
                        data: [30,20,13,9,8,7,4,4,3,2],
                        backgroundColor: ["#3498db","#e67e22","#bdc3c7","#ffcd02","#745ec5","#2ecc71","#5e345e","#d35400","#3a6f81","#a38671"]
                    }]
                },
                options: {
                  title: {
                     display: true,
                     text: 'Import 2014'
                  },
                  legend: {
                      display: true,
                      position: 'left'
                  },
                  tooltips: {
                      callbacks: {
                          label: function(tooltipItem, data) {
                              var allData = data.datasets[tooltipItem.datasetIndex].data;
                              var tooltipLabel = data.labels[tooltipItem.index];
                              var tooltipData = allData[tooltipItem.index];
                              var total = 0;
                              for (var i in allData) {
                                  total += allData[i];
                              }
                              var tooltipPercentage = Math.round((tooltipData / total) * 100);
                              return tooltipLabel + ': ' + tooltipPercentage + '%';
                          }
                      }
                  }
              }
            });

            var market_share_cargo_import_2015 = new Chart(document.getElementById("pie-chart-market-share-cargo-import-2015"), {
                type: 'pie',
                data: {
                    labels: ["TOYOTA","MITSUBISHI","MAZDA","NISSAN","OTHER","SUZUKI","FORD","DAIHATSU","HONDA","CHEVROLET"],
                    datasets: [{
                        data: [26,26,11,9,6,6,5,5,4,2],
                        backgroundColor: ["#3498db","#e67e22","#bdc3c7","#ffcd02","#745ec5","#2ecc71","#5e345e","#d35400","#3a6f81","#a38671"]
                    }]
                },
                options: {
                  title: {
                     display: true,
                     text: 'Import 2015'
                  },
                  legend: {
                      display: true,
                      position: 'left'
                  },
                  tooltips: {
                      callbacks: {
                          label: function(tooltipItem, data) {
                              var allData = data.datasets[tooltipItem.datasetIndex].data;
                              var tooltipLabel = data.labels[tooltipItem.index];
                              var tooltipData = allData[tooltipItem.index];
                              var total = 0;
                              for (var i in allData) {
                                  total += allData[i];
                              }
                              var tooltipPercentage = Math.round((tooltipData / total) * 100);
                              return tooltipLabel + ': ' + tooltipPercentage + '%';
                          }
                      }
                  }
              }
            });

            var market_share_cargo_import_2016 = new Chart(document.getElementById("pie-chart-market-share-cargo-import-2016"), {
                type: 'pie',
                data: {
                    labels: ["MITSUBISHI","TOYOTA","MAZDA","OTHER","HONDA","SUZUKI","DAIHATSU","NISSAN","CHEVROLET","FORD"],
                    datasets: [{
                        data: [45,20,7,6,5,5,4,4,3,1],
                        backgroundColor: ["#3498db","#e67e22","#bdc3c7","#ffcd02","#745ec5","#2ecc71","#5e345e","#d35400","#3a6f81","#a38671"]
                    }]
                },
                options: {
                  title: {
                     display: true,
                     text: 'Import 2016'
                  },
                  legend: {
                      display: true,
                      position: 'left'
                  },
                  tooltips: {
                      callbacks: {
                          label: function(tooltipItem, data) {
                              var allData = data.datasets[tooltipItem.datasetIndex].data;
                              var tooltipLabel = data.labels[tooltipItem.index];
                              var tooltipData = allData[tooltipItem.index];
                              var total = 0;
                              for (var i in allData) {
                                  total += allData[i];
                              }
                              var tooltipPercentage = Math.round((tooltipData / total) * 100);
                              return tooltipLabel + ': ' + tooltipPercentage + '%';
                          }
                      }
                  }
              }
            });

            var market_share_cargo_import_2017 = new Chart(document.getElementById("pie-chart-market-share-cargo-import-2017"), {
                type: 'pie',
                data: {
                    labels: ["MITSUBISHI","SUZUKI","TOYOTA","OTHER","HONDA","CHEVROLET","NISSAN","MAZDA","DAIHATSU","FORD"],
                    datasets: [{
                        data: [31,22,20,6,5,5,5,4,2,0],
                        backgroundColor: ["#3498db","#e67e22","#bdc3c7","#ffcd02","#745ec5","#2ecc71","#5e345e","#d35400","#3a6f81","#a38671"]
                    }]
                },
                options: {
                  title: {
                     display: true,
                     text: 'Import sampai dengan Mei 2017'
                  },
                  legend: {
                      display: true,
                      position: 'left'
                  },
                  tooltips: {
                      callbacks: {
                          label: function(tooltipItem, data) {
                              var allData = data.datasets[tooltipItem.datasetIndex].data;
                              var tooltipLabel = data.labels[tooltipItem.index];
                              var tooltipData = allData[tooltipItem.index];
                              var total = 0;
                              for (var i in allData) {
                                  total += allData[i];
                              }
                              var tooltipPercentage = Math.round((tooltipData / total) * 100);
                              return tooltipLabel + ': ' + tooltipPercentage + '%';
                          }
                      }
                  }
              }
            });

            var market_share_cargo_export_2014 = new Chart(document.getElementById("pie-chart-market-share-cargo-export-2014"), {
                type: 'pie',
                data: {
                    labels: ["TOYOTA","DAIHATSU","SUZUKI","NISSAN","CHEVROLET","HONDA","OTHER"],
                    datasets: [{
                        data: [72,13,7,6,1,1,0],
                        backgroundColor: ["#3498db","#e67e22","#bdc3c7","#ffcd02","#745ec5","#2ecc71","#5e345e"]
                    }]
                },
                options: {
                  title: {
                     display: true,
                     text: 'Export 2014'
                  },
                  legend: {
                      display: true,
                      position: 'left'
                  },
                  tooltips: {
                      callbacks: {
                          label: function(tooltipItem, data) {
                              var allData = data.datasets[tooltipItem.datasetIndex].data;
                              var tooltipLabel = data.labels[tooltipItem.index];
                              var tooltipData = allData[tooltipItem.index];
                              var total = 0;
                              for (var i in allData) {
                                  total += allData[i];
                              }
                              var tooltipPercentage = Math.round((tooltipData / total) * 100);
                              return tooltipLabel + ': ' + tooltipPercentage + '%';
                          }
                      }
                  }
              }
            });

            var market_share_cargo_export_2015 = new Chart(document.getElementById("pie-chart-market-share-cargo-export-2015"), {
                type: 'pie',
                data: {
                    labels: ["TOYOTA","DAIHATSU","SUZUKI","NISSAN","CHEVROLET","HONDA"],
                    datasets: [{
                        data: [80,10,8,1,1,0],
                        backgroundColor: ["#3498db","#e67e22","#bdc3c7","#ffcd02","#745ec5","#2ecc71"]
                    }]
                },
                options: {
                  title: {
                     display: true,
                     text: 'Export 2015'
                  },
                  legend: {
                      display: true,
                      position: 'left'
                  },
                  tooltips: {
                      callbacks: {
                          label: function(tooltipItem, data) {
                              var allData = data.datasets[tooltipItem.datasetIndex].data;
                              var tooltipLabel = data.labels[tooltipItem.index];
                              var tooltipData = allData[tooltipItem.index];
                              var total = 0;
                              for (var i in allData) {
                                  total += allData[i];
                              }
                              var tooltipPercentage = Math.round((tooltipData / total) * 100);
                              return tooltipLabel + ': ' + tooltipPercentage + '%';
                          }
                      }
                  }
              }
            });

            var market_share_cargo_export_2016 = new Chart(document.getElementById("pie-chart-market-share-cargo-export-2016"), {
                type: 'pie',
                data: {
                    labels: ["TOYOTA","SUZUKI","DAIHATSU","NISSAN","OTHER"],
                    datasets: [{
                        data: [80,12,8,0,0],
                        backgroundColor: ["#3498db","#e67e22","#bdc3c7","#ffcd02","#745ec5"]
                    }]
                },
                options: {
                  title: {
                     display: true,
                     text: 'Export 2016'
                  },
                  legend: {
                      display: true,
                      position: 'left'
                  },
                  tooltips: {
                      callbacks: {
                          label: function(tooltipItem, data) {
                              var allData = data.datasets[tooltipItem.datasetIndex].data;
                              var tooltipLabel = data.labels[tooltipItem.index];
                              var tooltipData = allData[tooltipItem.index];
                              var total = 0;
                              for (var i in allData) {
                                  total += allData[i];
                              }
                              var tooltipPercentage = Math.round((tooltipData / total) * 100);
                              return tooltipLabel + ': ' + tooltipPercentage + '%';
                          }
                      }
                  }
              }
            });

            var market_share_cargo_export_2017 = new Chart(document.getElementById("pie-chart-market-share-cargo-export-2017"), {
                type: 'pie',
                data: {
                    labels: ["TOYOTA","SUZUKI","DAIHATSU","NISSAN","OTHER"],
                    datasets: [{
                        data: [80,13,7,0,0],
                        backgroundColor: ["#3498db","#e67e22","#bdc3c7","#ffcd02","#745ec5"]
                    }]
                },
                options: {
                  title: {
                     display: true,
                     text: 'Export sampai dengan Mei 2017'
                  },
                  legend: {
                      display: true,
                      position: 'left'
                  },
                  tooltips: {
                      callbacks: {
                          label: function(tooltipItem, data) {
                              var allData = data.datasets[tooltipItem.datasetIndex].data;
                              var tooltipLabel = data.labels[tooltipItem.index];
                              var tooltipData = allData[tooltipItem.index];
                              var total = 0;
                              for (var i in allData) {
                                  total += allData[i];
                              }
                              var tooltipPercentage = Math.round((tooltipData / total) * 100);
                              return tooltipLabel + ': ' + tooltipPercentage + '%';
                          }
                      }
                  }
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
