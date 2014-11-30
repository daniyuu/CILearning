<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>
        <?php echo $title;?>
    </title>
    <?php echo $heading;?>
</head>
<body>
<ol>
    <?php foreach($todo as $item):?>
    <li>
        <?php echo $item;?>
    </li>
    <?php endforeach; ?>

</ol>
</body>
</html>