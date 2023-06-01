    <!-- feedback-form -->   

    <div class="modalbox d-none" >
        <form action="#" class="modal-form" id="feedback-form " method="post">
            <input type="hidden" name="formName" value="formFeedback" />
            <div class="close-icon-flex"><div class="close-icon" onclick="closeFeedbackIcon()">x</div></div>
            <p class="feedback-title">Хочешь с нами,  но остались вопросы?</p>
            <p class="feedback-subtitle">Оставь заявку, мы перезвоним!</p>
            <input type="text" id="name" name="name" placeholder="Имя" value="">
            <input type="tel" id="phone" name="phone" placeholder="Номер телефона" value="" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
            <input type="text" id="mail" name="mail"  placeholder="email@mail.ru" value="">
            <div class="ta-center"><button class="modal-form__div modal-form__btn"onclick="sendFormFeedback()">ОТПРАВИТЬ</button></div>
            <div id="result" class="result"></div>
        </form>
    </div>
    <div class="loading" ></div>

    <div id="success" class="modalbox d-none">
        <form class="modal-form yes">
            <div class="close-icon-flex"><div class="close-icon" onclick="closeFeedbackIconSuccess()">x</div></div>
            <p class="feedback-subtitle success"></p>
        </form>
    </div>

    <!-- /feedback-form -->