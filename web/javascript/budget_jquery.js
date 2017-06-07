$(document).ready(function () {

    $('#addPopup').hide();
    $('#addIncome').click(function(){
        addField('income');
    });

    $('#addExpense').click(function(){
        addField('expense');
    });

});

function addField(fieldType){
    $('#addPopup').show();
    $('#addButton').click(function () {
        var fieldName = $('#popupText').val().trim();
        if(fieldName == ""){
            return;
        } else {
            var input = '<p class="label" id="' + fieldName + '">' + fieldName + ': <input type="text" name="' + fieldName + '"></p>';
            $('#' + fieldType).append(input);
            $('#popupText').val("")
            $('#addPopup').hide();
        }

    });

}