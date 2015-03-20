<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>An overview of imperialism in Southeast Asia</title>
        <link rel="stylesheet" type="text/css" href="new.css">
    </head>
    <body>
        <?php
        include 'se.php';
        echo '<div style="position: inline-block;" id="first"></div>';
        include 'voc.php';
        echo '<hr>';
        include 'burma.php';
        echo '<hr>';
        include 'javawars.php';
        echo '<hr>';
        include 'afghanistan.php';
        echo '<hr>';
        include 'siam.php';
        echo '<hr>';
        include 'biblio.php';
        echo '<hr>';
        ?>
    </body>
</html>
