
<?php require_once('../classes/autoload.php'); ?>
<?php 
if(isset($_COOKIE['admin'])) {
    $pdo = \Connection::getConnection();
    $result = $pdo->query("SELECT id, first_name, last_name, login, role FROM admin WHERE token = '" . $_COOKIE['admin'] . "'");
    $row = $result->fetch();
?> 

            <div class="menu-left">
                <div class="logo">DAG.RADIANCE</div>
                <div class="profile-name">
                <?php if(isset($_COOKIE['admin'])) { ?>
                    <h3><?= $row['login']?></h3>
                    <h3><?= $row['role']?></h3>
                <?php } else { ?>
                    <h3>${first_name}</h3>
                    <h3>${last_name}</h3>
                    <h3>${role}</h3>
                <?php } ?>
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
<?php }?>


