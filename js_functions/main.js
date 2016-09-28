function myMessage() {
    console.log("Heed my message, plebeian!");
}
function add(num1, num2) {
    var result = num1 + num2;
    console.log(result);
}
function add2(num1, num2) {
    var result = num1 + num2;
    return result;
}
var add2result = add2(4, 5);
function cardFlip(element) {
    //document.querySelector(element).addEventListener(hide());
    $(element).hide();
}
//Function Inception
var result = add2(add2(2,3), add2(4,5));