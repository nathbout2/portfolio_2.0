<?php
session_start();

if($_SESSION['username']){
            if($_POST){
                if(
                isset($_POST['idproject']) &&!empty($_POST['idproject'])&&
                isset($_POST['project_title'])&&!empty($_POST['project_title'])&&
                isset($_POST['project_link'])&&!empty($_POST['project_link'])
            ){
            
            require_once("db-connect.php");
            $id=strip_tags($_POST['idproject']);
            $title =strip_tags($_POST['project_title']);
            $projetlink =strip_tags($_POST['project_link']);
        
            $sql ='UPDATE `project` SET `project_title`=:project_title,`project_link`=:project_link WHERE `idproject`=:idproject';


            $query = $db ->prepare($sql);

            $query->bindValue(':idproject', $id, PDO::PARAM_INT);
            $query->bindValue(':project_title', $title, PDO::PARAM_STR);
            $query->bindValue(':project_link', $projetlink, PDO::PARAM_STR);
            $query->execute();
            echo 'Sucess';

            $sql ='SELECT*FROM `project` WHERE `idproject`=:id';
            $query = $db->prepare($sql);
            $query->bindValue(':id', $id, PDO::PARAM_STR);
            $query ->execute();
            $result = $query->fetch();


?>
        <a href="projects-details.php?id=<?php echo $result['idproject'];?>"><button>Retour</button></a>

        <?php
        }else{
            echo 'Remplissez tous les champs';echo '<br><a href=home.php> Retour </a>';}

    }else{
        echo 'l\'Url n\'est pas valide';
    }
}else{
    echo 'Vous n\'êtes pas identifiez';
}
    
