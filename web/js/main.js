var Main = function () {
    var initializeDataTable = function (element,url, columns) {
        element.DataTable({
            language: {
                sProcessing:     "Traitement en cours ...",
                sSearch:         "Rechercher :",
                sLengthMenu:     "Afficher _MENU_ &eacute;l&eacute;ments",
                sInfo:           "_START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                sInfoEmpty:      " 0 &agrave; 0 sur 0 &eacute;l&eacute;ment",
                sInfoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                sInfoPostFix:    "",
                sLoadingRecords: "Chargement en cours...",
                sZeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                sEmptyTable:     "Aucune donn&eacute;e disponible dans le tableau",
                oPaginate: {
                    sFirst:      "Premier",
                    sPrevious:   "Pr&eacute;c&eacute;dent",
                    sNext:       "Suivant",
                    sLast:       "Dernier"
                },
                oAria: {
                    sSortAscending:  ": activer pour trier la colonne par ordre croissant",
                    sSortDescending: ": activer pour trier la colonne par ordre d&eacute;croissant"
                }
            },
            paging: false,
            scrollY:        "300px",
            scrollCollapse: true,
            processing: true,
            serverSide: false,
            searching: true,
            ajax: {
                url: url,
                type: "GET"
            },
            columns: columns
        });
    };

    return {
        init: function (element, url,columns) {
            initializeDataTable(element,url,columns);
        }
    };
}();