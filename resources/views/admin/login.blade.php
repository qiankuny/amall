<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <title>Clean Zone</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/packages/admin/js/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/packages/admin/fonts/font-awesome-4/css/font-awesome.min.css')}}">

    <!-- Custom styles for this template -->
    <link href="{{asset('/packages/admin/css/style.css')}}" rel="stylesheet" />

</head>

<body class="texture">

<div id="cl-wrapper" class="login-container">

    <div class="middle-login">
        <div class="block-flat">
            <div class="header">
                <h3 class="text-center"><img class="logo-img" src="{{asset('/packages/admin/images/logo.png')}}" alt="logo"/>Clean Zone</h3>
            </div>
            <div>
                <form style="margin-bottom: 0px !important;" class="form-horizontal" action="http://condorthemes.com/cleanzone/index.html">
                    <div class="content">
                        <h4 class="title">{{trans('admin.login')}}</h4>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" placeholder="Username" id="username" value="admin" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" placeholder="Password" id="password" class="form-control">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="foot">
                        <button class="btn btn-default" data-dismiss="modal" type="button">Register</button>
                        <button class="btn btn-primary" data-dismiss="modal" type="submit">Log me in</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="text-center out-links"><a href="#">&copy; 2013 Your Company</a></div>
    </div>

</div>

<script src="{{asset('/packages/admin/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('/packages/admin/js/behaviour/general.js')}}"></script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('/packages/admin/js/behaviour/voice-commands.js')}}"></script>
<script src="{{asset('/packages/admin/js/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/packages/admin/js/jquery.flot/jquery.flot.js')}}"></script>
<script type="text/javascript" src="{{asset('/packages/admin/js/jquery.flot/jquery.flot.pie.js')}}"></script>
<script type="text/javascript" src="{{asset('/packages/admin/js/jquery.flot/jquery.flot.resize.js')}}"></script>
<script type="text/javascript" src="{{asset('/packages/admin/js/jquery.flot/jquery.flot.labels.js')}}"></script>
</body>
</html>
