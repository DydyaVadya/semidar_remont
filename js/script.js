/**
 * 
 */

var saleCount = 1;
function saleProgress(sale) {
    var fullBar = $('.bar').width();
    var bar = $('.bar-inner');
    var saleSize = fullBar - ((fullBar / 5) * sale);
    bar.stop(true, true);
    $('.bar').addClass('shake');
    bar.animate({width: saleSize}, 5, function(){
        setTimeout(function() {
            $('.bar').removeClass('shake');
        }, 5);
        
    });
    $('.barText').text(sale).addClass('bounceIn');
    setTimeout(function(){$('.barText').removeClass('bounceIn')}, 300);
    
}

// Маска для номера телефона
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):jQuery)}(function(a){var b,c=navigator.userAgent,d=/iphone/i.test(c),e=/chrome/i.test(c),f=/android/i.test(c);a.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},autoclear:!0,dataName:"rawMaskFn",placeholder:"_"},a.fn.extend({caret:function(a,b){var c;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof a?(b="number"==typeof b?b:a,this.each(function(){this.setSelectionRange?this.setSelectionRange(a,b):this.createTextRange&&(c=this.createTextRange(),c.collapse(!0),c.moveEnd("character",b),c.moveStart("character",a),c.select())})):(this[0].setSelectionRange?(a=this[0].selectionStart,b=this[0].selectionEnd):document.selection&&document.selection.createRange&&(c=document.selection.createRange(),a=0-c.duplicate().moveStart("character",-1e5),b=a+c.text.length),{begin:a,end:b})},unmask:function(){return this.trigger("unmask")},mask:function(c,g){var h,i,j,k,l,m,n,o;if(!c&&this.length>0){h=a(this[0]);var p=h.data(a.mask.dataName);return p?p():void 0}return g=a.extend({autoclear:a.mask.autoclear,placeholder:a.mask.placeholder,completed:null},g),i=a.mask.definitions,j=[],k=n=c.length,l=null,a.each(c.split(""),function(a,b){"?"==b?(n--,k=a):i[b]?(j.push(new RegExp(i[b])),null===l&&(l=j.length-1),k>a&&(m=j.length-1)):j.push(null)}),this.trigger("unmask").each(function(){function h(){if(g.completed){for(var a=l;m>=a;a++)if(j[a]&&C[a]===p(a))return;g.completed.call(B)}}function p(a){return g.placeholder.charAt(a<g.placeholder.length?a:0)}function q(a){for(;++a<n&&!j[a];);return a}function r(a){for(;--a>=0&&!j[a];);return a}function s(a,b){var c,d;if(!(0>a)){for(c=a,d=q(b);n>c;c++)if(j[c]){if(!(n>d&&j[c].test(C[d])))break;C[c]=C[d],C[d]=p(d),d=q(d)}z(),B.caret(Math.max(l,a))}}function t(a){var b,c,d,e;for(b=a,c=p(a);n>b;b++)if(j[b]){if(d=q(b),e=C[b],C[b]=c,!(n>d&&j[d].test(e)))break;c=e}}function u(){var a=B.val(),b=B.caret();if(o&&o.length&&o.length>a.length){for(A(!0);b.begin>0&&!j[b.begin-1];)b.begin--;if(0===b.begin)for(;b.begin<l&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}else{for(A(!0);b.begin<n&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}h()}function v(){A(),B.val()!=E&&B.change()}function w(a){if(!B.prop("readonly")){var b,c,e,f=a.which||a.keyCode;o=B.val(),8===f||46===f||d&&127===f?(b=B.caret(),c=b.begin,e=b.end,e-c===0&&(c=46!==f?r(c):e=q(c-1),e=46===f?q(e):e),y(c,e),s(c,e-1),a.preventDefault()):13===f?v.call(this,a):27===f&&(B.val(E),B.caret(0,A()),a.preventDefault())}}function x(b){if(!B.prop("readonly")){var c,d,e,g=b.which||b.keyCode,i=B.caret();if(!(b.ctrlKey||b.altKey||b.metaKey||32>g)&&g&&13!==g){if(i.end-i.begin!==0&&(y(i.begin,i.end),s(i.begin,i.end-1)),c=q(i.begin-1),n>c&&(d=String.fromCharCode(g),j[c].test(d))){if(t(c),C[c]=d,z(),e=q(c),f){var k=function(){a.proxy(a.fn.caret,B,e)()};setTimeout(k,0)}else B.caret(e);i.begin<=m&&h()}b.preventDefault()}}}function y(a,b){var c;for(c=a;b>c&&n>c;c++)j[c]&&(C[c]=p(c))}function z(){B.val(C.join(""))}function A(a){var b,c,d,e=B.val(),f=-1;for(b=0,d=0;n>b;b++)if(j[b]){for(C[b]=p(b);d++<e.length;)if(c=e.charAt(d-1),j[b].test(c)){C[b]=c,f=b;break}if(d>e.length){y(b+1,n);break}}else C[b]===e.charAt(d)&&d++,k>b&&(f=b);return a?z():k>f+1?g.autoclear||C.join("")===D?(B.val()&&B.val(""),y(0,n)):z():(z(),B.val(B.val().substring(0,f+1))),k?b:l}var B=a(this),C=a.map(c.split(""),function(a,b){return"?"!=a?i[a]?p(b):a:void 0}),D=C.join(""),E=B.val();B.data(a.mask.dataName,function(){return a.map(C,function(a,b){return j[b]&&a!=p(b)?a:null}).join("")}),B.one("unmask",function(){B.off(".mask").removeData(a.mask.dataName)}).on("focus.mask",function(){if(!B.prop("readonly")){clearTimeout(b);var a;E=B.val(),a=A(),b=setTimeout(function(){B.get(0)===document.activeElement&&(z(),a==c.replace("?","").length?B.caret(0,a):B.caret(a))},10)}}).on("blur.mask",v).on("keydown.mask",w).on("keypress.mask",x).on("input.mask paste.mask",function(){B.prop("readonly")||setTimeout(function(){var a=A(!0);B.caret(a),h()},0)}),e&&f&&B.off("input.mask").on("input.mask",u),A()})}})});
jQuery(function ($) {
    $('input[name=phone]').focus(function () {
        $(this).val('+380(');
        $(this).mask("+38(999)999-99-99");
    });
    $(document).ready(function () {
        $('input[name=phone]').keypress(function (e) {
            if (!(e.which == 8 || e.which == 44 || e.which == 45 || e.which == 46 || (e.which > 47 && e.which < 58))) return false;
        });
    });
});
// Переключение экранов
function runEffect(hideScreen, showScreen) {
    // get effect type from
    // var selectedEffect = "slide";
    // Most effect types need no options passed by default
    // var options = {};
    // some effects have required parameters
    // if ( selectedEffect === "scale" ) {
    //     options = { percent: 50 };
    // } else if ( selectedEffect === "transfer" ) {
    //     options = { to: "#button", className: "ui-effects-transfer" };
    // } else if ( selectedEffect === "size" ) {
    //     options = { to: { width: 200, height: 60 } };
    // }
    // Run the effect
    // hideScreen.hide( selectedEffect, options, 500, callback(hideScreen, showScreen) );
    showScreen.show();
        
    saleCount = +$($('.barText')[0]).text();
    if(!saleCount) {
        saleCount = 1;
    }
    $('html,body').animate({
        scrollTop: $(showScreen).offset().top}, 1000, function() {
            
        });
        if($('#screen2').css('display') == 'table' && $('#screen3').css('display') == 'none') {
            saleProgress(saleCount);
        }
        if($('#screen4').css('display') == 'table' && $('#screen5').css('display') == 'none') {
            if(saleCount < 4) {
                saleCount += 2;
            }
            else {
                saleCount = 3;
            }
        }
        if($('#screen6').css('display') == 'table' && $('#screen9').css('display') == 'none') {
            if(saleCount < 5) {
                saleCount += 1;
            }
            else {
                saleCount = 4;
            }
            saleProgress(saleCount);
        }
    return false;
}
// function callback(hideScreen, showScreen) {
//     setTimeout(function() {
//         // $( ".screen" ).removeAttr( "style" ).hide().fadeIn();
//         showScreen.show();
//         $('html, body').scrollTop(0);
//     }, 0 );
// }


//Рандомайзер
function getRandomArbitrary(min, max) {
    return Math.random() * (max - min) + min;
}

//owl carousel
$(document).ready(function () {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:3,
        loop:true,
        margin:10,
        autoplay:false,
        autoplayTimeout:3000,
        autoplayHoverPause:false
    });
});

//slider
$(document).ready(function () {
    $('.slider').slider({
        range: "min",
        min: 10,
        max: 600,
        value: 300,
        slide: function( event, ui ) {
            $('input[name="flatEtazh"]').val( ui.value );
        }
    });
   $('input[name="flatEtazh"]').val( $(".slider").slider("value"));

    $('input[name="flatEtazh"]').on( "change", function() {
        $(".slider").slider( "value", $(this).val() );
    });

});

//ГДЕ БУДЕМ МЕНЯТЬ ОКНА? - активированный пункт
$(document).ready(function () {
    function checkPlace () {
        var elMass = $('#screen2 input[name="housePlace"]');
        $.each(elMass, function (i, val) {
            $(val).parent().parent().find('.imgBlock').removeClass("selected");
            $(val).parent().removeClass("selected");
            if($(val).prop("checked")){
                $(val).parent().parent().find('.imgBlock').addClass("selected");
                $(val).parent().addClass("selected");
            }
        });
    }
    checkPlace();
    $('#screen2 label').click(function (e) {
        e.preventDefault();
        $(this).find('input[name="housePlace"]').prop("checked", true);
        var sale = $(this).find('input[name="housePlace"]').data('sale');
        saleProgress(sale);
        checkPlace();
        saleCount = +sale;
    });
});

//КУДА ВЫ ХОТИТЕ УСТАНОВИТЬ ОКНА?
$(document).ready(function () {
    function checkPlace () {
        var elMass = $('#screen3 input[type="checkbox"]');
        $.each(elMass, function (i, val) {
            $(val).parent().parent().find('.imgBlock').removeClass("selected");
            $(val).parent().removeClass("selected");
            if($(val).prop("checked")){
                $(val).parent().parent().find('.imgBlock').addClass("selected");
                $(val).parent().addClass("selected");
            }
        });
    }
    checkPlace();
    $('#screen3 label').click(function (e) {
        // e.preventDefault();
        checkPlace();
        var allSales = 0;
        var elMass = $('#screen3 input[type="checkbox"]');
        $.each(elMass, function (i, val) {
            allSales += $(val).data('sale');
            if(!$(val).prop("checked")) {
                allSales -= $(val).data('sale');
            }
        });
        if(saleCount < 5) {
            saleProgress(saleCount + allSales);
        }
        else {
            saleCount = 5;
            saleProgress(saleCount);
        }
    });
});
//УТОЧНИТЕ ОСОБЕННОСТИ КВАРТИРЫ
$(document).ready(function() {
    if($('#screen4').css('display') == 'table') {
        if(saleCount < 5) {
            saleCount += 1;
        }
        else {
            saleCount = 5;
        }
    }
    $('#screen4 input').change(function() {saleProgress(saleCount);});
});
//ВЫБЕРИТЕ ТИП И КОЛИЧЕСТВО ОКОН
$(document).ready(function() {
    $('.plus').click(function() {
            if(saleCount < 5) {
                saleCount += 1;
            }
            else {
                saleCount = 5;
            }
            saleProgress(saleCount);    
    });
    $('.minus').click(function() {
        if($(this).closest('.num').find('input').val() > 0 ) {
            saleCount -= 1;
            saleProgress(saleCount);
        }
        else {
            return false;
        }
    });
});
//ВЫБЕРИТЕ ПРОФИЛЬ РАМЫ
$(document).ready(function () {
    function checkPlace () {
        var elMass = $('#screen6 input[type="checkbox"]');
        $.each(elMass, function (i, val) {
            $(val).parent().parent().find('.imgBlock').removeClass("selected");
            $(val).parent().removeClass("selected");
            if($(val).prop("checked")){
                $(val).parent().parent().find('.imgBlock').addClass("selected");
                $(val).parent().addClass("selected");
            }
        });
    }
    checkPlace();
    $('#screen6 label').click(function (e) {
        checkPlace();
        var allSales = 0;
        var elMass = $('#screen6 input[type="checkbox"]');
        $.each(elMass, function (i, val) {
            allSales += $(val).data('sale');
            if(!$(val).prop("checked")){
                allSales -= $(val).data('sale');
            }
        });
        if(saleCount < 5) {
            saleProgress(allSales + saleCount);
        }
        else {
            saleCount = 4;
            saleProgress(saleCount);
        }
    });
});

//ДОПОЛНИТЕЛЬНАЯ КОМПЛЕКТАЦИЯ ОКНА
$(document).ready(function () {
    function checkPlace () {
        var elMass = $('#screen7 input[type="checkbox"]');
        $.each(elMass, function (i, val) {
            $(val).parent().parent().find('.imgBlock').removeClass("selected");
            $(val).parent().removeClass("selected");
            if($(val).prop("checked")){
                $(val).parent().parent().find('.imgBlock').addClass("selected");
                $(val).parent().addClass("selected");
            }
        });
    }
    checkPlace();
    $('#screen7 label').click(function (e) {
        checkPlace();
        var allSales = [];
        $.each($('#screen7 input[type="checkbox"]'), function(i, val) {
            if($(val).prop('checked')) {
                allSales.push($(val));
            }
        });
        if(allSales.length >= 2) {
            saleProgress(saleCount);
        }
        else if(allSales.length < 2){
            if(saleCount < 5) {
                saleProgress(saleCount + 1);
            }
            else {
                saleCount = 5;
                saleProgress(saleCount);
            }
        }
        else {
            saleProgress(saleCount);
        }
    });
});

//ПОДАРКИ ОТ ФАБРИКИ
$(document).ready(function () {
    function checkPlace () {
        var elMass = $('#screen8 input[type="checkbox"]');
        var massChecked = [];

        $.each(elMass, function (i, val) {
            if($(val).prop("checked")){
                massChecked.push($(val));
            }
        });

        if(massChecked.length<3){
            $.each(elMass, function (i, val) {
                $(val).attr("disabled", false);
                $(val).parent().parent().find('.imgBlock').removeClass("selected");
                $(val).parent().removeClass("selected");
                if($(val).prop("checked")){
                    $(val).parent().parent().find('.imgBlock').addClass("selected");
                    $(val).parent().addClass("selected");
                }
            });
        } else if(massChecked.length===3) {
            $.each(elMass, function (i, val) {
                if(!$(val).prop("checked")){
                    $(val).attr("disabled", true);
                }
                $(val).parent().parent().find('.imgBlock').removeClass("selected");
                $(val).parent().removeClass("selected");
                if($(val).prop("checked")){
                    $(val).parent().parent().find('.imgBlock').addClass("selected");
                    $(val).parent().addClass("selected");
                }
            });
        } else {
            return false;
        }
    }
    checkPlace();
    $('#screen8 label').click(function (e) {
        checkPlace();
    });
});

//Окно с анимацией
$(document).ready(function () {
    $('#screen7 .openNextStep p, #screen7 .next').click(function () {
        setTimeout(function () {
            $('body #screen9 .quest .animatedText .first').addClass('animated').addClass('fadeOutLeft');
            $('body #screen9 .quest .animatedText .second').show().addClass('animated').addClass('fadeInRight');
            setTimeout(function () {
                $('body #screen9 .quest .animatedText .second').addClass('animated').addClass('fadeOutLeft');
                $('body #screen9 .quest .animatedText .third').show().addClass('animated').addClass('fadeInRight');
                setTimeout(function () {
                    $('body #screen9 .quest .animatedText .third').addClass('animated').addClass('fadeOutLeft');
                    $('body #screen9 .quest .animatedText .last').show().addClass('animated').addClass('fadeInRight');
                    setTimeout(function () {
                        var hideScreen = $('#screen9');
                        var showScreen = hideScreen.next();
                        if(saleCount < 5) {saleCount = 5}
                        $('input[name="sale"]').val(saleCount + ' %');
                        $('#screen10 .question span').text(saleCount + ' %');
                        runEffect(hideScreen, showScreen);
                        return false;
                    }, 1500)
                }, 3000)
            }, 3000)
        }, 3000);
    });
});

//Количество конфигураций
$(document).ready(function () {
   var configKolvo =  Math.round(getRandomArbitrary(63, 400));
   $('#screen8 .next, #screen8 .openNextStep, #screen8 .steps').click(function () {
       $('#screen9 .resultCount span').animate({ num: configKolvo /* - начало */ }, {
           duration: 5000,
           step: function (num){
               this.innerHTML = (num).toFixed(0);
           },
           complete: function() {
               $(this).addClass("blink");
               $('#screen9 .next').addClass("selected");
           }
       });
       var $target = $('#screen9 .quest li');
       var hold = 800;

       $.each($target,function(i,t){
           var $this = $(t);
           setTimeout(function(){ $this.show('normal'); },i*hold);
       });
   })
});

//navigation
$(document).ready(function () {
    $('.startQuest, .owl-item, .rightSide, .inpNext, .openNextStep, .navigation .steps').click(function () {
        var hideScreen = $(this).closest('.screen');
        var showScreen = hideScreen.next();
        runEffect(hideScreen, showScreen);
        return false;
    });

    $('#screen9').on('click', $('.resultCount span'), function () {
        var hideScreen = $(this).closest('.screen');
        var showScreen = hideScreen.next();
        runEffect(hideScreen, showScreen);
        return false;
    });

    $('.navigation .container>p').click(function () {
        var hideScreen = $(this).closest('.screen');
        if ($(this).hasClass("prev")){
            var showScreen = hideScreen.prev();
            runEffect(hideScreen, showScreen);
        } else if ($(this).hasClass("next")){
            var showScreen = hideScreen.next();
            runEffect(hideScreen, showScreen);
        }

        return false;
    })
});

//1 scren show sticker
$(document).ready(function () {
    setTimeout(function () {
            $('.rightSide').show().addClass('animated').addClass('fadeInRightBig')}
            , 3000
    );
});

//Отправка формы
$(document).ready(function () {
    $('#screen10 .itogBtn input[type="button"]').click(function () {
        if ($('#phone').val().replace(/\D+/g,"").length<7){
            $('#screen10 .phone .alert').show("slow").effect("shake", 500);
        }
        else{
            // $code = $('select[name="code"]').val();
            $('input[name="sale"]').val(saleCount);
            $phone = $('input[name="phone"]').val();
            $tel = $phone;
            $(this).prop( 'disabled', true ).val('Отправлено');
            $('#screen10 .phone .alert').hide();
            // yaCounter99999999.reachGoal('StoimostFinal');
            dataLayer.push({'event': 'zayavka'});
           // ga('send', 'event', 'Btn', 'Click', 'StoimostFinal');
            $('form').submit();
        }
    });
    $("form").submit(function(e) {
        var ref = $(this).find("required");
        $(ref).each(function(){
            if ( $(this).val() == '' )
            {
                alert("Поле не должно быть пустое!");
                $(this).focus();
                e.preventDefault();
                return false;
            }
        });  return true;
    });
    $('#callForm').submit(function () {
        var but = $(this).find('input[type="submit"]');
        but.prop( 'disabled', true ).val('Отправлено');
        var form = $('#callForm');
        var formType = form.find('input[name="type"]').val();
        var phone = $('#callForm').find('input[name="phone"]');
        var form_data = form.serialize();

        if (phone.val().length < 10) {
            phone
                .animate({backgroundColor: "#ff0000", opacity: 0.8}, 300)
                .animate({backgroundColor: "#fff", opacity: 1}, 300);
            but.prop( 'disabled', false ).val('Заказать звонок');
        }

        else {
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: form_data,
                cache: false,
                success: function () {
                    if(formType === "Заказ звонка") {
                        dataLayer.push({'event': 'zayavka'});
                        // yaCounter43956349.reachGoal('ZakazZvonkaVsplivashka');
                        ga('send', 'event', 'Btn', 'Click', 'ZakazZvonkaVsplivashka');
                    }
                    if(formType === "Обьемная скидка") {
                        // yaCounter999999999.reachGoal('VolumeDiscount');
                        dataLayer.push({'event': 'zayavka'});
                        ga('send', 'event', 'Btn', 'Click', 'VolumeDiscount');
                    }
                    if(formType === "Консультация") {
                        dataLayer.push({'event': 'zayavka'});
                        // yaCounter999999999.reachGoal('Consultation');
                        ga('send', 'event', 'Btn', 'Click', 'Consultation');
                    }
                   
                    form.fadeOut(300, function () {
                        form.trigger('reset');
                        $('.callWind .title').hide();
                        $(this).after("<div class='thankYou'>Спасибо за Ваш запрос. Менеджер свяжется с Вами в ближайшее время</div>");
                    });
                    setTimeout(function () {
                        $('.callWind').hide();
                        $('.callWind .title').show();
                        $('.stickerCall').show('slow');
                        form.fadeIn(300).siblings('.thankYou').remove();
                        but.prop( 'disabled', false ).val('Заказать звонок');
                    }, 10000);

                }

            });
        }
        return false;
    });
});

//Отмен нажатия по кнопке "назад"
$(document).ready(function () {
    history.pushState(null, null, location.href);
    window.onpopstate = function(event) {
        history.go(1);
    };
});

//Вызов формы заказ звонка
$(document).ready(function () {
    $('.stickerCall').click(function () {
       $(this).hide();
       $('#callForm input[name="type"]').val('Заказ звонка');
       $('.callWind').show("slow");
    });
    $('.callWind .close').click(function () {
        $('.callWind').hide();
        $('.stickerCall').show("slow");
    });
    $('.stickerWindownum').click(function () {
        $('#callForm input[name="type"]').val('Обьемная скидка');
        $('.stickerCall').hide();
        $('.callWind').show("slow");
    });
    $('.stickerRassr').click(function () {
        $('.stickerCall').hide();
        $('.callWind').show("slow");
    });
    $('#screen6 .consult').click(function () {
        $('#callForm input[name="type"]').val('Консультация');
        $('.stickerCall').hide();
        $(this).hide();
        $('.callWind').show("slow");
    });
});

//Появление стикера на втором экране
$(document).ready(function() {
    var distance_for_sticker = $('#screen3').offset().top - $(window).height(),
        $sticker = $('.stickerCall');

    $(window).scroll(function(){
        if  ($(window).scrollTop() > distance_for_sticker){
            $sticker.addClass('visible');
        }
        else {
            $sticker.removeClass('visible');
        }
    });

});
//появление стикера на пятом экране

$(document).ready(function() {
    $(window).scroll(function() {
        if($('#screen6').css('display') == 'table' && $('#screen7').css('display') == 'none') {
            $('.stickerCall').fadeOut();
            $('.consult').fadeIn();
        }
        else {
            $('.stickerCall').fadeIn();
            $('.consult').fadeOut();
        }
    });
});


//Переключсение количества окон
$(document).ready(function () {
    $('body #screen5 .quest ul li .num .plus, body #screen5 .quest ul li .num .minus').click(function () {
        var inp = $(this).closest('.num').find('input').val();
        if($(this).hasClass('minus')){
            if(inp<1){
                return false;
            } else{
                $(this).closest('.num').find('input').val(inp*1 - 1);
            }
        } else if ($(this).hasClass('plus')){
            $(this).closest('.num').find('input').val(inp*1 + 1);
        }
    });
    $('body #screen5 .quest ul li .num input').change(function () {
        if($(this).val()<0){
            $(this).val(0);
        }
    });
});

//Развернуть все экраны
$(document).ready(function () {
    $('.showAllBlocks').click(function () {
        $('#kalkulator').find('.screen').show();
    });
});

//Отправка формы-калькулятор

$( document ).ready(function() {
    $("#kalkulatorForm").submit(
        function(){
            sendAjaxForm('kalkulatorForm', 'mail.php');
            return false;
        }
    );
});

function sendAjaxForm(ajax_form, url) {
    $.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
            dataLayer.push({'event': 'zayavka'});
            //мой тест

            //мой тест
            alert('Спасибо, форма отправлена!');
            $('#kalkulatorForm')[0].reset();
        },
        error: function(response) { // Данные не отправлены
            alert('Извините что-то пошло не так!');
        }
    });
}
