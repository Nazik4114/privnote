

<div id="content" class="">
<div id="new_note">

    <div>
        <h1 class="">Нова записка <a id="new_note_help_toggle" class="help_button">?</a></h1>        
    </div>
        
    <div id="new_note_help" class="section hidden help_block">
        За допомогою Privnote ви можете відправляти записки, що самознищуются після прочитування<br>
        1. Напишіть записку нижче, зашифруйте ії та отримайте посилання<br>
        2. Надішліть посилання тому, кому ви хочете, щоб він прочитав записку<br>
        3. Записка самознищиться після прочитування ії отримувачем<br>
        <br>
        Натисніть кнопку налаштувань, щоб встановити пароль для записки, встановити дату, до якої можна прочитати записку та отримати підтвердження про прочитування.<br>
        <br>
        Щоб зрозуміти, як працює Privnote, дивіться
        <a href="/info/about">про нас</a>. 
    </div>
    <?php 
    if($flag_is_valid){
    echo("<h2 class='hidden' id='err'>Text is not valid</h2>");
    }
    else{
        echo("<h2 class='' id='err'>Text is not valid</h2>");
    }
    ?>
    
    <form action="<?= "index.php?action=save" ?>" method="post" id="forma">
    <textarea id="note_raw" name="note"  rows="4" min="2" placeholder="Напишіть свою записку тут"></textarea>

        <div class="col span_2_of_6">
        <input type="submit"  id="encrypt_note" class="primary_button" value="Створити записку"/>
        </div>
        <script src="<?=JS_PATH."Js2.js"?>"></script>
</form>
<div id="advanced_options" class="hidden" >
        <h3>Записка самознищиться</h3>
        <div class="section group">
            <div class="col span_3_of_6">
            <label>
                <select id="duration_hours" name="duration_hours">
                    <option value="0">після прочитування</option>
                    <option value="1">через 1 годину</option>
                    <option value="24">Через 24 години</option>
                    <option value="168">Через 7 днів</option>
                    <option value="720">Через 30 днів</option>
                </select>
            </label>
            </div>

            <div class="col span_3_of_6" id="confirmation_option">
                <label class="checkbox">
                    <input type="checkbox" name="destroy_without_confirmation" id="destroy_without_confirmation">
                    Не питати про підтверждення перш ніж показати та знищити повідомлення.
                </label>
            </div>
        </div>
        
        <h3>Секретний пароль</h3>
        <div class="section group">
            <div class="col span_3_of_6">
            <label>
                Введіть пароль для шифрування записки
                <input id="manual_password" type="password">
                <span id="very_weak_manual_password"   class="caption very_weak hidden">Дуже слабкий</span>
                <span id="weak_manual_password"        class="caption weak hidden">Слабкий</span>
                <span id="good_manual_password"        class="caption good hidden">Добрий</span>
                <span id="strong_manual_password"      class="caption strong hidden">Сильний</span>
                <span id="very_strong_manual_password" class="caption very_strong hidden">Дуже сильний</span>
            </label>
            </div>
            <div class="col span_3_of_6">
            <label>
                Підтвердження паролю
                <input id="manual_password_confirm" type="password">
                <span class="error hidden" id="error_password_mismatch"> Паролі не однакові</span>
            </label>
            </div>
        </div>
        
        <h3>Нотіфікація про знищення</h3>
        <div class="section group">
            <div class="col span_3_of_6">
            <label>
                Отримати сповіщення про прочитування записки по e-mail
                <input id="notify_email" name="notify_email" type="text">
                <span class="error hidden" id="error_notify_email_invalid">Неправильна e-mail адреса</span>
            </label>
            </div>
            <div class="col span_3_of_6">
            <label>
                Назва посилання для записки (опціонально)	
                <input id="notify_ref" name="notify_ref" type="text" maxlength="7">
            </label>
            </div>
        </div>

        <div class="section group hidden" id="advanced_options_tip">
            Підказка: щоб зберегти ці налаштування, додайте цю сторінку до закладок
        </div>
    </div>

    
    <div id="error_connection" class="error_block hidden">
        Неможливо з&#39;єднатися з сервером Privnote. Будь ласка, перевірте ваше з&#39;єднання з Інтернетом та спробуйте ще раз
    </div>
    <div id="error_ajax" class="error_block hidden">
    </div>
    <div id="error_note_is_empty" class="error_block hidden">
        Помилка: текст записки порожній
    </div>


    <div class="section group">
        <div class="col span_2_of_6 right">
            <button id="advanced_options_show" class="button">
                Показати параметри <span id="options_on_notice_asterisk" class="hidden">(*)</></button>
            <button id="advanced_options_hide" class="button hidden">
                Вимкнути налаштування</button>
            <div class="hint hidden" id="options_on_notice">(*) деякі опціі, встановленні в посиланні</div>
        </div>
    </div>
</div>

</div>
</div>
