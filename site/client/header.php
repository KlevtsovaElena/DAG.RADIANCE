    <!-- /HEADER -->   

        <nav class="nav">
            <div class="nav-wrapper d-flex">
                <a href="../index.php"><div class="logo">DAG.RADIANCE</div></a>
                <div class="nav-items">
                    <ul>
                    <li class="li-region"><a href="geography-and-climate.php">О регионе</a>
                            <ul class="submenu">
                                <li><a href="geography-and-climate.php">География и климат</a></li>
                                <li><a href="national-pecularities.php">Особенности</a></li>
                                <li><a href="fests-and-traditions.php">Праздники и традиции</a></li>
                            </ul>
                        </li>
                        <li class="li-route"><a href="route.php">Помощь в организации отдыха</a>
                            <ul class="submenu">
                                <li><a href="route.php#plane">Авиаперелет</a></li>
                                <li><a href="route.php#train">Ж/д проезд</a></li>
                                <li><a href="route.php#car">Авто</a></li>
                            </ul>
                        </li>
                        <li class="li-housing"><a href="housing.php">Где остановиться</a>
                            <ul class="submenu">
                                <li><a href="housing.php#hotels">Отели</a></li>
                                <li><a href="housing.php#guesthouses">Гостевые домики</a></li>
                            </ul>
                        </li>
                        <li class="li-tours"><a href="tours-catalog.php">Как отдохнуть</a>
                            <ul class="submenu">
                                <li><a href="places-catalog.php">Достопримечательности</a></li>
                                <li><a href="tours-catalog.php">Туры</a></li>
                                <li><a href="food.php">Рестораны</a></li>
                            </ul>
                        </li>
                        <li><a href="reviews.php">Отзывы</a></li>
                        <li><a href="contacts.php">Контакты</a></li>
                        <li><div class="call-nav-header" onclick="showFeedback()">Заказать звонок</div></li>
                    </ul>
                </div>
                <button class="btn-burger"><span class="nav-burger"></span></button>
            </div>
        </nav>
        <div class="mobile-nav">
            <ul>
                <li class="li-trigger"><a href="#"><span class="arrow"></span>О регионе</a>
                    <ul class="mobile-submenu">
                        <li><a href="geography-and-climate.php">География и климат</a></li>
                        <li><a href="national-pecularities.php">Особенности</a></li>
                        <li><a href="fests-and-traditions.php">Праздники и традиции</a></li>
                    </ul>
                </li>
                <li class="li-trigger"><a href="#"><span class="arrow"></span>Помощь в организации отдыха</a>
                    <ul class="mobile-submenu">
                        <li><a href="route.php#plane">Авиаперелет</a></li>
                        <li><a href="route.php#train">Ж/д проезд</a></li>
                        <li><a href="route.php#car">Авто</a></li>
                    </ul>
                </li>
                <li class="li-trigger"><a href="#"><span class="arrow"></span>Где остановиться</a>
                    <ul class="mobile-submenu">
                        <li><a href="housing.php#hotels">Отели</a></li>
                        <li><a href="housing.php#guesthouses">Гостевые домики</a></li>
                    </ul>
                </li>
                <li class="li-trigger"><a href="#"><span class="arrow"></span>Как отдохнуть</a>
                    <ul class="mobile-submenu">
                        <li><a href="places-catalog.php">Достопримечательности</a></li>
                        <li><a href="tours-catalog.php">Туры</a></li>
                        <li><a href="food.php">Рестораны</a></li>
                    </ul>
                </li>
                <li><a href="reviews.php">Отзывы</a></li>
                <li><a href="contacts.php">Контакты</a></li>
                <li><div class="call-nav-burger" onclick="showFeedback()">Заказать звонок</div></li>
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

        <div class="modalbox d-none" >
            <form class="modal-form">
                <div class="close-icon-flex"><div class="close-icon" onclick="closeFeedbackIcon()">x</div></div>
                <p class="feedback-title">Хочешь с нами,  но остались вопросы?</p>
                <p class="feedback-subtitle">Оставь заявку, мы перезвоним!</p>
                <input type="text" id="name" name="name" placeholder="Имя" value="" required>
                <input type="text" id="phone" name="phone" placeholder="Телефон" value="">
                <input type="text" id="mail" name="mail"  placeholder="Mail" value="">
                <div class="ta-center"><button class="modal-form__div modal-form__btn" onclick="sendExample()">ОТПРАВИТЬ</button></div>
            </form>
        </div>
    <!-- /HEADER -->