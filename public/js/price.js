$(function () {
    $('.price-show').click(function (e) {
        e.preventDefault();
        price = $(this).attr('data-id');
            $.ajax({
                data: 'id=' + price,
                url: '/ajax/price',
                success:
                    function (data) {
                    if ($('.price-empty'+price).text() === data){
                        $('.price-empty' + price).empty();
                    }else {
                    $('.price-empty'+price).text(data);
                    }
                }

            });

    });
});
