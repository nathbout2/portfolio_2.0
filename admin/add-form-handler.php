<?php
session_start();

if($_SESSION['username']){
    
    if($_POST){

        if(isset($_POST['project_title'])&&!empty($_POST['project_title'])&&
        isset($_POST['project_link'])&&!empty($_POST['project_link'])&&
        isset($_FILES['project_picture']) && !empty($_FILES['project_picture'])){
    
            require_once("db-connect.php");
            $title =strip_tags($_POST['project_title']);
            $projetlink =strip_tags($_POST['project_link']);

            if ($_FILES['project_picture']['error']) {     
                switch ($_FILES['project_picture']['error']){     
                        case 1: // UPLOAD_ERR_INI_SIZE     
                        echo"Le fichier dépasse la limite autorisée par le serveur (fichier php.ini) !";     
                        break;     
                        case 2: // UPLOAD_ERR_FORM_SIZE     
                        echo "Le fichier dépasse la limite autorisée dans le formulaire HTML !"; 
                        break;     
                        case 3: // UPLOAD_ERR_PARTIAL     
                        echo "L'envoi du fichier a été interrompu pendant le transfert !";     
                        break;     
                        case 4: // UPLOAD_ERR_NO_FILE     
                        echo "Le fichier que vous avez envoyé a une taille nulle !"; 
                        break;     
                }     
            }  else {     
        
                $target_dir = "../assets/images/admin_img/";
                $target_file = $target_dir . basename($_FILES["project_picture"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
                // Check if image file is a actual image or fake image
                if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["project_picture"]["tmp_name"]);
                    if($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }
                }
        
                // Check if file already exists
                if (file_exists($target_file)) {
                    echo "file already exists but it's all good bro.";
                    $uploadOk = 1;
                }
        
                // Check file size
                if ($_FILES["project_picture"]["size"] > 5000000) {
                    echo "Sorry, your file is too large.";
                    $uploadOk = 0;
                }
        
                // Allow certain file formats
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                }
        
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["project_picture"]["tmp_name"], $target_file)) {
                        echo "Le fichier ". htmlspecialchars( basename( $_FILES["project_picture"]["name"])). " a été téléversé.";
                        $picture = basename( $_FILES["project_picture"]["name"]) ;
        
                    }}}
                        
                        $sql ="INSERT INTO project (project_title, project_picture, project_link) VALUES(:project_title,:project_picture,:project_link)";
                        $query = $db ->prepare($sql);
                        $query->bindValue(':project_title', $title, PDO::PARAM_STR);
                        $query->bindValue(':project_link', $projetlink, PDO::PARAM_STR);
                        $query->bindValue(':project_picture', $picture, PDO::PARAM_STR);
                        $query->execute();
                        echo 'Sucess';
                        echo 'Les données ont été enregistré dans le base de données !'; 
                        echo'<br><a href=home.php> Retour </a>';
                    } else {
                        echo 'Remplissez tous les champs';echo '<br><a href=add-form.php> Retour </a>';
                    } 
                }
            } else{
            echo 'Il manque une information !';
        }else{
        echo 'Pour acceder à cette page vous devez publier un projet';
    } else {
    echo 'Vous n\'êtes pas identifiez';
}

?>