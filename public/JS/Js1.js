let option=document.getElementById("advanced_options_show");
option.addEventListener("click",e=>{
 document.getElementById("advanced_options").className="";   
 option.className="button hidden";
 document.getElementById("advanced_options_hide").className="button";   
});
let option_off=document.getElementById("advanced_options_hide");
option_off.addEventListener("click",e=>{
 document.getElementById("advanced_options").className="hidden";   
 option_off.className="button hidden";
 document.getElementById("advanced_options_show").className="button";   
});

document.getElementById("new_note_help_toggle").addEventListener("click",e=>{

    if(document.getElementById("new_note_help").className=="section hidden help_block"){
        document.getElementById("new_note_help").className="section help_block";

    }
    else{
        document.getElementById("new_note_help").className="section hidden help_block";
    }

})
