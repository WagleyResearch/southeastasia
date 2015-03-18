<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>An overview of imperialism in Southeast Asia</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <?php
	echo '<div style="margin-bottom: 10px;">';
        include 'voc.php';
	echo "</div>";
        echo '<div style="display: clear;"><hr></div>';
	echo '<div style="margin-top: 10px; margin-bottom: 10px;">';
        include 'burma.php';
        echo '<div style="display: clear;"><hr></div>';
        include 'javawars.php';
        echo "<hr>";
	echo "</div>";
        ?>
    </body>
</html>
