<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/article.css">
    <title>Blog | <?= $title ?></title>
</head>
<body>
    <?php require_once 'views/components/navigation.html.php'; ?>
    <?= $content ?>
    <?php require_once 'views/components/footer.html.php'; ?>