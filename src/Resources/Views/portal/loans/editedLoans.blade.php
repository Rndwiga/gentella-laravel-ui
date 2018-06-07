@extends(config('cashflow.views.layouts.admin'))

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
    </div>
    <div class="clearfix"></div>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Cashflow Loans Edit</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable-buttons" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Loan ID</th>
                  <th>Client ID</th>
                  <th>Office</th>
                  <th>Status</th>
                  <th>Created</th>
                  <th>Path</th>
                </tr>
              </thead>
              <tbody>
            @if(isset($cashflows))
              @foreach($cashflows as $cashflow)
                <tr>
                  <td>
                    <a href="{{env('CASHFLOW_LOAN_URL') . $cashflow->loanId}}" target="_blank">{{$cashflow->loanId}}</a>
                  </td>
                  <td>{{$cashflow->clientId}}</td>
                  <td>{{$cashflow->officeId}}</td>
                  <td>{{$cashflow->processed == 1 ? 'Processed': 'Pending'}}
                  </td>
                  <td>{{$cashflow->created_at->diffForhumans()}}</td>
                  <td>
                    <a class="btn btn-primary" href="{{action('ReportsController@show', ['id' => $cashflow->id])}}">{{$cashflow->path}}</a>
                  </td>
                </tr>
              @endforeach
            @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
