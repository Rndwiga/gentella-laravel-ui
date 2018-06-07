@extends(config('gentella.views.layouts.auth'))

@section('content')
<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
              <h1>Login</h1>

                {{ csrf_field() }}

                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="">
                        <input id="email" type="email" placeholder="Your email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        <div class="form-control-feedback">
                          <i class="fa fa-envelope-o text-muted"></i>
                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">

                    <div class="">
                        <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>
                        <div class="form-control-feedback">
                          <i class="fa fa-key text-muted"></i>
                        </div>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="">
                        <button type="submit" class="btn btn-block btn-primary">
                            Login
                        </button>
                    </div>
                </div>


              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">
                  <a class="btn btn-link" href="{{ url('/password/reset') }}">Lost Password?</a>
                </p>

                <div class="clearfix"></div>
                <br />
              </div>
 </form>
@endsection
