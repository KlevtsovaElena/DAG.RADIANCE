<?php require_once('../classes/autoload.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPannel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

</head>
<body>
    
<div id="containerPage">
        <div class="cabinet">
        <?php include "cabinet-menu.php";?>


            <div class="work-area">
                <div class="work-area__title">
                    <h1>ДОБАВИТЬ НОВЫЙ АККАУНТ</h1>
                </div>


                <div class="form-add-account">
                <form>
                    <input type="text"  name="first_name" placeholder="first_name" required>
                    <input type="text"  name="last_name" placeholder="last_name">
                    <input type="text"  name="login" placeholder="login">
                    <input type="text"  name="role" placeholder="role">
                    <button class="btn-admin" onclick="addAccount()">Добавить учётную запись</button>
                    <div class="info"></div>
                </form>
                </div>

                <div class="new-login">
                    
                </div>

            </div>

        </div>
    </div>

    <script src="js/admin.js"></script>
</body>
</html>