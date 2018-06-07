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
        <a href="{{url('admin/users/create')}}" class="btn btn-success">Create User</a>
      </div>
    </div>

    <div class="clearfix"></div>

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Office</th>
                  <th>Status</th>
                  <th>Role</th>
                  <th>Created</th>
                  <th width="auto">Action</th>
                </tr>

              </thead>
              <tbody>
            @if(isset($users))
              @foreach($users as $user)
                <tr>
                  <td>{{$user->name}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->office->name}}</td>
                  <td>{{$user->is_active == 1 ? 'Active' : 'Deactivated'}}</td>
                  <td>{{$user->role->name}}</td>
                  <td>{{$user->created_at->diffForhumans()}}</td>
                  <td>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class='pull-left'>
                            <a href="{{url('admin/users/'. $user->id .'/edit')}}" class="btn btn-success" ><i class="fa fa-pencil"></i></a>

                            <a href="#" class="btn btn-danger" ><i class="fa fa-trash"></i></a>
                        </div>
                        <div class='pull-right'>
                          {!! Form::open(['url' => 'password/email', 'method' => 'post']) !!}
                            <input type="hidden" class="form-control" name="email" value="{{$user->email}}">
                            <button type="submit" class="btn bg-warning"><i class="fa fa-refresh"></i></button>
                          {!! Form::close() !!}
                        </div>
                    </div>
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
