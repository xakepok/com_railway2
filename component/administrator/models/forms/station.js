jQuery(function() {
    document.formvalidator.setHandler('esr',
        function (value) {
            regex=/^[0-9]{5}$/;
            return regex.test(value);
        });
    document.formvalidator.setHandler('express',
        function (value) {
            regex=/^[0-9]{7}$/;
            return regex.test(value);
        });
    document.formvalidator.setHandler('name',
        function (value) {
            regex=/^([-|\S+|\d+|\s+]){2,}$/;
            return regex.test(value);
        });
    document.formvalidator.setHandler('popularName',
        function (value) {
            regex =/^([-|\S+|\d+|\s+]){2,}$/;
            return value == '' ? true : regex.test(value);
        });
    document.formvalidator.setHandler('vkid',
        function (value) {
            regex=/^[0-9]{3,}$/;
            return value == '' ? true : regex.test(value);
        });
});