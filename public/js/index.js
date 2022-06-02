$(function () {
    $('.catalog a').click(function (e) {
        e.preventDefault();// чтобы не отматывала экран
        var id = $(this).attr('data-id');
        $.ajax({
            url:'/ajax/catalog',
            data:'id='+id,
            success:function (data){
                $('.empty').html(data);
            }
        })
      //  $('.empty').empty();
        // $('.empty').text(id);
    });
    // К сылкам в нутри каталога
});
