jQuery(document).ready(function (e) {
    var turn = jQuery("#jform_turnstiles option:selected").val();
    updateTurn(turn);
    jQuery("#jform_turnstiles").change(function () {
        var turn = jQuery("#jform_turnstiles option:selected").val();
        updateTurn(turn);
    });
});
function updateTurn(turn) {
    var disabled = (turn == '1') ? true : false;
    if (turn == '1') jQuery("input[id^='jform_time_']").val('');
    jQuery("input[id^='jform_time_']").prop('readonly', disabled);
}