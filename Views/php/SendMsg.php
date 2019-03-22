<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WeCon</title>
</head>
<body>
<?php include "Views/php/header.php"; ?>
    <div id = "gen">
        <h1>Nous contacter</h1>


        <h2>Une remarque ? Une question ?</h2>
        <h2>N'hésitez pas à nous envoyer votre message !</h2>

        <form action="index.php?action=Send_Message_Check" method="post" enctype="multipart/form-data">
            <div class = "text">
                <input type="text" name = "nom" id = "nom" required = "">
                <label class = "saisies">
                    <div class = "txt">Nom*</div>
                </label>
            </div>



            <div class = "text">
                <input type="text" name = "prenom" id = "prenom" required = "">
                <label class = "saisies">
                    <div class = "txt">Prénom*</div>
                </label>
            </div>



            <div class = "text">
                <input type="text" name = "mail" id = "mail" required = "">
                <label class = "saisies">
                    <div class = "txt">Email*</div>
                </label>
            </div>


            <div class = "text">
                <label class = "saisie" id = "msg">
                    Votre message...<br>
                    <textarea name="message" id = "message" required = ""></textarea>
                </label>
            </div>

            <div class="text">
                <label class = "saisie" id = "img">
                    Photo joignable<br>
                    <input type="file" name = "file" accept=".png, .jpeg, .png" class = "file">
                </label>
            </div>

            <label class = saisie>
                <input type="submit" value="Envoyer" class = "button">
            </label>
        </form>
    </div>

    <div class = "bloc"></div>

    <?php include "Views/html/footer.html"; ?>

</body>
<link rel="stylesheet" href="Views/css/SendMsg.css">
</html>