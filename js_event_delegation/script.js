// Answer the questions here:

// - What do you think is going to happen?
//***My Answer: I think it'll log the text from the new button to the console when clicked.
// - What happened?
//***My Answer: The text from the new button clicks were logged to the console.
// - Why?
//***My Answer: Because the new "li/button" is a child_element of #list and #list is in turn a child of #container
// so the child should inherit the event delegated by their parent element (i.e #container).
//========== Write your code below ===========//
$(document).ready(function() {
    $('#container').on('click', '#list button', function() {
        console.log($(this).text());
    });
    var append_to_list = $('#list');
    var new_li1 = $("<li>");
    var new_li2 = $("<li>");
    var clicked = true;
    var new_button = $('<button>').text("BOOM!").css('margin', '10px').click(function () {
        if(clicked === true) {
            $(unique_google_li).toggle("explode");
            $('#list:nth-child(-n+4)').toggle( "fold" );
//I WAS CHECKING/HOPING TO GET THE <li> TO EVENTS
// TO OCCUR AS A CHAIN REACTION/STAGGERED NATURE, SHOULD HAVE
// USED setTimeOut INSTEAD -_-
            // clicked = false;
            // if (clicked === false) {
            //     $('#list:nth-child(4)').toggle( "fold" );
            //     clicked = true;
            //     if (clicked === true) {
            //         $('#list:nth-child(3)').toggle("puff");
            //         clicked = false;
            //         if (clicked === false) {
            //             $('#list:nth-child(2)').toggle("pulsate");
            //             clicked = true;
            //             if (clicked === true) {
            //                 $('#list:first-child').toggle("shake");
            //                 return;
            //             }
            //         }
            //     }
            // }
        }
        return false;
    });
    var unique_google_li = $("<button>").text('Unique Google Button').css('margin', '10px').click(function () {
        window.location = "https://www.google.com/";
    });
    append_to_list.append(new_li1);
    new_li1.append(new_button);
    append_to_list.append(new_li2);
    new_li2.append(unique_google_li);
});

