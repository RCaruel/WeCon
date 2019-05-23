$( displaynone() {
    /* Si on passe au dessus du parent 2 */
    $( ".connect" ).hover( displaynone(){
        /* Pendant le survol, on change la couleur du fond */
        $( ".Rechercher" ).css( "display" , "none" );
        /* Au moment ou la souris quitte le survol */
    },displaynone(){
        /* On remet le fond à la couleur vide (de base) */
        $( ".Rechercher" ).css( "display" , "" );
    });
});