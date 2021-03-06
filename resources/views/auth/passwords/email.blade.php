<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->
    <link rel="shortcut icon" href={{asset('"assets/images/favicon.ico"')}}>

    <!-- App title -->
    <title>Smart Farm Information Management System</title>

    <!-- App CSS -->
    <link href={{asset("assets/css/bootstrap.min.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("assets/css/core.css")}}rel="stylesheet" type="text/css" />
    <link href={{asset("assets/css/components.css")}}rel="stylesheet" type="text/css" />
    <link href={{asset("assets/css/icons.css")}}rel="stylesheet" type="text/css" />
    <link href={{asset("assets/css/pages.css")}}rel="stylesheet" type="text/css" />
    <link href={{asset("assets/css/menu.css")}}rel="stylesheet" type="text/css" />
    <link href={{asset("assets/css/responsive.css")}}rel="stylesheet" type="text/css" />


    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src={{asset("assets/js/modernizr.min.js")}}></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-74137680-1', 'auto');
        ga('send', 'pageview');

    </script>

</head>
<body>

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class="text-center">
        <a href="" class="logo"><span>SMART<span>FARM</span></span></a>
        <h5 class="text-muted m-t-0 font-600">Information Management System</h5>
    </div>
    <div class="m-t-40 card-box">
        <div class="text-center">
            <h4 class="text-uppercase font-bold m-b-0">Reset Password</h4>

            <p class="text-muted m-b-0 font-13 m-t-20">Enter your email address and we'll send you an email with instructions to reset your password.  </p>
        </div>
        <div class="panel-body">
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            <form class="form-horizontal m-t-20" method="POST" action="{{ route('password.email') }}">
                @csrf



                <div class="form-group">
                    <div class="col-xs-12">
                        <input id="email" type="email" placeholder="Enter email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif                    </div>
                </div>

                <div class="form-group text-center m-t-20 m-b-0">
                    <div class="col-xs-12">
                        <button type="submit"  class="btn btn-primary">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </div>
    <!-- end card-box -->

    <div class="row">
        <div class="col-sm-12 text-center">
            <p class="text-muted">Already have account?<a href={{route('login')}} class="text-primary m-l-5"><b>Login In</b></a></p>
        </div>
    </div>

</div>
<!-- end wrapper page -->


<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src={{asset("assets/js/jquery.min.js")}}></script>
<script src={{asset("assets/js/bootstrap.min.js")}}></script>
<script src={{asset("assets/js/detect.js")}}></script>
<script src={{asset("assets/js/fastclick.js")}}></script>
<script src={{asset("assets/js/jquery.slimscroll.js")}}></script>
<script src={{asset("assets/js/jquery.blockUI.js")}}></script>
<script src={{asset("assets/js/waves.js")}}></script>
<script src={{asset("assets/js/wow.min.js")}}></script>
<script src={{asset("assets/js/jquery.nicescroll.js")}}></script>
<script src={{asset("assets/js/jquery.scrollTo.min.js")}}></script>

<!-- App js -->
<script src={{asset("assets/js/jquery.core.js")}}></script>
<script src={{asset("assets/js/jquery.app.js")}}></script>

</body>

<!-- Mirrored from coderthemes.com/adminto/menu_2/page-recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Oct 2017 08:33:00 GMT -->
</html>