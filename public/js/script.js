function autoCalcSetup(){
    $('form[name=cart]').jAutoCalc('destroy');
    $('form[name=cart] tr[name=line_items]').jAutoCalc({keyEventsFire: true, decimalPlace: 2, emptyAsZero:true});
    $('form[name=cart]').jAutoCalc({decimalPlace:2});
}
autoCalcSetup();
$('button[name=remove]').click(function(e){
    e.preventDefault();
    var form = $(this).parents('form')
    $(this).parents('tr').remove();
    autoCalcSetup();
});
$('button[name=add]').click(function(e){
    e.preventDefault();
    var $table = $(this).parents('table');
    var $top = $table.find('tr [name=line_items]').first();
    var $new = $top.clone(true);
    $new.jAutoCalc('destroy');
    $new.insertAfter($top);
    $new.find('input[type=text]').val('');
    autoCalcSetup();
});