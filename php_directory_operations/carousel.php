<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 100%;
            margin: auto;
            position: absolute;
            top: 0;
            left: 0;
            height: 500px;
        }
        .item, .carousel-inner {
            position: relative;
            height: 500px;
        }
    </style>
    <script>
        var $image = null;
        var $append_image = null;
        var $image_array = [];
        var index = 0;

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
                }
            });
        }
        function prev_image() {
            console.log('previous called');
            if (index === 0) {
                index = 7;
            } else {
                index--;
            }
        }
        function next_image() {
            console.log('next called');
            if (index === 7) {
                index = 0;
            } else {
                index++;
            }
        }
        function display_image(index) {
            console.assert('display image called');
            $image = $('<img>').addClass('carousel-image').attr('src', $image_array[index]);
            $img_album = $('<div>').addClass('item').append($image);
            $('.carousel-inner').append($img_album);

        }

        function applyClickHandlers() {
            load_files();
            console.log("after load files");
            $(".left").click(prev_image);
            $(".right").click(next_image);
            console.log("after other click handlers");
            $('.carousel-inner .item:first').addClass('active');
        }
        $(document).ready(applyClickHandlers);
    </script>
</head>
<body>

<div class="container">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <!--            <li data-target="#myCarousel" class="carousel-indicate" data-slide-to="" class="active"></li>-->
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
<!--            <div class="item active">-->
<!--                <img src="" alt="Chania" width="460" height="345" class="carousel-image">-->
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

</body>
</html>
