
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Here</title>
    <link href="index/head.css" type="text/css" rel="stylesheet"/>
    <script src="index/Ajax.js"></script>
    <script src="index/upRunTime.js"></script>
</head>
<body>

<header id="header">
    <span id="ctrl" class="ctrl">>></span>
    <div class="admin">
        <img class="img" src="index/cat.jpg"/>
        <br>
        <a href="http://www.dearvee.com">vee</a>
        <ul>
            <li><a class="aInfo" href="javascript:void(0);" onclick="getAjax('index/index.php');">Essay</a></li>
            <li><a class="aInfo" href="https://github.com/dearvee"  target="_blank">GitHub</a></li>
            <li><a class="aInfo" href="https://cnblogs.com/dearvee" target="_blank">CnBlog</a></li>
            <li><a class="aInfo" href="http://blog.csdn.net/dearvee"    target="_blank">CSDN</a></li>
        </ul>
        <h4>Follow your heart~</h4>
        <span>Trying...</span>
        <ul class="testInfo">
            <li>PV:<? include 'access/access_func.php';
                include 'access/write_log.php';
                homeCount();echo getLateCount();?>
            </li>
            <li id="runTime">Loading...</li>
            <li>code by vee</li>
        </ul>
    </div>
</header>

<div id="bodyInfo" class="bodyInfo">
</div>
</body>
</html>