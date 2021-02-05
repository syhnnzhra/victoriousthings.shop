
@extends('publik/layout/layout')

    @section('title', 'My Profile')


    @section('container')
    <section class="fh5co-books">
        {{-- <div class="site-container">
            <h2 class="universal-h2 universal-h2-bckg mt-5">My Profile</h2>
            <div class="row"> --}}
                {{-- <div class="col-md-12 mb-3">
                    <div class="books-brand-button" >
                        <span class="mb-5"><h4>Data Belum di lengkapi Silahkan Diisi Terlebih dahulu!</h4></span>
                    <a href="/home_publik" class="brand-button"><i> Lengkapi </i></a>
                    </div> --}}
                    {{-- <div class="card-body">
                        <div class="card">
                            <div class="card-body">
                                <a href="/home_publik" class="brand-button"> Lengkapi </a>
                                <a href="/home_publik" class="brand-button"> Lengkapi </a>
                                <a href="/home_publik" class="brand-button"> Lengkapi </a>
                                <a href="/home_publik" class="brand-button"> Lengkapi </a>

                            </div>
                        </div>
            </div>
        </div> --}}

        <div id="sidebar-collapse" class="col-sm-4 col-lg-2 sidebar">
            <div class="profile-sidebar">
                <div class="profile-userpic">
                    <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
                </div>
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">Username</div>
                    <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="divider"></div>
            <form role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
            <ul class="nav menu">
                <li class="active"><a href=""><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
                <li><a href="widgets.html"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
                <li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
                <li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
                <li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
            </ul>
        </div><!--/.sidebar-->
        {{-- <div class="card">
            <div class="card-body">
                hsausau
            </div>
        </div> --}}
        <div class="col-sm-12">
            <p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
        </div>
        
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/chart.min.js"></script>
        <script src="js/chart-data.js"></script>
        <script src="js/easypiechart.js"></script>
        <script src="js/easypiechart-data.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/custom.js"></script>
        <script>
            window.onload = function () {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
        responsive: true,
        scaleLineColor: "rgba(0,0,0,.2)",
        scaleGridLineColor: "rgba(0,0,0,.05)",
        scaleFontColor: "#c5c7cc"
        });
    };
        </script>
    @endsection