<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('frontEnd/images/favicon.ico')}}" />

    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap -->
    <link href="{{asset('frontEnd/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('frontEnd/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('frontEnd/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('frontEnd/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{asset('frontEnd/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
    @yield('css')
    <!-- Custom Theme Style -->
    <link href="{{asset('frontEnd/build/css/custom.min.css')}}" rel="stylesheet">
    <style type="text/css">
      /* *********  timeline  **************************** */
      ul.timeline li {
        position: relative;
        border-bottom: 1px solid #e8e8e8;
        clear: both; }

      .timeline .block {
        margin: 0;
        border-left: 3px solid #e8e8e8;
        overflow: visible;
        padding: 10px 15px;
        margin-left: 105px; }

      .timeline.widget {
        min-width: 0;
        max-width: inherit; }

      .timeline.widget .block {
        margin-left: 5px; }

      .timeline .tags {
        position: absolute;
        top: 15px;
        left: 0;
        width: 84px; }

      .timeline .tag {
        display: block;
        height: 30px;
        font-size: 13px;
        padding: 8px; }

      .timeline .tag span {
        display: block;
        overflow: hidden;
        width: 100%;
        white-space: nowrap;
        text-overflow: ellipsis; }

      .tag {
        line-height: 1;
        background: #1ABB9C;
        color: #fff !important; }

      .tag-success {
        line-height: 1;
        background: #1dbb1c;
        color: #fff !important; }

      .tag-warning {
        line-height: 1;
        background: #bb690e;
        color: #fff !important; }
      .tag-text-color-black{
        color: black;
      }

      .tag:after {
        content: " ";
        height: 30px;
        width: 0;
        position: absolute;
        left: 100%;
        top: 0;
        margin: 0;
        pointer-events: none;
        border-top: 14px solid transparent;
        border-bottom: 14px solid transparent;
        border-left: 11px solid #1ABB9C; }

      .timeline h2.title {
        position: relative;
        font-size: 16px;
        margin: 0; }

      .timeline h2.title:before {
        content: "";
        position: absolute;
        left: -23px;
        top: 3px;
        display: block;
        width: 14px;
        height: 14px;
        border: 3px solid #d2d3d2;
        border-radius: 14px;
        background: #f9f9f9; }

      .timeline .byline {
        padding: .25em 0; }

      .byline {
        -webkit-font-smoothing: antialiased;
        font-style: italic;
        font-size: .9375em;
        line-height: 1.3;
        color: #aab6aa; }

      ul.social li {
        border: 0; }

      /* *********  /timeline  **************************** */
    </style>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('/home')}}" class="site_title"><i class="fa fa-bank"></i> <span>{{env('APP_NAME')}}</span></a>
            </div>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                {{--<img src="{{asset('frontEnd/images/img.jpg')}}" alt="..." class="img-circle profile_img">--}}
                <img src="{{ Avatar::create(Auth::user()->name)->setBackground(env('UI_GENTELLA_PROFILE_BACKGROUND_NAVBAR'))->setDimension(128)->toBase64() }}" alt="..." class="img-circle profile_img">

              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Options</h3>
                <ul class="nav side-menu">
                  {!! GenerateMenu::generateMenu(config('tyondo_menu_generator.navigation')) !!}
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                   <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                   <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                       {{ csrf_field() }}
                   </form>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    {{--<img src="{{asset('frontEnd/images/img.jpg')}}" alt="">{{ Auth::user()->name }}--}}
                    <img src="{{Avatar::create(Auth::user()->name)->setBackground(env('UI_GENTELLA_PROFILE_BACKGROUND_TOPBAR'))->setDimension(100)->toBase64() }}" alt="">{{ Auth::user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{url('admin/users', Auth::user()->id)}}"><i class="fa fa-lock pull-right"></i>
                      Change Password</a></li>
                    {{--<li><a href="javascript:;">Help</a></li>--}}
                    <li>
                      <a href="{{ url('/logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                   <i class="fa fa-sign-out pull-right"></i>Logout
                      </a>
                      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
        @yield('page_header')
        @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            {{ config('app.name') }} by <a href="https://tyondo.com">Raphael Ndwiga</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('frontEnd/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('frontEnd/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('frontEnd/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('frontEnd/vendors/nprogress/nprogress.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('frontEnd/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Datatables -->
    <script src="{{asset('frontEnd/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('frontEnd/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('frontEnd/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('frontEnd/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('frontEnd/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('frontEnd/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('frontEnd/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('frontEnd/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('frontEnd/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('frontEnd/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('frontEnd/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('frontEnd/vendors/datatables.net-scroller/js/datatables.scroller.min.js')}}"></script>
    <script src="{{asset('frontEnd/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('frontEnd/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('frontEnd/vendors/pdfmake/build/vfs_fonts.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('frontEnd/build/js/custom.min.js')}}"></script>
    @yield('script')

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();


        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
  </body>
</html>
