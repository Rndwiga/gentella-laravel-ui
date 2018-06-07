@extends(config('cashflow.views.layouts.admin'))

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
        <a href="{{url('admin/users')}}" class="btn btn-default">Back</a>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Cashflow User <small>the user can log into this dashboard</small></h2>
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
              {!! Form::model($user, ['action' => ['UserController@update', $user->id], 'method' => 'patch', 'class'=> 'form-horizontal form-label-left', 'files' => true ]) !!}
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Full Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  {{ Form::text('name', null, ['required'=> 'required', 'class' => 'form-control col-md-7 col-xs-12']) }}
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  {{ Form::email('email', null, ['required'=> 'required', 'class' => 'form-control col-md-7 col-xs-12']) }}
                </div>
              </div>
              <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Office</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  {{ Form::select('office_id', ['' => 'Select'] + $offices , null, ['class' => 'form-control col-md-7 col-xs-12']) }}
                </div>
              </div>
              <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Role</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  {{ Form::select('role_id', ['' => 'Select'] + $roles , null, ['class' => 'form-control col-md-7 col-xs-12']) }}
                </div>
              </div>
              <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  {{ Form::select('is_active', array(1 => 'Activate', 0 => 'Deactivated'), null, ['class' => 'form-control col-md-7 col-xs-12']) }}
                </div>
              </div>
{{--            <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    {{ Form::password('password', ['class' => 'form-control col-md-7 col-xs-12']) }}
                  </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                      {{ Form::text('password_confirmation', null, ['class' => 'form-control col-md-7 col-xs-12']) }}
                  </div>
              </div>
--}}

              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <a href="{{url('admin/users')}}" class="btn btn-primary">Cancel</a>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>

            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection
