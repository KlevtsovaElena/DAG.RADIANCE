<?php require_once('../classes/autoload.php'); ?>
<?php if (!isset($profile)) {
    header('Location: login.php');
} ?>


    <div class="menu-left">
        <a href="../client/index.php" target="_blank"><div class="logo">DAG.RADIANCE</div></a>
        <div class="profile-name">
        
            <h3><?= $profile['login']?></h3>
            <h3><?= $profile['role']?></h3>

        </div>
        <a href="index.php"><button class="btn-admin" onclick="logOut()">Выйти</button></a>
        <div class="menu-left__items">
            <div class="menu-left__list">
            <a href="add-account.php"><div>Создать учётную запись</div></a>
            <a href="tours.php"><div>Туры</div></a>
            <a href="places.php"><div>Достопримечательности</div></a>
            <a href="contacts.php"><div>Контакты</div></a>
            </div>
            <div>
                <a href="bot.php">БОТ</a>
            </div>  
        </div>
        
    </div>