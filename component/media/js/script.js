jQuery.noConflict();
jQuery(document).ready(function() {
    console.log('Loaded');
    jQuery("#rasp_station_date").bind('change', function () {
        var query = jQuery("#rasp_station_date").val();
        var search = parseUrlQuery();
        var currentURL = window.location.pathname;
        var href = '?date=' + query;
        if (search['direction'] != undefined) {
            href += '&direction=' + search['direction'];
        }
        location.href = currentURL + href;
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
function parseUrlQuery() {
    var data = {};
    if(location.search) {
        var pair = (location.search.substr(1)).split('&');
        for(var i = 0; i < pair.length; i ++) {
            var param = pair[i].split('=');
            data[param[0]] = param[1];
        }
    }
    return data;
}
