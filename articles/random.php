<?php
//  elimizdeki makalelerden rastgele bir tanesini seçip onun detayına yönlendirme yapmalıyız

//  öncelikle makalelere erişimimiz olmalı
require_once "inc/init.php";

//  rastgele seçilen id detayına yönlendirme yapalım
header("Location: detail.php?id=" . getRandomArticleId());
