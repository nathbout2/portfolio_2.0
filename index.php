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
        <link rel="shortcut icon" href="./img/computer_boy.png" type="image/png">
        <title>Nathan</title>
    </head>
    <body>


    <div class="menu">
  <div class="label">Menu</div>
  <div class="spacer"></div>
  <div class="item"><a href="#container_start_projet"><span>Projet</span></a></div>
  <div class="item"><a href="#contact"><span>Contact</span></a></div>
  <div class="item"><a href="https://github.com/nathbout2"><span>Github</span></a></div>
  <div class="item"><a href="https://www.linkedin.com/in/nathan-boutaud/"><span>LinkedIn</span></a></div>
</div>

<header>
        <h1>Portfolio</h1>
        <h3>Boutaud Nathan</h3>
        <div class="box">
            <span></span>
            <span></span>
            <span></span>
        </div>

</header>

<main>
    <section class ="presentation">
        <div class="header__presentation">
        <img src="./img/computer_boy.png" class="computer_boy_logo" class="header__presentation__photo">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quam minima nesciunt id vitae beatae necessitatibus blanditiis fugiat illo dignissimos illum suscipit quidem rerum eligendi officiis minus, exercitationem commodi perspiciatis.
            </p>
        </div>
    </section>


    <div id="container_start_projet"class="container_start_projet">
        <h2>Projet</h2>
    </div>


    <section class ="projet">
        <div class="header_projet">
            <h3>Fil d'ariane</h3>
        </div>
        <div class="projet_1">
            <img src="./img/work2.jpg" alt="" srcset="" class="projet_1-img">
            <p class="text_projet">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quam minima nesciunt id vitae beatae necessitatibus blanditiis fugiat illo dignissimos illum suscipit quidem rerum eligendi officiis minus, exercitationem commodi perspiciatis.
            </p>
        </div>
        <div class="projet_picture">
            <img src="./img/work2.jpg" alt="" srcset="">
            <img src="./img/work2.jpg" alt="" srcset="">
        </div>
    </section>
    
   <section id="contact" class="contact">
    <h1>Contact</h1>
    <div class="contact_input">
    <div id="global">

<form action="form.php" method="post">
<label for="objet">Objet</label>
<input type="text" value="" id="objet" name="object_value">

</div>
<div>
<label for="mail">E-mail :</label>
<input type="email" value="" id="mail" name="mail_value">

</div>
<div>
<label for="msg">Message :</label>
<textarea name="message_value" id="msg"></textarea>
</div>


</section>

      
<script src="https://unpkg.com/scrollreveal"></script>
<script src="main.js"></script>
</body>
</html>