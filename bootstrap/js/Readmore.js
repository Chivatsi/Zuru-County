$( ".accordion" ).accordion({
    active: false,
    collapsible: true,
    activate: function( event, ui ) {
        ui.newHeader.text("less");
        ui.oldHeader.text("Read More");
    },
});