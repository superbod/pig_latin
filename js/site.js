$(document).ready(function(){
    initTranslate();
});

function initTranslate() {
    $(document.body).on('change', '#eng-text', function(res){
        var originText = $(this).val();
        var rule2 = $('input[name="rule2"]:checked').val();
        var rule3 = $('input[name="rule3"]:checked').val();
        getPigByEng(originText, rule2, rule3);
    });
}

function getPigByEng(originText, rule2, rule3) {
    $.ajax({
        type: "GET",
        url : "/request.php",
        data: {originText: originText, rule2: rule2, rule3: rule3},
        success: function(res){
            console.log(res);
            $('#pig-latin-text').val(res);
        }
    });
}
