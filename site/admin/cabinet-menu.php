<?php require_once('../classes/autoload.php'); ?>
<?php if (!isset($profile)) {
    header('Location: login.php');
} ?>

    <div class="menu-top">
        <a href="../client/index.php" target="_blank"><div class="logo">DAG.RADIANCE</div></a>
        <div class="d-flex">
            <div class="profile-name">        
                <h3><?= $profile['login']?></h3>
                <h3><?= $profile['role']?></h3>
            </div>
            <a href="index.php"><button class="btn-admin" onclick="logOut()">Выйти</button></a>
        </div>
    </div>
    <div class="menu-left">
        <div class="menu-left__items">
        
            <div class="menu-left__list">
                <a href="cabinet.php"><div><img src="../client/img/icons/house-svgrepo-com.svg"></div></a>  
            </div> 
            <div class="menu-left__list">
                <a href="add-account.php"><div>Создать учётную запись</div></a>
                <a href="tours.php"><div>Туры</div></a>
                <a href="places.php"><div>Достопримечательности</div></a>
                <a href="contacts.php"><div>Контакты</div></a>
            </div>
            <div class="menu-left__list">
                <a href="bot.php"><div>БОТ</div></a>
            </div>  
        </div> 
    </div>