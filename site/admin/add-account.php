<?php require_once('../classes/autoload.php'); ?>
<?php $profile = require('works/check.php');?>
<?php if ($profile['role'] !== 'admin') { 
    header('Location: cabinet.php');
} ?>

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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

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
                        <div class="d-flex"><p>Имя</p><input type="text"  name="first_name" placeholder="first_name" required>
                        <p>Фамилия</p><input type="text"  name="last_name" placeholder="last_name"></div>
                        <div class="d-flex"><p>Логин</p><input type="text"  name="login" placeholder="login">
                        <p>Роль</p><input type="text"  name="role" placeholder="role"></div>
                        <p><button onclick="addAccount()">Добавить учётную запись</button></p>
                        <div class="info"></div>
                    </form>
                </div>


            </div>

        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>