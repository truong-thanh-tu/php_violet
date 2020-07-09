<!doctype html>
<html lang="e">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    require_once "./mvc/views/links/Font.php";

    require_once "./mvc/views/links/Css.php";

    ?>

</head>
<body>
<div id ="header">
    <?php
        require_once "./mvc/views/element/Head.php";
    ?>
</div>
<div id ="content">
    <?php
        require_once "./mvc/views/".$data["File"]."/".$data["Page"].".php";
    ?>
</div>
<div id ="footer">
    <?php
        require_once "./mvc/views/element/Footer.php";
    ?>
</div>
    <?php
        require_once "./mvc/views/links/Javascript.php";
    ?>
</body>
</html>