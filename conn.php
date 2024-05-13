<?php
// gist:45ec057b00e41194079f6472a3f76c78
$link = new mysqli('localhost','NAME','PASSWORD','kano');
mysqli_set_charset($link, 'utf8');
if ($link->connect_error) {
    die("Failed to connect: " . $conn->connect_error);
}
$ranking = "kano_rank";
