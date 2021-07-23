<?php
    require_once('db-connect.php');
    $sql = 'SELECT * FROM `projet`';
    $query = $db->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    /* var_dump($result); */

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nathan</title>
    </head>
    <body>

<header>

    <div class="header__langingpage">
        <p class="header__title">Portfolio</p>
             <div class="box">
                <span></span>
                <span></span>
                <span></span>
            </div>
    </div>



    <div class="header__presentation">
        <img src="./img/work2.jpg" alt="" srcset="" class="header__presentation__photo">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quam minima nesciunt id vitae beatae necessitatibus blanditiis fugiat illo dignissimos illum suscipit quidem rerum eligendi officiis minus, exercitationem commodi perspiciatis.
        </p>
    </div>

</header>


    <div class="container_start_projet">
        <div class="start_projet">
            <p class="start_projet_txt">Projet</p>
        </div>
    </div>




    <div class="container_projet">

        <div class="header_projet">
            <p class="title_projet">Coeur web</p>
        </div>

        <div class="projet">
            <div class="photo"><img src="./img/work2.jpg" alt="" srcset=""></div>
            <div class="txt"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quam minima nesciunt id vitae beatae necessitatibus blanditiis fugiat illo dignissimos illum suscipit quidem rerum eligendi officiis minus, exercitationem commodi perspiciatis.</p></div>

            <div class="photo3"><img src="./img/work2.jpg" alt="" srcset=""></div>
            
            <div class="photo2"><img src="./img/work2.jpg" alt="" srcset=""></div>
        </div>
    </div>




    <div class="container_projet">
        <div class="header_projet">
            <p class="title_projet">Fil d'ariane</p>
        </div>
        <div class="projet">
            <div class="photo"><img src="./img/work2.jpg" alt="" srcset=""></div>
            <div class="txt"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quam minima nesciunt id vitae beatae necessitatibus blanditiis fugiat illo dignissimos illum suscipit quidem rerum eligendi officiis minus, exercitationem commodi perspiciatis.</p></div>
            <div class="photo3"><img src="./img/work2.jpg" alt="" srcset=""></div>
            <div class="photo2"><img src="./img/work2.jpg" alt="" srcset=""></div>
        </div>
    </div>


    
    <div class="container_contact">
        <div class="header_contact">
            <p class="title_contact">contact</p>
        </div>
        <div class="wrapper">
                <input type="text" class="name formEntry" placeholder="Name" />
                <input type="text" class="email formEntry" placeholder="Email"/>
                <textarea class="message formEntry" placeholder="Message"></textarea>
                <button class="submit formEntry">Envoyer</button>
        </div>
    </div>
</div>


                <?php
                foreach ($result as $project) {
                ?>
                <div class="grid-item">
                    <div class="title">
                        <h2><?= $project['project_tittle'] ?></h2>
                <?php
                }
                ?>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="main.js"></script>
</div>
</body>
</html>