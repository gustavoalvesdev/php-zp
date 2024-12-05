<?php 

$json = file_get_contents('https://jsonplaceholder.typicode.com/todos/1');
$json = json_decode($json);

echo 'ID do Usuário: ' . $json->userId;
echo 'ID: ' . $json->id;
