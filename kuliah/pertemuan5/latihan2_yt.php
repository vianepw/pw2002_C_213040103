<?php 
// Pengulangan pada Array
// for / foreach

$angka = [3,2,15,20,11,77,89, 8, 9, 12, 56, 72];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Latihan 2</title>
        <style>
            .kotak {
                width: 50px;
                height: 50px;
                background-color: aqua;
                text-align: center;
                line-height: 50px;
                margin: 3px;
                float: left; 
            }
            .clear { clear: both; }
        </style>
        <body>

            <?php for ( $i = 0; $i < count($angka); $i++ ) { ?>
            <div class = "kotak"><?php echo $angka[$i]; ?></div>
            <?php } ?>

            <div class="clear"></div>

            <?php foreach( $angka as $a ) { ?>
                <div class = "kotak"><?php echo $a; ?></div>
            <?php } ?>

            <div class="clear"></div>

            <?php foreach( $angka as $a ) : ?>
                <div class = "kotak"><?= $a; ?></div>
            <?php endforeach; ?>


        </body>
    </head>
</html>