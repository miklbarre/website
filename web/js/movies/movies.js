var movies = function () {
    var columns =  [
        { data: "id", visible: false},
        { data: "title", visible: true }
    ];
    var getUrlAllMovies = function () {
        return Routing.generate('website_movies_getall');
    };

    var filterMovies = function () {
        $('.filter').on('click', function () {
            var search = $('.search-movies').val();
            if(search !== "") {
                $('#table-movies').DataTable().ajax.url( Routing.generate('website_movies_search', {valueSearch: search}) ).load();
            }
        });
        $('.search-movies').on('keyup', function () {
            if($(this).val() === "") {
                $('#table-musics').DataTable().ajax.url(getUrlAllMovies()).load();
            }
        });
    };

    return {
        init: function (element) {
            Main.init(element,getUrlAllMovies(),columns);
            filterMovies();
        }
    };
}();