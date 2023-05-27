<?php require_once('../classes/autoload.php'); ?>
<?php if (!isset($profile)) {
    header('Location: login.php');
} ?>

    <div class="menu-top">
        <a href="../index.php" target="_blank"><div class="logo">DAG.RADIANCE</div></a>
        <div class="d-flex">
            <div class="profile-name">        
                <h3><?= $profile['login']?></h3>
                <h3><?= $profile['role']?></h3>
            </div>
            <a href="index.php" class="btn-admin" onclick="logOut()">Выйти</a>
        </div>
    </div>
    <div class="menu-left">
        <div class="menu-left__items">
        
            <div class="menu-left__list">
                <a href="cabinet.php"><div><img src="../client/img/icons/house-svgrepo-com.svg" alt="house-icon"></div></a>  
            </div> 
            <div class="menu-left__list">
                <?php if($profile['role']=='admin') { ?>
                    <a href="add-account.php"><div>Создать учётную запись</div></a>
                <?php } ?>
                <a href="tours.php"><div>Туры</div></a>
                <a href="places.php"><div>Достопримечательности</div></a>
                <a href="contacts.php"><div>Контакты</div></a>
                <a href="hotels.php"><div>Гостиницы</div></a>
                <a href="guides.php"><div>Гиды</div></a>
            </div>
            <!-- <div class="menu-left__list">
                <a href="bot.php"><div>БОТ</div></a>
            </div>   -->
        </div> 
    </div>