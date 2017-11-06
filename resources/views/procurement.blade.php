@extends('layout.app-with-footer')

@section('title','Procurement | IPC Car Terminal')

@section('content')
    <!--HERO-->
    <section id="heroTitle">
        <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
            <div class="overlay"></div>
            <section class="container-fluid pd-30">
                <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">e-Procurement</h2>
                <h4 class="alignCenter wh mg-t-20">PT. Indonesia Kendaraan Terminal</h4>
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
                        <h3 class="mg-b-30 roboBold">e-Procurement</h3>
                        <h4>Sedang menunggu penyelesaian sistem e-Procurement</h4>
                        <!-- Display the countdown timer in an element -->
                        <h4>Sistem akan selesai pada <span id="demo"></span> lagi..</h4>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Dec 15, 2017 00:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now an the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("demo").innerHTML = days + " hari, " + hours + " jam, "
                + minutes + " menit, " + seconds + " detik";

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
    <!---->
@endsection