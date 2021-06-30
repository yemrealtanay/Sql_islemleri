<?php
//  uygulamanın mevcut verisine erişimimiz olmalı
require "inc/init.php";

redirectIfNotLoggedIn();

$articleIndexToDelete = (int)$_GET['id'];
deleteArticle($articleIndexToDelete);

//  burada işimiz bitti, ana sayfaya gidelim
header("Location: index.php");
die();
