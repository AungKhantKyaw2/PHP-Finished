<?php

    echo "i am articles/index from view";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Index</title>
</head>
<body>
        <h1>Artice Index</h1>

        <p><?php echo APPNAME; ?></p>
        <p><?php echo URLROOT; ?></p>
        <p><?php echo APPURL; ?></p>

        <p><?php echo $datas['greeting']; ?></p>
        
        <p><?php echo $datas['caption']; ?></p>

        <ul>
              <?php foreach($datas['articles'] as $article): ?>
                <li><?php echo $article->title;?></li>
                <li><?php echo $article->content;?></li>
            <?php endforeach; ?>
        </ul>
        
</body>
</html>