<?php
session_start();

if($_SESSION['username']){
    require_once('db-connect.php');
    $_sql = 'SELECT * FROM `project`';
    $query = $db->prepare($_sql);
    $query ->execute();
    $result = $query->fetchALL(PDO::FETCH_ASSOC);
    /* var_dump($result); */

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
    <div>
        <?php echo $_SESSION['success'];?>
    </div>
    <div>Bonjour <?php echo $_SESSION['username'];?> </div>
<div class="admin_projet">
    <a href="add-form.php"><button>Ajouter un projet</button></a><br>

<?php
    foreach ($result as $projet) {
?>
 <a href="projects-details.php?id=<?=$projet['idproject']?>"><?=$projet['project_title']?></a>
<?php
    }
?>
</div>
<br>
<a href="admin.php"><button>Retour</button></a><br>
   
</body>
</html>