<!doctype html>
<html lang="e">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div{
            padding: 20px;
            height: 30px;
            width: 100%;
        }
        #footer,#header{
            background-color: red;
        }
    </style>
</head>
<body>
<div id ="header">
    <?php
        require_once "./mvc/views/element/Head.php";
    ?>
</div>
<div id ="content">
    <?php
        require_once "./mvc/views/page/".$data["Page"].".php";
    ?>
</div>
<div id ="footer">
    <?php
    require_once "./mvc/views/element/Footer.php";
    ?>
</div>
</body>
</html>