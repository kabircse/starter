$(function() {
    //sidebar tab show/hide
    $('#collapse-tab a:first').tab('show');

    //For using tooltip
    $('[data-toggle="tooltip"]').tooltip();

    /* navigation sub-menu display */
    $(".sub-menu").hide();
    $(".current_page_item .sub-menu").show();
    $("li.menu-item").hover(function () { // mouse enter
        $(this).find(".sub-menu").show(); // display child

    }, function () { // mouse leave
        if (!$(this).hasClass(".current_page_item")) { // check if current page
            $(this).find(".sub-menu").hide(); // hide if not current page
        }
    });

});
