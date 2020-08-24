
@extends(backpack_view('layouts.plain'))
@section('content')
{{-- <div class="justify-content-center"></div> --}}

<style>
    .container-fluid {
          padding: 0px;
          width: 100%;
          height: 100%;
          border-radius: 20px;
          box-shadow: 0px 0px 5px #8f8787;
          margin-left: 5px;
          padding: 20px;
          overflow: hidden;
    }

    .imagefondo {
          position: absolute;
        top: 2%;
        left: 3%;
        right: 1%;
        bottom: 1;
        margin: auto;
        padding: 0px;
          width: 95%;
          height: 100%;
          border-radius: 20px;
          box-shadow: 0px 0px 5px #8f8787;
          margin-left: 5px;
          padding: 20px;
          overflow: hidden;
    }

        #container-fluid{
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        width: 260px;
        height: 260px;
        border-radius: 5px;
        background: rgba(3,3,3,0.25);
        box-shadow: 1px 1px 50px #000;
        display: none;
        }


    .card {
          font-family: Helvetica, sans-serif;
          padding: 0px;
          width: 100%;
          height: 81%;
          border-radius: 20px;
          box-shadow: 0px 0px 5px #8f8787;
          margin-left: 5px;
          padding: 20px;
          overflow: hidden;
    }
</style>

<div class="container-fluid">
    <div class="row-fluid">
<div class= "imagefondo" style="background-image:url('https://a1zcjg.dm.files.1drv.com/y4mduhMJGowLghJo6xco4R-3AllgiHD1_AIMtiWYHQEyBhMOED3VW85WaYOMS4_VxcnppxI7E1T0rUZEEaalaxxVqsXSd-aKJlz8xYcHgZTlZzfBXbCDlwnMVrz53zLNaW8W3y_mMBFkLciOpIRFrqSUn7xUoQtvlfgeTNqSdYEirAtjnzX8C95YiHKPtnallV8foNBc7x70B_U1hWfmBjIiA?');no-repeat center center;
        background-size:100% 100%;">

        {{-- <div class="row justify-content-center"></div> --}}
    <div class="d-flex flex-row-reverse">
        <div class="col-12 col-md-8 col-lg-4">
            <h3 class="text-center mb-4">{{ trans('backpack::base.login') }}</h3>
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center">
                    <img display="block" margin="auto" border="0" alt="Amovil" src="https://web.amovil.co/assets/img/logoAMOVIL.svg" width="150" height="auto">

                    <form class="col-md-12 p-t-10" role="form" method="POST" action="{{ route('backpack.auth.login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="control-label" for="{{ $username }}">{{ config('backpack.base.authentication_column_name') }}</label>

                            <div>
                                <input type="text" class="form-control{{ $errors->has($username) ? ' is-invalid' : '' }}" name="{{ $username }}" value="{{ old($username) }}" id="{{ $username }}">

                                @if ($errors->has($username))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first($username) }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="password">{{ trans('backpack::base.password') }}</label>

                            <div>
                                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> {{ trans('backpack::base.remember_me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-block btn-primary">
                                    {{ trans('backpack::base.login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @if (backpack_users_have_email())
                <div class="text-center"><a href="{{ route('backpack.auth.password.reset') }}">{{ trans('backpack::base.forgot_your_password') }}</a></div>
            @endif
            @if (config('backpack.base.registration_open'))
                <div class="text-center"><a href="{{ route('backpack.auth.register') }}">{{ trans('backpack::base.register') }}</a></div>
            @endif
        </div>
    </div>
</div>
 </div>
</div>
@endsection
