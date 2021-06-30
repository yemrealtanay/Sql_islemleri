<?php
//   bir dosyanın bağımlı olduğu diğer php dosyalarını yorumlamaya dahil etmek için require kullanıyoruz, bu dosya bulunmazsa sayfa fatal error vererek çalışmayı durduracaktır
require "inc/init.php";

$articles = getAllArticles();

include "views/home.php";
