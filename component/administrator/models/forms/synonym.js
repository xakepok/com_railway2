jQuery(function() {
    document.formvalidator.setHandler('name',
        function (value) {
            regex=/^([-|\S+|\d+|\s+]){2,}$/;
            return value == '' ? true : regex.test(value);
        });
});