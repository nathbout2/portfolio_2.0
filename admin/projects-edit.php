<?php
session_start();

if($_SESSION['username']){
    if(isset($_GET['id']) &&!empty($_GET['id'])) {
        require_once('db-connect.php');
        $id = strip_tags($_GET['id']);
        $sql ='SELECT*FROM `project` WHERE `idproject`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query ->execute();
        $result = $query->fetch();
        /* var_dump($result); */
    }else{
        echo 'l\'Url n\'est pas valide';
    }
}else{
    echo 'Vous n\'êtes pas identifiez';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un projet</title>
</head>
<body>

            <form action="projects-edit-form-handler.php" method="post">
        <div>
            <label for="input_title">Titre</label>
            <input type="text" id="input_title" name="project_title" value="<?= $result['project_title']?>" require>
        </div>
        <div>
            <label for="input_link">Lien</label>
            <input type="text" id="input_link" name="project_link" value="<?= $result['project_link']?>">
        </div>
        <div>
            <input type="hidden" name="idproject" value="<?=$result['idproject']?>">
            <input type="submit">
        </div>

    </form>
<br>
<br>
<br>
    <form action="picture-edit-handler.php" method="post" enctype="multipart/form-data">

<div>
    <label for="input_picture">Aperçu</label>
    <input type="file" id="input_picture" name="project_picture">
    <input type="hidden" name="idproject" value='<?= $result['idproject'] ?>'>
    <div><input type="submit"></div>
</div>
</form>

<br>
<br>
<br>

    <form action="logo-edit-handler.php" method="post" enctype="multipart/form-data">

<div>
    <input type="submit">
</div>

</form>
<br>

<a href="projects-details.php?id=<?=$result['idproject']?>"><button>Retour</button></a>
</body>
</html>


