var app = angular.module("KatsurioTunes", []);
app.controller("musicController", function($http, $log, $scope){
    this.makeUrl = function(){
        // this.baseAddress = "https://itunes.apple.com/search";
        // // var self = this;
        // this.queryPairs = {
        //     term: term_var,
        //     callback : 'JSON_CALLBACK'
        // };
        // $log.log(this.queryPairs.term);
        // this.generate = function(){
        //     var final_url = this.baseAddress + '?';
        //     for(var i in this.queryPairs){
        //         final_url += i + '=' + this.queryPairs[i] + '&';
        //     }
        //     return final_url;
        // };
        // this.url = this.artist.urlStart+this.artist.name+this.artist.urlEnd;
        this.url = "https://itunes.apple.com/search?term="+this.artist+"&callback=JSON_CALLBACK";
        $log.log(this.url, this.artist.name);
    };
    // this.callItunes = function(){
    //     var self = this;
    //     $http({
    //         url: self.url,
    //         method: "jsonp",
    //         cache: false
    //     })
    //     .then(
    //         function() {
    //             $log.info(response);
    //             self.data = response.data;
    //         }
    //     )
    // }
});