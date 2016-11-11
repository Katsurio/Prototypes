<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        img {
            width: 100%;
        }
        div {

        }
    </style>
    <script>
        var $image = null;
        var $append_image = null;
        function load_files() {
            console.log("load files called");
            $.ajax({
                dataType: "json",
                url: "get_images.php",
                success: function (result) {
                    console.log(result);
                    for(var key in result.files) {
                        display_image(result.files[key]);
                    }
                }
            });
        }

        function clickity_clack() {
            console.log("clickity clack called");
            var img_url = $(this).attr('src');
            $('.modal_body').attr('src', img_url);
//            $('#images_modal').modal();
            $('.modal-img').attr('src', img_url);
        }
        function display_image(url) {
            console.log("display images called");
            $image = $('<img>').attr('data-toggle', "modal").attr("data-target", '#images_modal').attr('src', url).click(clickity_clack);
            $append_image = $('<div>').addClass('col-xs-3').append($image);
            $('.container').append($append_image);
        }


        function applyClickHandlers() {
            $("button").click();
            load_files();
        }
        $(document).ready(applyClickHandlers);
    </script>
</head>
<body>
<div class="container">

</div>
<div id="images_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <img src="" class="modal-img">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>


