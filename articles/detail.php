<?php
require "inc/init.php";

$articleId = (int)$_GET['id'];
$article = getArticleDetail($articleId);
$articles = getAllArticles();

include "views/detail.php";
