<?php
session_start();
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

            <form action="add-form-handler.php" method="post" enctype="multipart/form-data"> 
        <div>
            <label for="input_title">Titre</label>
            <input type="text" id="input_title" name="project_title">
        </div>
        <div>
            <label for="input_picture">Image</label>
            <input type="date" id="input_begin" name="project_begin">
        </div>
        <div>
            <label for="input_link">Lien du projet</label>
            <input type="text" id="input_link" name="project_link">
        </div>

        <div>
            <input type="submit">
        </div>

    </form>

</body>
</html>