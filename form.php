<?php
if (isset($_POST["mail_value"])&&!empty($_POST["mail_value"])) {

    $objet = $_POST["object_value"];
    $mail = $_POST["mail_value"];
    $msg = $_POST["message_value"];
    
    $recipient = "druetjb@gmail.com";
    $subject = "Formulaire";
    
    $message=$mail.'<br>'.$msg;
    mail($recipient, $subject, $msg);

    echo "message envoyé à ".$recipient;
    

}else{

};
?>