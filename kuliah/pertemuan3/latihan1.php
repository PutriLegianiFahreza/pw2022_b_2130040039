<?php
//pengulangan
//for
//while
//do..  while
//foreach : pengulangan khusus array
for ( $i = 0; $i < 5; $i++ ) {
    echo "Hallo Legi! <br>";
}
echo "<hr>";

$i = 0;
while( $i < 5 ) {
    echo "halo legi! <br>";
$i++;
}
echo "<hr>";

$i = 10;
do {
    echo "hello legi! <br>";
    $i++;
} while ( $i < 5 );
echo "<hr>";

?>
<! DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Latihan 1</title>
        <style>
            .warna-baris {
                background-color: cadetblue;
            }
        </style>
    </head>
    <body>
        <table border="1" cellpadding="10" cellspacing="0">
            <?php
            for( $i = 1; $i <= 3; $i++ ) {
                echo "<tr>";
                for ( $j = 1; $j <= 5; $j++ )
                echo "<td>$i,$j</td>";
            }
            
            ?>
        </table>

        <hr>

        <table border="1" cellpadding="10" cellspacing="0">
            <?php for ( $i = 1; $i <= 5; $i++ ) : ?>
                <?php if($i % 2 == 1 ) :  ?>
                    <tr class="warna-baris">
                <?php else : ?>
                    <tr>
                <?php endif; ?>
                    <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                        <td><?php echo "$i,$j"; ?></td>
                        <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
    </body>
</html>
<hr>

<?php
//pengkondisian / percabangan
//if else
//if else if else
//ternary
//switch

$x = 20;
if ( $x < 20 ) {
    echo "benar";
} else if ( $x == 20 ) {
    echo "bingo!";
} else {
    echo "salah";
}
?>


