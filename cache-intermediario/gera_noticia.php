<?php 

$pdo = new PDO('mysql:host=localhost;dbname=blogcache', 'root'. '');

$corpo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce commodo molestie purus at vulputate. Maecenas vulputate nunc id leo molestie, ac posuere nulla rutrum. Morbi accumsan, tortor vitae consequat porttitor, ligula elit molestie dui, ut maximus lorem metus vitae sapien. Vivamus mollis pretium vulputate.";

for ($i = 0; $i < 1000; $i++) {

    $titulo = "Título da Notícia Número " . rand(0, 9999);
    
    $sql = "INSERT INTO posts (titulo, corpo) VALUES ('$titulo', '$corpo')";
    $sql = $pdo->query($sql);

}



