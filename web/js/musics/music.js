var musics = function () {

    var columns =  [
        { data: "idArtiste", visible: false},
        { data: "Artiste", visible: true },
        { data: "Album", visible: true },
        { data: "idAlbum", visible: false}
    ];

    var getAllMusics = function () {
      return Routing.generate('website_music_getallmusics')
    };

    var filterMusics = function () {
        $('.filter').on('click', function () {
            var search = $('.search-artiste').val();
            if(search !== "") {
                $('#table-musics').DataTable().ajax.url( Routing.generate('website_music_search', {valueSearch: search}) ).load();
            }
        });
        $('.search-artiste').on('keyup', function () {
            if($(this).val() === "") {
                $('#table-musics').DataTable().ajax.url(getAllMusics()).load();
            }
        });
    };

    return {
        init: function (element) {
            Main.init(element,getAllMusics(),columns);
            filterMusics();
        }
    };
}();