<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>
    <link rel="stylesheet" href="/assets1/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="/assets1/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="/assets1/fonts/ionicons.min.css">
    <link rel="stylesheet" href="/assets1/css/Footer-Dark.css">
    <link rel="stylesheet" href="/assets1/css/Login-Form-Dark.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">


    <!-- /.login-logo -->
    <div class="login-dark" style="height: 650px;">
        {{-- <div class="login-logo form-group">
            <a href="{{ url('/home') }}"><b>se connecter</b></a>
        </div>
        <p class="login-box-msg">se connecter pour commencer</p> --}}

        <form method="post" action="{{ url('/login') }}">
        <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            @csrf

            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

            </div>
            <div class="row">
                <div class="col-xs-8">
                    {{-- <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember"> se souvenir de moi
                        </label>
                    </div> --}}
                </div>
                <!-- /.col -->
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">se connecter</button></div><a class="forgot" href="{{ url('/register') }}">s'inscrire en tant que nouveau membre</a></form>
                 <!-- /.col -->
            </div>
          {{-- <div class="form-group">
            <a href="{{ url('/password/reset') }}">I forgot my password</a><br>
            <a href="{{ url('/register') }}" class="text-center">s'inscrire en tant que nouveau membre</a>
          </div> --}}

        </form>


    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>




