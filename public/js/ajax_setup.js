$(function(){
    $.ajaxSetup({ //в аяксовых запросов можно не дублировать этот кода который в скобках
        type: 'POST',
        error:function (msg){
            console.log(msg);
        },
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    });
});
// создать js для внутренней страниы +
// при нажатии на узнать цену появляется цена в products.balde.php -
// подключить его в products.balde.php +
// создать кнопку с уникальным классом (show-price) и создать пустое место для выводаы+
// в файле product.js прослушиватель событие mouseover по которому запускается .ajax запрос
// создать маршрут который вызвывает аякс +
// создать экшен в контроллере ajaxControlller +
