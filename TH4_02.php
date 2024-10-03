<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TH4_02</title>
        <style>
           @import url("CSS/Th04_02.css");
        </style>
    </head>
<body>
    <div class ="root">
        <?php
        for($i=2;$i<10;$i++){
            echo '<div class="div-bg">';
            echo "<span> <b> Bảng cửu chương $i </b> </span>";
                for ($j=1;$j<=10;$j++){
                    echo $i.' x '.$j.' = '.$i*$j;
                    echo '<br>';
                }
            echo '</div>';
        }
        ?>

    </div>
</body>
</html>
