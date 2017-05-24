<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"D:\wamp\www\cangba\public/../app/admin\view\index\login.html";i:1495422170;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CangBa - 登录</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">
    <link rel="shortcut icon" href="favicon.ico"> <link href="/static/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/static/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/static/css/animate.min.css" rel="stylesheet">
    <link href="/static/css/style.min.css" rel="stylesheet"><base target="_blank">
    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">藏</h1>
            </div>
            <h3>CangBa Club</h3>

            <form class="m-t" role="form" >
                <div class="form-group">
                    <input type="text" name="user_name" class="form-control" placeholder="用户名" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="user_pwd" class="form-control" placeholder="密码" required="">
                </div>
                <button type="button" class="btn btn-primary block full-width m-b">登 录</button>

            </form>
        </div>
    </div>
    <script src="/static/js/jquery.min.js?v=2.1.4"></script>
    <script src="/static/js/bootstrap.min.js?v=3.3.5"></script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
    <script type="text/javascript">
        var submit_btn=$('button[type="button"]');
        submit_btn.on('click',function () {
            var user_name=$('input[name="user_name"]').val();
            var user_pwd=$('input[name="user_pwd"]').val();

            if(user_name==''){
                alert("用户名不能为空");
                return false;
            }
            if(user_pwd==''){
                alert('密码不能为空');
                return false;
            }
            alert('ss');
            $.ajax({
                url:"<?php echo url('Index/act_login'); ?>",
                data:{
                    'user_name':user_name,
                    'user_pwd':user_pwd
                },
                dataType:"json",
                type:'post',
                success:function (res) {
                    alert(res.msg)
                }
            })
        })
    </script>
</body>
</html>
