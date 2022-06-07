$(function () {
    $('.price-show').click(function (e) {
        e.preventDefault();
        price = $(this).attr('data-id');
      //  console.log($('.price-empty'+price).text());
      //  console.log(price.text());
       // if ($('.price-empty'+price).text() == price)
      //  $('.price-empty' + price).empty();
            $.ajax({
                data: 'id=' + price,
                url: '/ajax/price',
                success:
                    function (data) {
                    if ($('.price-empty'+price).text() === data){
                        $('.price-empty' + price).empty();
                    }else {
                    $('.price-empty'+price).text(data);
                    console.log(data);
                    }
                }

            });

    });
});
