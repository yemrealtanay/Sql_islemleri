<?php
require "inc/init.php";

redirectIfNotLoggedIn();

$articleId = (int)$_GET['id'];

//  eskiden updatearticle.php içinde bulunan kodları buraya alıyoruz
//  böylece düzenleme işlemi aşamaları olan form gösterme ve düzenlemeleri kaydetme işlemlerini tek dosyada topluyoruz
//  aynı işlemi newarticle.php için de yapmıştık
if (isset($_POST['id']) and isset($_POST['title']) and isset($_POST['content'])) {
    editArticle($articleId, $_POST['title'], $_POST['content']);

    //  burada işimiz bitti, güncellenen article detayına gidelim
    header("Location: detail.php?id=" . $articleId);
    die();
}

$article = getArticleDetail($articleId);

include "views/editarticle.php";
