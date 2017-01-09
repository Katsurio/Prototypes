<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
</head>
<body>
    Title:<br>
    <input type="text" class="title" name="title" placeholder="Title">
    <br>
Details:<br>
    <textarea type="text" class="details" name="details" placeholder="Details"></textarea>
    <br>
User ID:<br>
    <input type="number" class="user-id" min="1" max="9" name="user_id">
    <br>
    <input type="submit" onclick="transmitInsertData()">

    <script>
        function transmitInsertData() {
            var data = {
                title: $('.title').val(),
                details: $('.details').val(),
                user_id: $('.user-id').val()
            };
            $.ajax({
                method: "post",
                data: data,
                url: "index_insert.php",
                dataType: "text",
                success: function(response){
                    console.log("AJAX success called, response data: ", response);
                }
            })
        }
    </script>
</body>
</html>
