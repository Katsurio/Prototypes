<!DOCTYPE html>
<html>
<head>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<style>
    body {
        height: 100vh;
        width: 100vw;
        position: relative;
    }
    .carousel.carousel-container{
        width: 800px;
        height:600px;
        position: absolute;
        left:50%;
        top:50%;
        transform: translate(-50%, -50%);
        overflow: hidden;
    }
    .btn {
        position: absolute;
        z-index: 4;
    }
    .prev-button {
        height: 100%;
        left:2.1%;
        top:50%;
        transform: translate(-50%, -50%);
    }
    .next-button {
        height: 100%;
        left:97.9%;
        top:50%;
        transform: translate(-50%, -50%);
    }
    .prep{
        transition-duration: 0s!important;
    }
    .mySlides {
        position: absolute;
    }
    .show-slide {
        /*left:0;*/
        transform: translateX(0);
        transition: transform 1s;
        z-index: 1;
    }
    .hide-slide {
        /*left: 100%;*/
        transform: translateX(100%);
        z-index: -4;
    }
    .right-slide {
        transform: translateX(100%);
        z-index: -3;
    }
    .left-slide {
        transform: translateX(-100%);
        z-index: -2;
    }
</style>
<script>
    var $image = null;
    var $image_array = [];
    var index = 0;

    var current_image = 1;
    showDivs(current_image);

    function cycleImages(n) {
        console.log("plus divs function called");
        showDivs(current_image += n);
    }

    function showDivs(n) {
        var i;
        var slides = $(".mySlides");
        if (n > slides.length) {
            current_image = 1
        }
        if (n < 1) {
            current_image = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            $(slides[i]).addClass('hide-slide').removeClass('left-slide right-slide');
//                .css('display','none');
        }
        $(slides[current_image-1]).addClass('show-slide').removeClass('hide-slide');
        if(current_image == slides.length) {
            $(slides[current_image-slides.length]).addClass('left-slide').removeClass('hide-slide');
        } else {
            $(slides[current_image]).addClass('left-slide').removeClass('hide-slide');
        }


        console.log("current image", current_image);
//    .css('display', 'block')
    }
//    function initialize(){
//    }
    function load_files() {
        console.log("load files called");
        $.ajax({
            dataType: "json",
            url: "get_images.php",
            success: function (result) {
                console.log(result);
                $image_array = result.files;
                for(var i = 0; i < $image_array.length; i++) {
                    display_image(i);
                }
                showDivs(current_image);
//                $('.carousel .mySlides:first').removeClass('hide-slide').addClass('show-slide');
            }
        });
    }
    function display_image(index) {
        console.assert('display image called');
        $image = $('<img>').addClass('carousel-image').attr('src', $image_array[index]);
        $img_album = $('<div>').addClass('mySlides hide-slide').append($image);
        $('.carousel-container').append($img_album);
    }

    function applyClickHandlers() {
        load_files();
        $('.prev-button').click(function(){cycleImages(-1)});
        $('.next-button').click(function(){cycleImages(1)});
    }
    $(document).ready(applyClickHandlers);
</script>
</head>
<body>
<div class="carousel carousel-container">
    <button type="button" class="prev-button btn btn-success">&#10094;</button>
    <button type="button" class="next-button btn btn-success">&#10095;</button>
</div>
</body>
</html>