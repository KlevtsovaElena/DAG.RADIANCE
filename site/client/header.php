    <!-- /HEADER -->   

        <nav class="nav">
            <div class="nav-wrapper d-flex">
                <a href="../index.php"><div class="logo">DAG.RADIANCE</div></a>
                <div class="nav-items">
                    <ul>
                        <li><a href="../index.php">Главная</a></li>
                        <li><a href="geography-and-climate.php">О регионе</a></li>
                        <li><a href="places-catalog.php">Достопримечательности</a></li>
                        <li><a href="tours-catalog.php">Туры</a></li>
                        <li><a href="contacts.php">Контакты</a></li>
                    </ul>
                </div>
                <div class="account"><a href="#">Заказать звонок</a></div>
                <button class="btn-burger"><span class="nav-burger"></span></button>
            </div>
        </nav>
        <div class="mobile-nav">
            <ul>
                <li><a href="../index.php">Главная</a></li>
                <li><a href="geography-and-climate.php">О регионе</a></li>
                <li><a href="places-catalog.php">Достопримечательности</a></li>
                <li><a href="tours-catalog.php">Туры</a></li>
                <li><a href="contacts.php">Контакты</a></li>
                <div class="burger-links">
                <?php 
                    $data2 = Contacts::getLinesApi(); 
                    $contact = (object)$data2[0];
                ?>
                    <a href="tel:+<?= $contact->phone;?>" class="linkPic" target="_blank"><img src="img/icons/tel.png" alt="Позвонить" class="linkPic"></a>  
                    <a href="mailto:<?= $contact->mail;?>" class="linkPic" target="_blank"><img src="img/icons/mail.jpg" alt="Написать" class="linkPic"></a>
                    <a href="https://vk.com/<?= $contact->vk;?>" target="_blank"><img src="img/icons/vk.jpg" alt="Написать в VK" class="linkPic"></a>  
                    <a href="tg://resolve?domain=<?= $contact->telegram;?>" target="_blank"><img src="img/icons/tg.png" alt="Написать в телеграмм" class="linkPic"></a> 
                    <a href="whatsapp://send?phone=<?= $contact->whatsapp;?>" target="_blank"><img src="img/icons/wtsp.png" alt="Написать в whatsapp" class="linkPic"></a>               
            </div>
            </ul>
        </div>
    <!-- /HEADER -->