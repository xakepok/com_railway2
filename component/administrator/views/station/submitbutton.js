Joomla.submitbutton = function(task) {
    if (task == '') {
        return false;
    } else {
        var isValid = true;
        var action = task.split('.');
        if (action[1] != 'cancel' && action[1] != 'close') {
            var forms = $$('form.form-validate');
            for (var i = 0; i < forms.length; i++) {
                if (!document.formvalidator.isValid(forms[i])) {
                    isValid = false;
                    break;
                }
            }
        }

        if (isValid) {
            console.log(task);
            Joomla.submitform(task, document.forms.adminForm);
            return true;
        } else {
            alert(Joomla.JText._('COM_RAILWAY2_ERROR_UNACCEPTABLE', 'Некоторые значения не валидны'));
            return false;
        }
    }
};