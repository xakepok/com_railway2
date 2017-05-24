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