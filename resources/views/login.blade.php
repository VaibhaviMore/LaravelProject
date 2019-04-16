<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
<body>



<section id="page-title">
<div class="container clearfix">
<h1>Login / Register</h1>

</div>
</section>

<section id="content">
<div class="content-wrap">
<div class="container clearfix">
<div class="accordion accordion-lg divcenter nobottommargin clearfix" style="max-width: 550px;">
<div class="acctitle"><i class="acc-closed icon-lock3"></i><i class="acc-open icon-unlock"></i>Login to your Account</div>
<div class="acc_content clearfix">

@if(isset(Auth::user()->email))
            <script>
                window.location="/main/successlogin";
            </script>
@endif

@if($message = Session:: get('error'))
            <div>
            <button class="close">x</button>
                <strong>{{ $message }}</strong>
            </div>
@endif


@if(count($errors) > 0)
            <div>
                <ul>
                    @foreach($errors -> all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
@endif
<form id="login-form" name="login-form" action="{{ url('/main/checklogin')}}" class="nobottommargin" method="post">
<!-- to handle multiple exceptions -->
{{ csrf_field() }}
<div class="col_full">
<label for="login-form-username">Email:</label>
<input type="email" id="email" name="email" value="" class="form-control" />
</div>
<div class="col_full">
<label for="login-form-password">Password:</label>
<input type="password" id="password" name="password" value="" class="form-control" />
</div>
<div class="col_full nobottommargin">
<input type="submit" name="login" value="Login" class="form-control" />
<!-- <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button> -->
<a href="#" class="fright">Forgot Password?</a>
</div>
</form>
</div>
<div class="acctitle"><i class="acc-closed icon-user4"></i><i class="acc-open icon-ok-sign"></i>New Signup? Register for an Account</div>
<div class="acc_content clearfix">

</div>
</div>
</div>
</div>
</section>


</body>
</html>