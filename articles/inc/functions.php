<?php



function redirectIfNotLoggedIn($page = "login.php")
{
    if (!isset($_SESSION['username'])) {
        header("Location: " . $page);
        die();
    }
}

function redirectIfLoggedIn($page = "index.php")
{
    if (isset($_SESSION['username'])) {
        header("Location: " . $page);
        die();
    }
}

//function handleArticleId()
//{
    //$articles = getAllArticles();

    //if (!isset($_REQUEST['id']) || !isset($articles[$_REQUEST['id']])) {
        //header("Location: index.php");
        //die();
    //}

    //return $_REQUEST["id"];
//}

function getAllArticles()
{
    $dbcon = new PDO('mysql:host=localhost;dbname=sma_articles;charset=utf8mb4', 'root', '');
    $articles = $dbcon->query("SELECT * FROM articles ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);

    return $articles;
    
    //$articlesJson = file_get_contents('articles.json');
    //return json_decode($articlesJson, true);
}

function getArticleDetail($id)
{
    $dbcon = new PDO('mysql:host=localhost;dbname=sma_articles;charset=utf8mb4', 'root', '');
    $article = $dbcon
    ->query("SELECT * FROM articles WHERE id = " . $id)
    ->fetch(PDO::FETCH_ASSOC);
    return $article;
    
}

function createNewArticle($title, $content)
{
        $dbcon = new PDO('mysql:host=localhost;dbname=sma_articles;charset=utf8mb4', 'root', '');
        $insertQueryBase = $dbcon->prepare("INSERT INTO articles (title, content) VALUES (:title, :content)");
    
        $insertAction = $insertQueryBase->execute([
            'title' => $title,
            'content' => $content,
        ]);
    
        $lastArticleId = $dbcon->lastInsertId();
    
        return $lastArticleId;        
}

function editArticle($id, $newTitle, $newContent)
{
    $dbcon = new PDO('mysql:host=localhost;dbname=sma_articles;charset=utf8mb4', 'root', '');
    $insertQueryBase = $dbcon->prepare("UPDATE articles SET title=:title, content=:content WHERE id=:id");

    $insertAction = $insertQueryBase->execute([
        'id' => $id,
        'title' => $newTitle,
        'content' => $newContent,
    ]);
    
}

function deleteArticle($id)
{
    $id = (int)$_GET['id'];
    $dbcon = new PDO('mysql:host=localhost;dbname=sma_articles;charset=utf8mb4', 'root', '');
    $deletedRowsCount = $dbcon->exec("DELETE FROM articles WHERE id = " . $id);
    if ($deletedRowsCount == 0) header("Location: index.php");

}

function getRandomArticleId()
{
    $dbcon = new PDO('mysql:host=localhost;dbname=sma_articles;charset=utf8mb4', 'root', '');
    $articleRandomId = $dbcon->query("SELECT id FROM articles ORDER BY RAND() LIMIT 1;")->fetch(PDO::FETCH_ASSOC);
    return $articleRandomId['id'];

}
