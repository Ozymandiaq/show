$(document).ready(function () {

    var width = $(window).width();

    setTimeout(function () {
        $('.loader').removeClass('active');
        setTimeout(function () {
            $('.loader').hide();
        },900)
    },1000);


    $(window).scroll(function () {
        var top;
        var topOfwin;
        if(width > 992){
            top = $(window).height() * 0.95;
            topOfwin = $(window).scrollTop() + top;

            if($('div').hasClass('sec7_left_info')){
                var topOfhsec7 = $('.sec7_left_info').offset().top;
                if(topOfhsec7 < topOfwin){
                    var time = 200;
                    $('.sec7_left_item').each(function () {
                        var th = $(this);
                        setTimeout(function () {
                            th.removeClass('active');
                        },time);
                        time = time + 800;
                    })
                }
            }
        }else {
            top = $(window).height() * 0.85;
            topOfwin = $(window).scrollTop() + top;
            $('.sec7_left_item').removeClass('active');
        }


    });


    $('body').on('click', '.submit', function (e) {

        var success = true;
        var form = $(this).parents('form');
        $(form).find('.not_empty').each(function () {
            var val = $(this).val();
            if(val == ''){
                $(this).addClass('error');success = false;
            } else{$(this).removeClass('error');}
            if($(this).hasClass('phone')){
                val = val.replace(/[^0-9]/g,'');
                if (val.length != "11") {$(this).addClass('error');success = false;
                }else{$(this).removeClass('error');}
            }
        });
        if(!success){
            e.preventDefault();
            return false;
        }
    });

    $('.head_lng_main').click(function (e) {
        e.preventDefault();
        $('.head_lng').addClass('active');
        $('.head_lng_fade').slideDown(600);
    });
    $('.head_lng_item').click(function (e) {
        e.preventDefault();
        var text = $(this).find('p').text();
        $('.head_lng_item').removeClass('active');
        $(this).addClass('active');
        $('.head_lng_main p').html(text);
        $('.head_lng_fade').slideUp(600);
        setTimeout(function () {
            $('.head_lng').removeClass('active');
        },600)
    });

    $('.sec1_video_item_box').click(function () {
        var th = $(this);
        $('.sec1_video_item').removeClass('active');
        th.parents('.sec1_video_item').addClass('active');
        var src = th.data('src');
        $('.sec1_bg_video').attr('src',src);
    });

    $('.sec2_left_info').click(function () {
        $('.sec2_left_item').removeClass('active');
        var id = $(this).data('sec2');
        $('.sec2_left_info[data-sec2='+id+']').parents('.sec2_left_item').addClass('active');
        $('.sec2_info_box').removeClass('active');
        $('.sec2_info_box[data-sec2='+id+']').addClass('active');
        $('.sec2_iright_ibox video').each(function () {
            $(this).get(0).pause();
        });
    });

    $(window).scroll(function () {
        var topOfwin;
        if(width > 992){
            topOfwin = $(window).scrollTop();
            var topOfhsec2 = $('#sec1').height();
            if(topOfhsec2 < topOfwin){
                $('.sec2_line').css('position','fixed');
            }
            if(topOfhsec2 >= topOfwin){
                $('.sec2_line').css('position','');
            }
        }
    });

    $('.sec2_iright_ibox[data-tip="video"] .sec2_item_pl').click(function () {
        var src = $(this).parents('.sec2_iright_ibox').data('src');
        $(this).addClass('active');
        $(this).siblings('video').attr('src',src).get(0).play();
    });

    $('.btn2_q1').click(function () {
        if($('.sec3_quiz_label input[name=quiz1]').is(':checked')){
            $('.sec3_quiz_item').removeClass('active');
            $('.sec3_quiz_item[data-id=2]').addClass('active');
        }else{
            $('.sec3_q1').addClass('empty');
            setTimeout(function () {
                $('.sec3_q1').removeClass('empty');
            },600)
        }
    });

    $('.btn2_q2').click(function () {
        if($('.sec3_quiz_label input[name=quiz2]').is(':checked')){
            $('.sec3_quiz_item').removeClass('active');
            $('.sec3_quiz_item[data-id=3]').addClass('active');
        }else{
            $('.sec3_q2').addClass('empty');
            setTimeout(function () {
                $('.sec3_q2').removeClass('empty');
            },600)
        }
    });

    $('.sec3_q3 .sec3_quiz_label').click(function () {
        if($(this).find('input').val() === "Свой ответ:"){
            $('.sec3_q3_answer input').attr('disabled', false);
        }else {
            $('.sec3_q3_answer input').attr('disabled', true).val("");
        }
    });

    $('.btn2_q3').click(function () {
        if($('.sec3_quiz_label input[name=quiz3]').is(':checked')){
            if($('.sec3_quiz_label input[name=quiz3]:checked').val() === "Свой ответ:" && $('.sec3_q3_answer input').val() === ""){
                $('.sec3_q3_answer input').addClass('error');
            }else {
                $('.sec3_q3_answer input').removeClass('error');
                $('.sec3_quiz_item').removeClass('active');
                $('.sec3_quiz_item[data-id=4]').addClass('active');
            }
        }else{
            $('.sec3_q3').addClass('empty');
            setTimeout(function () {
                $('.sec3_q3').removeClass('empty');
            },600)
        }
    });

    $('.btn2_q4').click(function () {
        if($('.sec3_quiz_label input[name=quiz4]').is(':checked')){
            $('.sec3_quiz_item').removeClass('active');
            $('.sec3_quiz_item[data-id=5]').addClass('active');
        }else{
            $('.sec3_q4').addClass('empty');
            setTimeout(function () {
                $('.sec3_q4').removeClass('empty');
            },600)
        }
    });

    $('.btn_q5').click(function () {
        if($('.sec3_quiz_label input[name=quiz5]').is(':checked')){
            $('.sec3_quiz').removeClass('active');
            $('.sec3_data').addClass('active');
        }else{
            $('.sec3_q5').addClass('empty');
            setTimeout(function () {
                $('.sec3_q5').removeClass('empty');
            },600)
        }
    });

    $('.sec5_item_imgs').click(function () {
        var idimg = $(this).parents('.sec5_info_item').data('id');
        $('.sec5_none_item[data-id='+ idimg +'] .sec5_item_imurl').trigger('click');
    });

    $('.sec6_main_btn').click(function () {
        $('.sec6_main_btn').removeClass('active');
        $(this).addClass('active');
        var sec6id = $(this).data('id');
        $('.sec6_info_box').removeClass('active');
        $('.sec6_info_box[data-id='+sec6id+']').addClass('active');
    });



    $('.imglistShow').click(function () {
        $('.imglistShow').addClass('imglistShow__active')
        $('.services_content__img').addClass('services_content__img__active')
        $('.videolistShow').removeClass('videolistShow__active')
        $('.services_content__video').removeClass('services_content__video__active')
    });

    $('.videolistShow').click(function () {
        $('.imglistShow').removeClass('imglistShow__active')
        $('.videolistShow').addClass('videolistShow__active')
        $('.services_content__video').addClass('services_content__video__active')
        $('.services_content__img').removeClass('services_content__img__active')

    });

});
