$(function() {
    $('#no').on('click', function(){
        if ($(this).not(':checked')){
            $(this).prop('checked', true);
            $('#yes').prop('checked', false);
            $('#recharge1').prop({disabled:true});
            $('#recharge2').prop({disabled:true});
        }
    });
    $('#yes').on('click', function(){
        if ($(this).not(':checked')){
            $(this).prop('checked', true);
            $('#no').prop('checked', false);
            $('#recharge1').prop({disabled:false});
            $('#recharge2').prop({disabled:false});
        }
    });

    $('#calc').on('submit', function(e){
        e.preventDefault();
        $(this).data('calc', JSON.stringify($(this).serializeArray()));
        var data = $(this).data('calc');
        var form = $(this);
        var url = form.attr('action');
        var posting = $.post(url, {'data': data});
        posting.done(function(data){
            // console.log(data);
            $('#result').text("Результат: " + data);
        });
    });
});