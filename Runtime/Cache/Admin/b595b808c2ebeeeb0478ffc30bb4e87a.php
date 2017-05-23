<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>后台主页</title>
    <style>

        .header_nav ul li{
            width: 100px;
            height:60px;
            display: block;
            float: left;
        }
        #main-nav.nav-tabs.nav-stacked > li > a {
            padding: 10px 8px;
            font-size: 14px;
            font-weight: 600;
            color: #4A515B;
            background: #E9E9E9;
            background: -moz-linear-gradient(top, #FAFAFA 0%, #E9E9E9 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FAFAFA), color-stop(100%,#E9E9E9));
            background: -webkit-linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%);
            background: -o-linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%);
            background: -ms-linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%);
            background: linear-gradient(top, #FAFAFA 0%,#E9E9E9 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9');
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#FAFAFA', endColorstr='#E9E9E9')";
            border: 1px solid #D5D5D5;
            border-radius: 4px;
        }

        #main-nav.nav-tabs.nav-stacked > li > a > span {
            color: #4A515B;
        }

        #main-nav.nav-tabs.nav-stacked > li.active > a, #main-nav.nav-tabs.nav-stacked > li > a:hover {
            color: #FFF;
            background: #3C4049;
            background: -moz-linear-gradient(top, #4A515B 0%, #3C4049 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#4A515B), color-stop(100%,#3C4049));
            background: -webkit-linear-gradient(top, #4A515B 0%,#3C4049 100%);
            background: -o-linear-gradient(top, #4A515B 0%,#3C4049 100%);
            background: -ms-linear-gradient(top, #4A515B 0%,#3C4049 100%);
            background: linear-gradient(top, #4A515B 0%,#3C4049 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4A515B', endColorstr='#3C4049');
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#4A515B', endColorstr='#3C4049')";
            border-color: #2B2E33;
        }

        #main-nav.nav-tabs.nav-stacked > li.active > a, #main-nav.nav-tabs.nav-stacked > li > a:hover > span {
            color: #FFF;
        }

        #main-nav.nav-tabs.nav-stacked > li {
            margin-bottom: 4px;
        }

        /*定义二级菜单样式*/
        .secondmenu a {
            font-size: 16px;
            color: #4A515B;
            /*text-align: center;*/
        }
        .secondmenu a span {
            padding-left: 10px;
        }

        .navbar-static-top {
            background-color: #212121;
            margin-bottom: 5px;
        }

        .navbar-brand {
            background: url('') no-repeat 10px 8px;
            display: inline-block;
            vertical-align: middle;
            padding-left: 50px;
            color: #fff;
        }
        .nav-right-div{
            margin-right: 100px;
        }

    </style>
    <script type="application/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script type="application/javascript" src="/Public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.css" >

</head>
<body>
<!--navbar-duomi-->
<nav class="navbar  navbar-static-top" role="navigation" style="padding: 0 50px;">
    <!--<div class="container-fluid"></div>-->
    <div class="navbar-header">
        <a class="navbar-brand" href="/Admin/index.html" id="logo">藏吧</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" style="background-color:#212121;color: white;">
                超级管理员 <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li><a href="javascript:void(0)">修改密码</a></li>
                <li><a href="javascript:void(0)">设置</a></li>
                <li class="divider"></li>
                <li><a href="javascript:void(0)">退出登录</a></li>
            </ul>
        </li>
    </ul>
</nav>
<div class="container-fluid">
    <div class="row">
    
    <div class="col-md-2">
        <ul id="main-nav" class="nav nav-tabs nav-stacked" style="">
            <li class="active">
                <a href="#">
                    <i class="glyphicon glyphicon-th-large"></i>
                    首页
                </a>
            </li>
            <li>
                <a href="#systemSetting" class="nav-header collapsed" data-toggle="collapse">
                    <i class="glyphicon glyphicon-cog"></i>
                    系统管理
                    <span class="pull-right glyphicon glyphicon-chevron-down"></span>
                </a>
                <ul id="systemSetting" class="nav nav-list collapse secondmenu" style="height: 0px;">
                    <li><a href="#"><i class="glyphicon glyphicon-user"></i><span>用户管理</span></a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-th-list"></i><span>菜单管理</span></a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-asterisk"></i><span>角色管理</span></a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-edit"></i><span>修改密码</span></a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-eye-open"></i><span>日志查看</span></a></li>
                </ul>
            </li>
            <li>
                <a href="./plans.html">
                    <i class="glyphicon glyphicon-credit-card"></i>
                    物料管理
                </a>
            </li>

            <li>
                <a href="./grid.html">
                    <i class="glyphicon glyphicon-globe"></i>
                    分发配置
                    <span class="label label-warning pull-right">5</span>
                </a>
            </li>

            <li>
                <a href="./charts.html">
                    <i class="glyphicon glyphicon-calendar"></i>
                    图表统计
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="glyphicon glyphicon-fire"></i>
                    关于系统
                </a>
            </li>

        </ul>
    </div>
    <script>
//        $(".nav-header").addEventListener('click',function(){
//            if(true){
//                $(this).children('span').removeClass('glyphicon-chevron-down');
//                $(this).children('span').addClass('glyphicon-chevron-up');
//            }else{
//                $(this).children('span').addClass('glyphicon-chevron-down');
//                $(this).children('span').removeClass('glyphicon-chevron-up');
//            }
//        });
    </script>
    <div class="col-md-10">
        wegerge
    </div>
        </div>
    </div>


    </body>
</html>