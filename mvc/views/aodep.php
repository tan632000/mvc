<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div{
            padding:20px;
        };
        
    </style>
</head>
<body>
    <div id="header" style="background-color:blueviolet"></div>
    <div id="content">
        <?php 
        require_once('./mvc/views/pages/'.$data['Page'].'.php');
        ?>

    </div>
    <div id="footer" style="background-color:orange"></div>
</body>
</html>