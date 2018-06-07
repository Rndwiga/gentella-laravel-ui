@extends(config('gentella.views.layouts.admin'))

@section('content')
<!-- page content -->

  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Models <small>generated models in the system</small></h3>
      </div>
    </div>

    <div class="clearfix"></div>

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Cashflow Model</h2>
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
                  <th>Edited Counter</th>
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
                  {{--<td>{{$cashflow->office->name}}</td>--}}
                  <td>{{$cashflow->officeId}}</td>
                  <td>{{$cashflow->processed == 1 ? 'Processed': 'Pending'}}</td>
                  <td>{{$cashflow->timesEdited >= 1 ? $cashflow->timesEdited: '0'}}</td>
                  <td>{{$cashflow->created_at->diffForhumans()}}</td>
                  <td>
                    <a class="btn btn-success" href="{{route('reports.show',$cashflow->id)}}">{{$cashflow->path}}</a>
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

@endsection
