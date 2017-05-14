<?php
/**
 * Created by PhpStorm.
 * User: Dearvee
 * Date: 2017/4/21
 * Time: 22:50
 */
include dirname(__FILE__) . '/../blog/function/Home.php';

echo "
<link href='index/home.css' type='text/css' rel='stylesheet'/>
<ul>" . getHome() ."</ul>";


