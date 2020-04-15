////////////////////////////---//
// BEGIN CUSTOM JS SCRIPTS
////////////////////////////---//

// Presentation class changer for grid or list view
$('button').on('click',function(e) {
    if ($(this).hasClass('grid')) {
        $('#slide-manager #slide-wrapper').removeClass('list').addClass('grid');
    }
    else if($(this).hasClass('list')) {
        $('#slide-manager #slide-wrapper').removeClass('grid').addClass('list');
    }
});

function overlay() {
    el = document.getElementById("overlay-wrapper");
    el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
}