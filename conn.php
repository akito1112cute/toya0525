<?php
// 07157aa136177d866611b1c83e09cc88
$link = new mysqli('localhost','NAME','PASSWORD','kano');
mysqli_set_charset($link, 'utf8');
if ($link->connect_error) {
    die("Failed to connect: " . $conn->connect_error);
}
$ranking = "kano_rank";
