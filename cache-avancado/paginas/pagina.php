<html>
    <head>
        <title>Página de teste</title>
    </head>
    <body>
        <?php 

            try {
                $pdo = new PDO('mysql:host=localhost;dbname=blogcache', 'root'. '');
                $sql = "SELECT * FROM posts ORDER BY RAND()";
                $sql = $pdo->query($sql);
                foreach($sql->fetchAll() as $noticia) {
                    $cor = rand(0, 999999);
                    $len = rand(0, 100);
               
           
        ?> 
        <div style="width: 250px; float: left; margin: 20px; background-color: #<?= $cor ?>;padding:20px;">
            <strong><?= $noticia['titulo']; ?></strong><br />
            <?= substr($noticia['corpo'], 0, $len) ?>
        </div>
        <?php 
                 }
             } catch(PDOException $e) {
                echo 'Erro: ' . $e->getMessage();
                exit;
             } 
        ?>
    </body>
</html>