<!DOCTYPE html>
<html style="height: 100%;width: 100%;">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <link href="/public/css/stylesheet.css" rel="stylesheet">
    <script src="/public/js/javascript.js"></script>
</head>

<body style="width:100%; height: 100%;background-repeat: no-repeat; background-size: 100% 100%;">
    <div id="wrapper" style="opacity: 0.95;">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: rgba(0,0,0,0.2); border-bottom-width: 0px">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html"><?php echo $title;?></a>
            </div>
        </nav>
        <div class="container" style="opacity: 0.95;">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">请登录</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="/login">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="请输入用户名" name="username" type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="请输入密码" name="password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">记住我
                                        </label>
                                    </div>
                                    <p class="text-danger"><?php echo $word;?></p>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button class="btn btn-lg btn-success btn-block">登录</button>
                                </fieldset>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>