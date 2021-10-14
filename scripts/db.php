<?php
$connect = mysqli_connect('localhost', 'root', '', 'systwone');
if(!$connect) {
    echo "Error Connecting to the Database".mysqli_err($connect);
}
?>