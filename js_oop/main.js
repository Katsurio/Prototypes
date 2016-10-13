/**
 * Created by Katsurio on 10/12/16.
 */
function calculate_display(type, value, item) {
    switch(value){
        case undefined:
            $('#display').text("");
            break;
        default:
            $('#display').text(value);
            break;
    }
}

var my_calculator =  new calculator(calculate_display);

function apply_click_handlers() {
    $('.btn').click(function(){
       var val = $(this).text();
       switch (val) {
           case 'CE':
               my_calculator.allClear();
               break;
           case 'C':
               my_calculator.clear();
               break;
           default:
               my_calculator.addItems($(this.text()));
               break;
       }
    });
}
$(document).ready(apply_click_handlers);