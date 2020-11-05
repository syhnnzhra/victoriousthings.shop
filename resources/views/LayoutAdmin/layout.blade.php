<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title> @yield('title') </title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--external css-->
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/zabuto_calendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/gritter/css/jquery.gritter.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lineicons/style.css')}}">    
    
    <!-- Custom styles for this template -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style-responsive.css')}}" rel="stylesheet">

    <script src="{{asset('assets/js/chart-master/Chart.js')}}"></script>

    <!-- date picker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9] -->
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .table{
            font-family: Arial;
            font-size: 13px;
        }
    </style>
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>Victorious Things</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu mt-4">
                @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="{{ asset ('assets/img/ui-sam.jpg') }}" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Admin</h5>
              	  	
                  <li class="mt">
                      <a class="nav-link {{ Request::path() === '/' ? 'bg-primary' :''}} " href="/">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>


                  <li class="sub-menu">
                      <a href="javascript:;" >
                      <i class="fa fa-th"></i>
                          <span>Data Barang</span>
                      </a>
                      <ul class="sub">
                            <li><a  class="nav-link {{ Request::path() === 'item' ? 'bg-primary' :''}} " href="/item">
                                <span>Barang</span>
                                </a>
                            </li>
                            <li><a  class="nav-link {{ Request::path() === 'kategori' ? 'bg-primary' :''}} " href="/kategori">
                                <span>Kategori Barang</span>
                                </a>
                            </li>
                            <li><a  class="nav-link {{ Request::path() === 'barang_masuk' ? 'bg-primary' :''}} " href="/barang_masuk">
                                <span>Barang Masuk</span>
                                </a>
                            </li>
                      </ul>
                    </li>
                            <li class="sub-menu">
                                <a class="nav-link {{ Request::path() === 'customer' ? 'bg-primary' :''}} " href="/customer">
                                    <i class="glyphicon glyphicon-user"></i>
                                    <span>Customer</span>
                                </a>
                            </li>
                            <li class="sub-menu">
                                <a class="nav-link {{ Request::path() === 'distributor' ? 'bg-primary' :''}} " href="/distributor">
                                <i class="fa fa-book"></i>
                                    <span>Distributor</span>
                                </a>
                            </li>
                            <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="glyphicon glyphicon-stats"></i>
                                    <span>Transaksi</span>
                                </a>
                                <ul class="sub">
                                    <li><a  class="nav-link {{ Request::path() === 'order' ? 'bg-primary' :''}} " href="/order">
                                          <span>Order</span>
                                      </a>
                                  </li>
                                    <li><a  class="nav-link {{ Request::path() === 'Odetail' ? 'bg-primary' :''}} " href="/Odetail">
                                      <span>Order Detail</span>
                                      </a>
                                  </li>
                                </ul>
                              </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
        
      @yield('container')

      <!--footer start-->
      <footer class="site-footer">
        <div class="text-center">
            2020
        </div>
    </footer>
    <!--footer end-->
</section>

  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{ asset('assets/js/jquery.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-1.8.3.min.js')}}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script class="include" type="text/javascript" src="{{ asset('assets/js/jquery.dcjqaccordion.2.7.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/jquery.sparkline.js') }}"></script>


  <!--common script for all pages-->
  <script src="{{ asset('assets/js/common-scripts.js')}}"></script>
  
  <script type="text/javascript" src="{{ asset('assets/js/gritter/js/jquery.gritter.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/gritter-conf.js') }}"></script>

  <!--script for this page-->
  <script src="{{ asset('assets/js/sparkline-chart.js') }}"></script>    
  <script src="{{ asset('assets/js/zabuto_calendar.js') }}"></script>	

    <script type="text/javascript">
        $('.date').datepicker({  
                format: 'mm-dd-yyyy'
            });  
    </script> 
  
  <script type="application/javascript">
    $(document).ready(function () {
        $("#date-popover").popover({html: true, trigger: "manual"});
        $("#date-popover").hide();
        $("#date-popover").click(function (e) {
            $(this).hide();
        });
    
        $("#my-calendar").zabuto_calendar({
            action: function () {
                return myDateFunction(this.id, false);
            },
            action_nav: function () {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [
                {type: "text", label: "Special event", badge: "00"},
                {type: "block", label: "Regular event", }
            ]
        });
    });
    
    
    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>


</body>
</html>