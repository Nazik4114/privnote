<div id="content" class="">
<div class="section group">
        <label>
        <input id="note_link_input" type="text" readonly="" value="<?=$show_url?>"/>
        <span id="info_read_once" class="caption">
            Записка самознищиться після прочитування.</span>
        <span id="info_expires" class="caption hidden">
            Записка самознищиться через <span id="info_expires_text"></span>.</span>
        </label>
    </div>
    <div class="section group">
        <div class="col span_1_of_6">
        <button id="select_link" class="small_button">Виділити посилання	</button>
        </div>
        <div class="col span_1_of_6">
        <a id="mailto_link" class="small_button" href="mailto:?body=https://privnote.com/Kuygb7RB#VY6ehqtbi">Відправити посилання по e-mail</a>
        </div>

        <div class="col span_2_of_6 right">        
        <!-- only for P_READ_ONCE --> 
        <a id="destroy_link" class="danger small_button" href="https://privnote.com/Kuygb7RB#VY6ehqtbi">Знищити записку</a>

        <!-- not for P_READ_ONCE -->
        <a id="show_link" class="small_button hidden" href="https://privnote.com/Kuygb7RB#VY6ehqtbi">Прочитати записку</a>
        </div>
    </div>
    </div>