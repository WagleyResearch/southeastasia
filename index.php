<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>An overview of imperialism in Southeast Asia</title>
        <link rel="stylesheet" media="screen and (max-width: 900px)" type="text/css" href="small.css">
        <link rel="stylesheet" media="screen and (min-width: 901px)" type="text/css" href="main.css">
    </head>
    <body>
        <?php
        include 'se.php';
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
