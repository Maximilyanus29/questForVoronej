
function find(str)
{
    return document.querySelector(str);
}

function findAll(str)
{
    return document.querySelectorAll(str);
}

function activateТearestProduct(prod){
    for (let parentParams of findAll(".option-list.option-list_overflow"))
    {




        for (let elemParams of parentParams.querySelectorAll(".option"))
        {
            elemParams.classList.remove('active');
            if (prod[parentParams.getAttribute('type')] == elemParams.getAttribute('data-id-value')){
                elemParams.classList.add('active');
            }




        }

    }


}


$(document).on('click', "[data-click-goods]", function() {
    $(this).parent('.option-list').children('.option').removeClass('active');
    $(this).addClass('active');


    let handbookId = $(this).attr('data-id-handbook');

    let value = $(this).attr('data-id-value');
    // let hiddenInput = $('[data-click-' + handbookId + ']');
    // $(hiddenInput).attr('data-id-value', value);
    let click_id = $(this).attr('data-click-goods');

    let click_trent = $(this).parent().attr('type');

    let click_line_attr = [];

    let buffer = $(this).parent().children().each(function(ind,el){
        click_line_attr.push(el.getAttribute('data-id-value'));
    });

    console.log(click_line_attr)


    // console.log(click_trent);

    getGoods(click_id, value,click_trent, click_line_attr);
});




function getGoods(click_id, value,click_trent, click_line_attr) {

    let parametr = {},
        goods_id = $('[data-id-goods]').attr('data-id-goods');
        goods_id = $('[data-id-goods]').attr('data-id-goods');

    // let containerParams = findAll(".option-list.option-list_overflow");

    for (let parentParams of findAll(".option-list.option-list_overflow"))
    {


        // parametr[parentParams.getAttribute('type')]

        for (let elemParams of parentParams.querySelectorAll(".option"))
        {
            if (elemParams.classList.contains ('active')){


                parametr[parentParams.getAttribute('type')]=elemParams.getAttribute('data-id-value');
            }



        }

    }






    $.ajax({
        // url: '/site/getproduct',
        url: '/submit/goods',
        type: 'post',

        data: {
            parametersList: parametr,
            goods: goods_id,
            flag: click_id,
            value: value,
            trent: click_trent,
            clickLine: click_line_attr,
        },
        success: function(data) {
            console.log(data);
            let dataj  = data;






            for (let parentParams of findAll(".option-list.option-list_overflow"))
            {




                for (let elemParams of parentParams.querySelectorAll(".option"))
                {
                    elemParams.classList.remove('off_goods');

                    for (let el in dataj)
                    {
                        // console.log(dataj[el]);


                        if (dataj[el][parentParams.getAttribute('type')] == elemParams.getAttribute('data-id-value')){

                            elemParams.classList.remove('off_goods');

                            // elemParams.classList.add('active');


                        }else{


                            elemParams.classList.add('off_goods');

                        }


                    }


                    //
                    //
                    // if (dataj[]){
                    //
                    //
                    //     console.log('da');
                    // }
                    // else{
                    //     elemParams.classList.toggle('off_goods');
                    // }



                    // dataj['available'][parentParams.getAttribute('type')];


                }

            }







            // $('#btn-add-cart').attr('data-cart', data.goods_id);
            $('#goodsCount').html(data.count);


            for (let el in dataj)
            {

                if (dataj[el]){

                    activateТearestProduct(dataj[el]);


                    $('#goodsPrice').html(dataj[el].price + "<span class='rub'>");
                    $('#goodsCount').html(dataj[el].quantity + "<span class='rub'>");
                    $('#goodsPrice').parent().show();
                    $('#priceOrder').hide();
                } else {
                    $('#goodsPrice').html("Нет цены" + "<span class='rub'>");
                }



                break;


            }

            // if (dataj[0]){
            //     $('#goodsPrice').html(dataj[0].price + "<span class='rub'>");
            //     $('#goodsPrice').parent().show();
            //     $('#priceOrder').hide();
            // } else {
            //     $('#goodsPrice').html("Нет цены" + "<span class='rub'>");
            // }

            //
            // let handbook = $("[data-click-goods]");
            // if (click_id == 0) {
            //     $('[data-script-id]').removeClass('active');
            // }
            //
            //
            // handbook.each(function(indx, element) {
            //     $(element).attr('data-click-goods', '0');
            //     $(element).addClass('off_goods');
            //     let handbook_id = $(element).attr('data-id-handbook');
            //     let handbook_id_value = $(element).attr('data-id-value');
            //     if (data.handbook[handbook_id].indexOf(handbook_id_value) !== -1) {
            //         $(element).attr('data-click-goods', '1');
            //         $(element).removeClass('off_goods');
            //     }
            //     if (click_id == 0) {
            //         $('[data-click-' + handbook_id + ']').attr('data-id-value', data.handbookGoods[handbook_id]);
            //         $("[data-script-id='" + data.handbookGoods[handbook_id] + "']").addClass('active');
            //     }
            // });




        }
    });


}




//
//
// function getGoods(click_id, value) {
//     let parametr = [],
//         goods_id;
//     $("[data-hidden-input]").each(function(indx, element) {
//         parametr.push($(element).attr('data-id-value'));
//         goods_id = $(element).attr('data-id-goods');
//     });
//     $.ajax({
//         // url: '/site/getproduct',
//         url: '/submit/goods',
//         type: 'post',
//
//         data: {
//             handbook: parametr,
//             goods: goods_id,
//             flag: click_id,
//             value: value
//         },
//         success: function(data) {
//             $('#btn-add-cart').attr('data-cart', data.goods_id);
//             $('#goodsCount').html(data.count);
//             if (data.price != 0) {
//                 $('#goodsPrice').html(data.price + "<span class='rub'>");
//                 $('#goodsPrice').parent().show();
//                 $('#priceOrder').hide();
//             } else {
//                 $('#goodsPrice').html(data.price + "<span class='rub'>");
//                 $('#goodsPrice').parent().hide();
//                 $('#priceOrder').show();
//             }
//             let handbook = $("[data-click-goods]");
//             if (click_id == 0) {
//                 $('[data-script-id]').removeClass('active');
//             }
//             handbook.each(function(indx, element) {
//                 $(element).attr('data-click-goods', '0');
//                 $(element).addClass('off_goods');
//                 let handbook_id = $(element).attr('data-id-handbook');
//                 let handbook_id_value = $(element).attr('data-id-value');
//                 if (data.handbook[handbook_id].indexOf(handbook_id_value) !== -1) {
//                     $(element).attr('data-click-goods', '1');
//                     $(element).removeClass('off_goods');
//                 }
//                 if (click_id == 0) {
//                     $('[data-click-' + handbook_id + ']').attr('data-id-value', data.handbookGoods[handbook_id]);
//                     $("[data-script-id='" + data.handbookGoods[handbook_id] + "']").addClass('active');
//                 }
//             });
//         }
//     });
// }
// $('.add').click(function() {
//     var value = $(this).parents('.quantity-form').children('input').val();
//     if (value >= 0)
//         value++;
//     $(this).parents('.quantity-form').children('input').val(value);
// });
// $('.reduce').click(function() {
//     var value = $(this).parents('.quantity-form').children('input').val();
//     if (value > 1)
//         value--;
//     $(this).parents('.quantity-form').children('input').val(value);
// });
// $('.goods-tabs-nav .tab-nav').click(function() {
//     $('.goods-tabs-nav .tab-nav').removeClass('active');
//     $(this).addClass('active');
//     data_tab = $(this).attr('data-tab');
//     $('.goods-tabs-body .tab').removeClass('active');
//     $('#tab-' + data_tab).addClass('active');
// });
// $('.similar-products .slider, .by-products .slider').bxSlider({
//     touchEnabled: tach,
//     maxSlides: 3,
//     minSlides: 1,
//     slideWidth: 330,
//     pager: false,
//     slideMargin: 30
// });