<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

spl_autoload_register(function ($name)
{
    include_once str_replace("\\", DIRECTORY_SEPARATOR, $name) . '.php';
});

$controllerName;
$defaultAction;

$controller = $_GET['con'] ?? 'article';

switch ($controller){
    case 'article':
        $controllerName = 'Controllers\ArticleController';
        $defaultAction = 'index';
        break;
    case 'page':
        $controllerName = 'Controllers\PageController';
        $defaultAction = 'about';
        break;
    default:
        $controllerName = 'Controllers\PageController';
        $defaultAction = 'pageNotFound';
        break;
}

$action = ($_GET['act']) ?? $defaultAction;

$ctl = $controllerName(new \Core\Request($_GET, $_POST, $_SERVER ));
$act = $action;

//include_once 'Controllers/Controller.php';
//include_once 'Controllers/ArticleController.php';
//include_once 'Models/ArticleModel.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 2</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>

<div id="wrapper">
    <?php
    $ctl->$act();
    ?>
</div>

</body>
</html>


