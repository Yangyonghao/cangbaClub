<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>藏吧</title>
    <link href="/Public/css/bootstrap.css" type="text/css" rel="stylesheet">
    <script type="application/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script type="application/javascript" src="/Public/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container panel">
        <div class="col-md-7"></div>
        <div class="col-md-5 form-horizontal"  style="margin-top: 200px;">
            <div class="form-group">
                <label for="phone" class="col-sm-2 control-label">手机号</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="phone" placeholder="请输入手机号">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">密码</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" placeholder="请输入密码">
                </div>
            </div>
            <div class="form-group">
                <label for="re_password" class="col-sm-2 control-label">确认密码</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="re_password" placeholder="重复输入密码">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" id="btn-reg" class="btn btn-success">注册</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script type="application/javascript">
    $(function(){
        $("#btn-reg").on('click',function(){
            var phone=$("#phone").val();
            var pwd=$("#password").val();
            var re_pwd=$("#re_password").val();
            var p=/^1[3|4|5|7|8]{1}[0-9]{9}$/;
            if(phone==''){
                alert('手机号不能为空!');
                return false;
            }
            if(pwd==''){
                alert('密码不能为空!');
                return false;
            }
            if(pwd.length<6 || pwd.length>20){
                alert('密码长度在6~20位!');
                return false;
            }
            if(re_pwd==''){
                alert('重复密码不能为空!');
                return false;
            }
            if(pwd!==re_pwd){
                alert('两次输入的密码不一致!');
                return false;
            }
            if(!p.test(phone)){
                alert('手机号不正确!');
                return false;
            }
            $.ajax({
                url:'/home/submit/register',
                data:{
                    phone:phone,
                    pwd:pwd,
                    re_pwd:re_pwd
                },
                type:'post',
                dataType:'json',
                success:function(data){
                    if(data.status==100){
                        alert(data.msg);
                        window.location='/Home/Index/index';
                    }else if(data.status==101){
                        alert(data.msg);
                    }
                }
            })
        });
    })
</script>