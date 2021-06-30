<?php
require "inc/init.php";

redirectIfNotLoggedIn();

//  eskiden createarticle.php şeklinde başka bir dosyada bulunan ekleme işlemini
//  aynı dosyanın üstüne aldık
//  öncelikle POST üstünden gelen başlık ve içerik var mı diye bakıyoruz,
//  varsa ekleme işlemini yapıp detayına yönlendiriyoruz
//  eğer yoksa zaten bu if bloğu içine girmez ve aşağıdaki form gözükür
//  böylece yeni bir kayıt ekleme işlemine dair ihtiyaçlarımızı tek dosyada toplamış olduk
if (isset($_POST['title']) and isset($_POST['content'])) {

    //  articles dizisine yeni bir eleman ekliyoruz
    $lastArticleId = createNewArticle($_POST['title'], $_POST['content']);

    //  burada işimiz bitti, son aritcle detayına gidelim
    header("Location: detail.php?id=" . $lastArticleId);
}

include "views/newarticle.php";
