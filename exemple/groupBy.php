<?php

require_once __DIR__."/../vendor/autoload.php";
use Source\_App\Listing;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<label>
    <select>
        Select
        <?php
            $groupBy = (new Listing())->groupBy("table","optionValue","visible","dataGroup");
        ?>
    </select>
</label>
</body>
</html>
