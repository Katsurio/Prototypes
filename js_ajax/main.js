//Create GLOBAL variable below here on line 2
var global_result;

$(document).ready(function(){
    $('button').click(function(){
        console.log('click initiated');
        $.ajax({
            dataType: 'json',
            url: 'http://ax.itunes.apple.com/WebObjects/MZStoreServices.woa/ws/RSS/topMovies/json',
            success: function(result) {
                console.log('AJAX Success function called, with the following result:', result);
                global_result = result;
                var movies = global_result.feed.entry;
                console.log("***all movies' " + movies);
                var first_movie_3rd_img = movies[0]['im:image'][2].label;
                console.log('***3rd image is: ' + first_movie_3rd_img);
                for(var i = 0; i < movies.length; ++i) {
                    var movies_3rd_img = $('<img>');
                    //console.log("***movies' 3rd img variable: " + movies_3rd_img);
                    var movies_director_title = $('<p>');
                    //console.log("***movies' director and title: " + movies_3rd_img);
                    movies_3rd_img.attr('src', movies[i]['im:image'][2].label);
                    movies_director_title.text(movies[i].title.label);
                    $('#main').append(movies_3rd_img).append(movies_director_title);
                    console.log("***movies' img: ", movies_3rd_img, " movies' director/title: ", movies_3rd_img);
                }
            }
        });
        console.log('End of click function');
    });
});

// I didn't like the look of this -_-
// var movies_3rd_img = $('<img>');
// var movies_director = $('<p>');
// var movies_title = $('<p>');
// movies_3rd_img.attr('src', movies[i]['im:image'][2].label);
// movies_title.text(movies[i]['im:name'].label);
// movies_director.text(movies[i]['im:artist'].label);
// $('#main').append(movies_3rd_img).append(movies_title).append(movies_director);
// console.log("all movies' 3rd img variable: " + movies_3rd_img);