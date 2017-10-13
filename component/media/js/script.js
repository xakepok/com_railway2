jQuery.noConflict();
jQuery(document).ready(function() {
    console.log('Loaded');
    jQuery(".direction-td").each(function () {
        if (this.innerText != '') {
            jQuery(this).addClass('direction-level-main');
            if (jQuery(this).parent().text() != '') {
                jQuery(this).parent().addClass('direction-level');
            }
        }
    });
    jQuery("#rasp_station_date").bind('change', function () {
        var query = jQuery("#rasp_station_date").val();
        var currentURL = window.location.pathname;
        location.href = currentURL + '?date=' + query;
    })
});
jQuery(document).ready(function () {
    jQuery(".raspSearchField").keyup(function() {
        var str = $(this).val();
        if (str.length > 2) {
            $(this).next().show();
        } else {
            $(this).next().hide();
        }
        console.log(str);
    });
});