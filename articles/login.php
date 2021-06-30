<?php

require "inc/init.php";

//  giriş sayfasında önce zaten bir kullanıcı girişi var mı diye bakalım
//  giriş yapılındıysa burada işi yok, ana sayfaya gitsin
//  çok istiyorsa önce çıkış yapıp sonra öyle gelsin
redirectIfLoggedIn();

//  bu sayfaya işleme konulması için POST ile kullanıcı adı ve parola geldiyse
//  bu verileri kullanarak giriş işlemine çabalanmalı
if (isset($_POST['username']) and isset($_POST['password'])) {
    if ($_POST['username'] == "admin" and $_POST['password'] == "123") {
        $_SESSION['username'] = "admin";
        header("Location: index.php");
        die();
    } else {
        $warning = "User credentials doesn't match.";
    }
}

include "views/login.php";
