<?php
// gist:71fbf8a0ddbdb4c17ad04168fab681f2
$link = new mysqli('localhost','NAME','PASSWORD','kano');
mysqli_set_charset($link, 'utf8');
if ($link->connect_error) {
    die("Failed to connect: " . $conn->connect_error);
}
$ranking = "kano_rank";
