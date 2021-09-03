<?php

if(isset($_POST['user_name'])&&!empty($_POST['user_name'])&&isset($_POST['user_email'])&&!empty($_POST['user_email'])&&isset($_POST['user_password'])&&!empty($_POST['user_password'])&&isset($_POST['user_confirmation'])&&!empty($_POST['user_confirmation'])){

   
    
    if($_POST['password']=== $_POST['confirmation']){
        require_once('db-connect.php'); //la liaison à la base de Données se fait après les vérifications
        $username=strip_tags($_POST['user_name']); /* Prendre le "name" */
        $email=strip_tags($_POST['user_email']); // strip_tag permet de sécurisé et d'éviter les injections dans le php"
        $password=strip_tags($_POST['user_password']);
        $confirmation=strip_tags($_POST['user_confirmation']);
        $password_encrypt= password_hash ($password, PASSWORD_DEFAULT);
        
    //faire requete SQL 
        $sql ="INSERT INTO users(user_name,user_email,user_password) VALUES(:user_name, :user_email, :user_password)";
        $query = $db ->prepare($sql);
        $query->bindValue(':user_name', $user_name, PDO::PARAM_STR);
        $query->bindValue(':user_email', $user_email, PDO::PARAM_STR);
        $query->bindValue(':user_password', $user_password_encrypt, PDO::PARAM_STR);
        $query->execute();
        echo 'Sucess';
        echo'<br><a href=admin.php> Retour </a>';
        
    }else{
        echo 'Les mots de passe ne sont pas identiques';
    }


}else{
    echo 'Veuillez remplir tous les champs du formulaire';
}



