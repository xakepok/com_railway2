window.addEvent('domready', function() {
    document.formvalidator.setHandler('esr',
        function (value) {
            regex=/^[^0-9]{5}$/;
            return regex.test(value);
        });
});