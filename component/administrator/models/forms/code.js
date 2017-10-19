jQuery(function() {
    document.formvalidator.setHandler('esr',
        function (value) {
            regex=/^[0-9]{5,6}$/;
            return regex.test(value);
        });
    document.formvalidator.setHandler('express',
        function (value) {
            regex=/^[0-9]{7}$/;
            return regex.test(value);
        });
    document.formvalidator.setHandler('yandex',
        function (value) {
            regex=/^[0-9]{7}$/;
            return regex.test(value);
        });
});