<?php
// 'db' => [
    'default' => env('DB_CONNECT', 'default'),                  // 默认连接
    'connects' => [
        'default' => [
            'host'     => env('DB_DEFAULT_HOST', '60.249.179.122'),  // 主库
            'port'     => env('DB_DEFAULT_PORT', 3306),         // 端口
            'username' => env('DB_DEFAULT_USERNAME', 'akito1112cute'),       // 用户名
            'password' => env('DB_DEFAULT_PASSWORD', 'toaki819'),       // 密码
            'database' => env('DB_DEFAULT_DATABASE', 'kano'),       // 数据库名
            'charset'  => 'utf8mb4',                            // 编码
            'driver'   => 'mysql',                              // 数据库驱动
        ],
    ],
],
$link = new mysqli('localhost','NAME','PASSWORD','kano');
mysqli_set_charset($link, 'utf8');
if ($link->connect_error) {
    die("Failed to connect: " . $conn->connect_error);
}
$ranking = "kano_rank";
