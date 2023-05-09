<?php require_once('../classes/autoload.php'); ?>
<?php if (!isset($profile)) {
    header('Location: login.php');
} ?>


    <div class="menu-left">
        <a href="cabinet.php"><div class="logo">DAG.RADIANCE</div></a>
        <div class="profile-name">
        
            <h3><?= $profile['login']?></h3>
            <h3><?= $profile['role']?></h3>

        </div>
        <a href="index.php"><button class="btn-admin" onclick="logOut()">ВЫЙТИ</button></a>
        <div class="menu-left__items">
            <ul>
                <li><a href="add-account.php">СОЗДАТЬ УЧЁТНУЮ ЗАПИСЬ</a></li>
                <li><a href="tours.php">ТУРЫ</a></li>
                <li><a href="places.php">ДОСТОПРИМЕЧАТЕЛЬНОСТИ</a></li>
                <li><a href="contacts.php">КОНТАКТЫ</a></li>
            </ul>
            <div>
                <a href="bot.php">БОТ</a>
            </div>  
        </div>
        
    </div>