@extends(config('gentella.views.layouts.admin'))

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="row tile_count">
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count text-center">
      <span class="count_top"><i class="fa fa-archive"></i> Total Modeled Loans</span>
      <div class="count center">{{$widgets->totalModels}}</div>
      {{--<span class="count_bottom"><i class="green">4% </i> From last Week</span>--}}
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count text-center">
      <span class="count_top"><i class="fa fa-home"></i> Previous Top Branch</span>
      <div class="count blue" style="font-size: 37px">{{$widgets->previousWeekTopBranch ? $widgets->previousWeekTopBranch : 'none'}}</div>
      {{--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>--}}
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count ">
      <span class="count_top"><i class="fa fa-home"></i> Current Top Branch</span>
      <div class="count green" style="font-size: 37px">{{$widgets->topBranchInTheWeek}}</div>
      {{--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>--}}
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count text-center">
      <span class="count_top"><i class="fa fa-archive"></i> Todays Models</span>
      <div class="count">{{$widgets->todayModels}}</div>
      {{--<span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>--}}
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count text-center">
      <span class="count_top"><i class="fa fa-archive"></i> Last Week Models</span>
      <div class="count">{{$widgets->lastWeekModels}}</div>
      {{--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>--}}
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count text-center">
      <span class="count_top"><i class="fa fa-archive"></i> This Week Models</span>
      <div class="count">{{$widgets->thisWeekModels}}</div>
      {{--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>--}}
    </div>
  </div>
  <!-- /top tiles -->

<div class="clearfix"></div>
  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="x_panel tile fixed_height_320">
        <div class="x_title">
          <h2>Models Grouped By Day</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          {{--{!! $groupByDay->render() !!}--}}
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="x_panel tile fixed_height_320">
        <div class="x_title">
          <h2>Total Models Per Office</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          {{--{!! $groupByOffice->render() !!}--}}
        </div>
      </div>
    </div>
  </div>
<div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel tile ">
        <div class="x_title">
          <h2>Models Grouped By Month</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          {{--{!! $groupByDayTrend->render() !!}--}}
        </div>
      </div>
    </div>
  </div>
<div class="clearfix"></div>
</div>
<!-- /page content -->
@endsection
