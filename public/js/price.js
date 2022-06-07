$(function () {
    $('.price-show').click(function (e) {
        e.preventDefault();
        price = $(this).attr('data-id');
        if (!$('.price-empty' + price).textContent === '') {
            $('.price-empty' + price).empty();
        }
        else {
            $.ajax({
                data: 'id=' + price,
                url: '/ajax/price',
                success: function (data) {
                    $('.price-empty'+price).text(data);
                }
            });
        }
    });
});
