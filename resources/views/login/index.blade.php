<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>E-Lelang | Login</title>

    <link href="{{asset('public/assets/template/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/template/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/template/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/template/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/corelib/ajax.css')}}">
    <style>
        body {
            background: url({{asset("public/assets/img/bg2.jpg")}});
            color: #FFF;
        }

        form {
            color: #333;
        }
    </style>

</head>

<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>


        <i class="fa fa-cart" style="font-size: 220px"></i>
        <h3>E-Halal Login</h3>

        <div id="results"></div>

        <form class="m-t" action="" onsubmit="return false" id="form-konten">
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required="">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="">
            </div>
            <button type="submit" class="btn btn-warning block full-width m-b">Login</button>

            <a href="#"><small>Forgot password?</small></a>
        </form>
        <p class="m-t"> <small>Aplikasi Produk Halal	&copy; 2018</small> </p>
    </div>
</div>

<!-- Mainly scripts -->
<input type='hidden' name='_token' value='{{ csrf_token() }}'>
<script src="{{asset('public/assets/template/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('public/assets/template/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/assets/corelib/core.js')}}"></script>

<script type="text/javascript">
    $('#form-konten').submit(function () {
        var data = getFormData('form-konten');
        ajaxTransfer("{{url('/validate-login')}}", data, '#results');
    });

    function redirectPage(){
        redirect(1000, '/backend');
    }
</script>

</body>

</html>
