$(function(){
    $('.articls_name').click(function (e){
        e.preventDefault();
        id = $(this).attr('data-id');
        $.ajax({
            data: 'id='+id,
            url: '/ajax/maintext',
            success: function (data){
                $('.article_empty').text(data);
                // $('.article_empty').html;
            }
        });
    });
});
