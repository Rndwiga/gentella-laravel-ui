@extends('layouts.admin')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Users</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <a href="{{route('home')}}" class="btn btn-primary">Back</a>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="x_panel">
          <div class="x_title">
            <h2>Client Details</h2>
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
            <br />
            <table class="table">
              <tbody>
              <tr>
                <th scope="row">First Name</th>
                <td>{{$client->first_name}}</td>
              </tr>
              <tr>
                <th scope="row">Last Name</th>
                <td>{{$client->last_name}}</td>
              </tr>
              <tr>
                <th scope="row">Phone Number</th>
                <td>{{$client->phone_number}}</td>
              </tr>
              <tr>
                <th scope="row">Branch</th>
                <td>{{$client->office->name}}</td>
              </tr>
              <tr>
                <th scope="row">Loan Term</th>
                <td>{{$client->loan_term}}</td>
              </tr>
              <tr>
                <th scope="row">Loan Amount</th>
                <td>{{$client->loan_amount}}</td>
              </tr>
              <tr>
                <th scope="row">Registration Number</th>
                <td>{{$client->registration_number}}</td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="x_panel">
          <div class="x_title">
            <h2>Tracking Company{{--<small>Kindly fill in all the required details</small>--}}</h2>
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
            <br />
            <table class="table">

              <tbody>
              <tr>
                <th scope="row">Company Name</th>
                <td>{{$client->trackingCompany->company_name}}</td>
              </tr>
              <tr>
                <th scope="row">Contact Person</th>
                <td>{{$client->trackingCompany->contact_person}}</td>
              </tr>
              <tr>
                <th scope="row">Email Address</th>
                <td>{{$client->trackingCompany->email_address}}</td>
              </tr>
              <tr>
                <th scope="row">Phone Number</th>
                <td>{{$client->trackingCompany->phone_number}}</td>
              </tr>
              <tr>
                <th scope="row">Asset Tracking</th>
                <td>{{$client->trackingCompany->asset_tracking}}</td>
              </tr>
              <tr>
                <th scope="row">No. Of Clients Tracking</th>
                <td>{{$client->trackingCompany->times_selected}}</td>
              </tr>
              <tr>
                <th scope="row"></th><tr>
                  <th scope="row">Transactions</th>
                  <td>{{$loanDetails->accountNo}}</td>
                <
                <td></td>
                <td></td>
                <td></td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection
