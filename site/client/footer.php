    <!-- FOOTER  -->
    
    <footer >
        <div class="footer-container">
            <div class="footer-nav">
                <div class="logo">DAG.RADIANCE</div>
                <div class="footer-menu_container">
                    <div class="footer-nav__item">
                        <h4 class="footer-nav__title">Меню</h4>
                        <div class="footer-nav__links">
                            <a href="places-catalog.html">Достопримечательности</a>
                            <a href="tours-catalog.html">Туры</a>
                            <a href="contacts.html">Контакты</a>
                        </div>
                    </div>
                    <div class="footer-nav__item">
                        <h4 class="footer-nav__title">О регионе</h4>
                        <div class="footer-nav__links">
                            <a href="1.html">География и климат</a>
                            <a href="2.html">Колорит</a>
                            <a href="3.html">Праздники и традиции</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-links">
            <?php 
                $data = Contacts::getLinesApi(); 
                $contact = (object)$data[0];
            ?>
                <a href="tel:+<?= $contact->phone;?>" class="linkPic" target="_blank"><img src="img/icons/tel.png" alt="Позвонить" class="linkPic"></a>  
                <a href="mailto:<?= $contact->mail;?>" class="linkPic" target="_blank"><img src="img/icons/mail.png" alt="Написать" class="linkPic"></a>
                <a href="https://vk.com/<?= $contact->vk;?>" target="_blank"><img src="img/icons/vk.png" alt="Написать в VK" class="linkPic"></a>  
                <a href="tg://resolve?domain=<?= $contact->telegram;?>" target="_blank"><img src="img/icons/tg.png" alt="Написать в телеграмм" class="linkPic"></a> 
                <a href="whatsapp://send?phone=<?= $contact->whatsapp;?>" target="_blank"><img src="img/icons/wtsp.png" alt="Написать в whatsapp" class="linkPic"></a>  
                            
            </div>
        </div>
    </footer>
    <!-- /FOOTER  -->
