jQuery(document).ready(function (e) {
    var turn = jQuery("#jform_turnstiles option:selected").val();
    var tpd = jQuery("#jform_tpd option:selected").val();
    updateTurn(turn);
    updateTpd(tpd);
    jQuery("#jform_turnstiles").change(function () {
        var turn = jQuery("#jform_turnstiles option:selected").val();
        updateTurn(turn);
    });
    jQuery("#jform_tpd").change(function () {
        var tpd = jQuery("#jform_tpd option:selected").val();
        updateTpd(tpd);
    });
    jQuery("#everytime_click").bind('click', function () {
        jQuery("input[id='jform_time_1']").val('00:00:00');
        jQuery("input[id='jform_time_2']").val('23:59:59');
    });
});
function updateTurn(turn) {
    var disabled = (turn == '1') ? true : false;
    if (turn == '1')
    {
        jQuery("input[id='jform_time_1']").val('');
        jQuery("input[id='jform_time_2']").val('');
    }
    jQuery("input[id='jform_time_1']").prop('readonly', disabled);
    jQuery("input[id='jform_time_2']").prop('readonly', disabled);
}
function updateTpd(tpd) {
    var disabled = (tpd == '1') ? true : false;
    if (tpd == '1')
    {
        jQuery("input[id='jform_time_1']").val('');
        jQuery("input[id='jform_time_2']").val('');
    }
    jQuery("input[id='jform_time_1']").prop('readonly', disabled);
    jQuery("input[id='jform_time_2']").prop('readonly', disabled);
}