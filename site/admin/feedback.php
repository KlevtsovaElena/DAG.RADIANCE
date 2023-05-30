<?php require_once('../classes/autoload.php'); ?>
<?php $profile = require('works/check.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPannel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/form.feedback.css">
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
                    <h1>СООБЩЕНИЯ ФОРМЫ feedback</h1>
                </div>
                
                <div class="feedback-container">
                    <div class="feedback-new">
                        <h3>Новые сообщения</h3>
                        <div class="feedback-new__container"> 
                        <?php foreach($newMessages as $newMessage) { ?>
                            <form action="works/feedback-done.php" class="form-feedback-new" method="post">
                                <input type="hidden" name="id" value="<?=$newMessage['id'];?>"> 
                                <input type="hidden" name="manager" value="<?=$profile['login'];?>">
                                <p>Получено: <input type="text" id="date-reg" name="date-reg" value="<?=$newMessage['date-reg'];?>" readonly>
                                от <input type="text" id="name" name="name" value="<?=$newMessage['name'];?>" readonly></p>
                                <p><textarea id="message" name="message" readonly><?=$newMessage['message'];?></textarea></p>
                                <p>Телефон <input type="text" id="phone" name="phone" value="<?=$newMessage['phone'];?>" readonly>
                                Mail <input type="text" id="mail" name="mail" value="<?=$newMessage['mail'];?>" readonly></p>
                                <div class="feedback-btn d-block"><button type="sybmit">Исполнено</button></div>
                            </form>
                        <?php } ?>
                    </div>
                    </div>
                    <div class="feedback-archive">
                        <h3 onclick="toogleArchiveMessage()" class="title-show">Показать архивные сообщения</h3>
                        <h3 onclick="toogleArchiveMessage()" class="title-hidden d-none">Скрыть архивные сообщения</h3>
                        <div class="feedback-archive__container d-none"> 
                        <?php $archiveMessages = Feedback::getLinesApiIsDone(1);
                            for ($i = count($archiveMessages)-1; $i >= 0; $i--) { ?>  
                            <form class="form-feedback-archive">
                                <div class="bg-archive"></div>
                                <input type="hidden" name="id" value="<?=$archiveMessages[$i]['id'];?>"> 
                                <p>Получено: <input type="text" id="date-reg" name="date-reg" value="<?=$archiveMessages[$i]['date-reg'];?>" readonly>
                                от <input type="text" id="name" name="name" value="<?=$archiveMessages[$i]['name'];?>" readonly></p>
                                <p><textarea id="message" name="message" readonly><?=$archiveMessages[$i]['message'];?></textarea></p>
                                <p>Телефон <input type="text" id="phone" name="phone" value="<?=$archiveMessages[$i]['phone'];?>" readonly>
                                Mail <input type="text" id="mail" name="mail" value="<?=$archiveMessages[$i]['mail'];?>" readonly></p>
                                <p>Исполнено <input type="text" id="manager" name="manager" value="<?=$profile['login'];?>" readonly>
                                <input type="text" id="date-update" name="date-update" value="<?=$archiveMessages[$i]['date-update'];?>" readonly></p> 
                        
                            </form>
                        <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script src="js/main.js"></script>
    <script src="js/feedback.js"></script>
</body>
</html>