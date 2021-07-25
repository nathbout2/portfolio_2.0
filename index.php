<?php
    require_once('db-connect.php');
    $sql = 'SELECT * FROM `projet`';
    $query = $db->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    /* var_dump($result); */

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <meta name="description" content="Portfolio de Nathan Boutaud, web designer">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nathan</title>
    </head>
    <body>

<header>
        <h1>Portfolio</h1>
        <div class="box">
            <span></span>
            <span></span>
            <span></span>
        </div>

</header>

<main>
    <section class ="presentation">
        <div class="header__presentation">
            <img src="./img/work2.jpg" alt="" srcset="" class="header__presentation__photo">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quam minima nesciunt id vitae beatae necessitatibus blanditiis fugiat illo dignissimos illum suscipit quidem rerum eligendi officiis minus, exercitationem commodi perspiciatis.
            </p>
        </div>
    </section>


    <div class="container_start_projet">
        <div class="start_projet">
            <h2>Projet</h2>
        </div>
    </div>


    <section>
        <div class="header_projet">
            <h3>Fil d'ariane</h3>
        </div>
        <div class="projet">
            <img src="./img/work2.jpg" alt="" srcset="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quam minima nesciunt id vitae beatae necessitatibus blanditiis fugiat illo dignissimos illum suscipit quidem rerum eligendi officiis minus, exercitationem commodi perspiciatis.
            </p>
        </div>
        <div class="projet_picture">
            <img src="./img/work2.jpg" alt="" srcset="">
            <img src="./img/work2.jpg" alt="" srcset="">
        </div>
    </section>
    
   <section class="contact">
        <div class="header_contact">
            <h2>contact</h2>
        </div>
        <div class="wrapper">
                <input type="text" class="name formEntry" placeholder="Name" />
                <input type="text" class="email formEntry" placeholder="Email"/>
                <textarea class="message formEntry" placeholder="Message"></textarea>
                <button class="submit formEntry">Envoyer</button>
        </div>
    </section>
</main>

                <?php
                foreach ($result as $project) {
                ?>
                        <h2><?= $project['project_tittle'] ?></h2>
                <?php
                }
                ?>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="main.js"></script>
</body>
</html>