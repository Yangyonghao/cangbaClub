<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>cang吧</title>
    <link href="/Public/css/home/base.css" type="text/css" rel="stylesheet">
    <link href="/Public/css/bootstrap.css" type="text/css" rel="stylesheet">
    <script type="application/javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script type="application/javascript" src="/Public/js/bootstrap.min.js"></script>
</head>
<body>
<div class="head_panel">
    <div class="head_title">
        <div style="width: 100px;height: 100px;">
            <img src="/public/image/cangba.png" width="100%" height="100%" />
        </div>
        <div class="header_left header_left_width com_head_nav">
            <ul>
                <!--<li><a href="javascript:void(0)">首页</a></li>-->
                <!--<li><a href="javascript:void(0)">公司新闻</a></li>-->
                <!--<li><a href="javascript:void(0)">企业文化</a></li>-->
                <!--<li><a href="javascript:void(0)">钱币分类</a></li>-->
                <li><a href="<?php echo U('index/getTest');?>">题库</a></li>
            </ul>
        </div>

        <div class="header_left" style="width:30%">
            <ul>
                <li><a href="<?php echo U('submit/login');?>">登录</a></li>
                <li><a href="<?php echo U('submit/register');?>">注册</a></li>
            </ul>
        </div>
        <div class="both"></div>
    </div>
</div>
<div class="control_panel">
    <div style="width: 90%;height:100%;margin: 0 auto;">
        <div class="contain_left" style="width: 18%;height:90%;margin:2% 0;background-color:whitesmoke;border: 1px solid #808080;float: left">
            <div class="contain_left_child">
                <ul>
                    <li><a href="javascript:void(0)">第壹套人民币</a></li>
                    <li><a href="javascript:void(0)">第贰套人民币</a></li>
                    <li><a href="javascript:void(0)">第叁套人民币</a></li>
                    <li><a href="javascript:void(0)">第肆套人民币</a></li>
                    <li><a href="javascript:void(0)">第伍套人民币</a></li>
                    <li><a href="javascript:void(0)">第陆套人民币</a></li>
                </ul>
            </div>
        </div>

<div class="contain_right">

</div>
</div>
</div>
<div class="footer">

</div>

</body>
</html>