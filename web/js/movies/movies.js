var movies = function () {
    var columns =  [
        { data: "id", visible: false},
        { data: "title", visible: true }
    ];
    var getUrlAllMovies = function () {
        return Routing.generate('website_movies_getall');
    };

    return {
        init: function (element) {
            Main.init(element,getUrlAllMovies(),columns);
        }
    };
}();