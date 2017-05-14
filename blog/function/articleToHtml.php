<?php
/**
 * Created by PhpStorm.
 * User: Dearvee
 * Date: 2017/5/11
 * Time: 20:32
 */
function buildHtmlFile($title,$time,$text){
    $article = '
<head>
    <meta charset="utf-8">
    <title>随笔 - '.$title.'</title>
    
<link href="blog/css/article.css" type="text/css" rel="stylesheet"/>
</head>

<ul style="list-style-type: none;">
            <li class="page">
                    <h2>'.$title.'</h2>
                    <h5>Posted&nbsp;@&nbsp;'.$time.'&nbsp;by&nbsp;dearvee</h5>
                    '.$text.'      
            </li>
</ul>';
    $current_time=time();
    $htmlPath=dirname(__FILE__).'/../p/'.$current_time.'.html';
    file_put_contents($htmlPath,$article);
    return $current_time;
}