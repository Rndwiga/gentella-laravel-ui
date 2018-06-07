@extends('layouts.auth')

<!-- Main Content -->
@section('content')
<!-- /password recovery -->
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
    {{ csrf_field() }}
        <h1>Password Reset</h1>
        <div class="form-group has-feedback">
          <input id="email" type="email" placeholder="Your email" class="form-control" name="email" value="{{ old('email') }}" required>
          <div class="form-control-feedback">
            <i class="fa fa-envelope-o text-muted"></i>
          </div>
          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
        </div>
        <button type="submit" class="btn bg-blue btn-block">Reset password <i class="fa fa-arrow-right position-right"></i></button>
          <div class="clearfix"></div>
        <div class="separator">
          <p class="change_link">Remembered Password?
            <a href="{{ url('/login') }}" class="to_register"> Login </a>
          </p>
          <div class="clearfix"></div>
          <br />
          <div>
            <p>©{{date('Y')}} All Rights Reserved.</p>
          </div>
        </div>
</form>
  <!-- Password recovery -->

@endsection
