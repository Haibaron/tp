
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="__PUBLIC__/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="__PUBLIC__/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="__PUBLIC__/admin/css/animate.css" rel="stylesheet">
    <link href="__PUBLIC__/admin/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>后台登录</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>
            <form method="post" class="m-t" action="<?=U('Admin/AuthLogin/login_check') ?>" role="form"  novalidate>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="请输入用户名..." required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="密码..." required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2016</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="__PUBLIC__/Admin/js/jquery-2.1.1.js"></script>
    <script src="__PUBLIC__/Admin/js/bootstrap.min.js"></script>

</body>

</html>
