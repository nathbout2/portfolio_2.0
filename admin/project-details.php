<link rel="stylesheet" href="admin_styles/styles_admin.css">

<?php
session_start();

if($_SESSION['user_name']){
    if(isset($_GET['id']) &&!empty($_GET['id'])) {
        require_once('db-connect.php');
        $id = strip_tags($_GET['id']);
        $sql ='SELECT*FROM `project` WHERE `idproject`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_STR);
        $query ->execute();
        $result = $query->fetch();
        /* var_dump($result); */
        echo'ça marche <br>';
    }else{
        echo'id manquante';
    }
}else{
    echo'identifiez-vous';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<img src="../assets/images/admin_picture/<?= $result['project_picture_1'] ?>" class='projects_details--logo'>
<?=$result['project_title']?> <br>
<?=$result['project_context']?> <br>
<?=$result['project_lien_projet']?> <br>

<a href="projects-edit.php?id=<?=$result['idproject']?>">Modifier le Projet <?=$result['project_title']?></a><br>
<a href="projects-delete.php?id=<?=$result['idproject']?>">Supprimer <?=$result['project_title']?></a>
<a href="home.php"><button>Retour</button></a>

</body>
</html>

