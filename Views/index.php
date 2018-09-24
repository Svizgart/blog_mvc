<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 2</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>


<?php foreach ($articles as $article):?>
    <hr>
    <a href="index.php?con=article&act=show&id=<?php echo $article['id']?>"><?php echo  $article['name'] ?>
    </a>

<?php endforeach; ?>

</body>
</html>


