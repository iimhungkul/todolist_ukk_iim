<?php
    $mysqli=mysqli_connect('localhost','root','','dbtodo_iim');
    mysqli_select_db($mysqli,'dbtodo_iim') or die("database tidak ditemukan");
?> 