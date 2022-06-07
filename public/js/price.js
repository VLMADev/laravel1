$(function(){
    $('.price-show').click(function (e){
        e.preventDefault();
        var price = $(this).attr('data-id');
        $.ajax({
            data: 'price='+price,
            url: '/ajax/price',
            success: function (data){
                $('.price-empty').text(data);
            }
        });
    });
});
