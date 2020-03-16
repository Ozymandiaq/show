$(document).ready(function () {

    var width = $(window).width();

    $(".phone").inputmask("+7 (999) 999 99 99");

    AOS.init({
        duration: 1000,
        once: true
    });

    function sec2vi() {
        $('.sec2_iright_item').removeClass('active');
        $('.sec2_iright_box').each(function () {
            $(this).find('.owl-item.active:first .sec2_iright_item').addClass('active');
        });
        $('.sec2_iright_ibox video').each(function () {
            $(this).attr('src','');
            $(this).siblings('.sec2_item_pl').removeClass('active');
        })
    }

    var owl1 = $("#sec2sl1");
    owl1.owlCarousel({
        smartSpeed: 1000,
        loop:true,
        margin: 0,
        autoWidth:true,
        mouseDrag: false,
        touchDrag: false,
        responsive:{
            0:{
                items:1,
            },
            993:{
                items:1,
            }
        },
        dots: false,
    });
    $('#to-right1').click(function() {
        owl1.trigger('next.owl.carousel');
        sec2vi();
    });
    $('#to-left1').click(function() {
        owl1.trigger('prev.owl.carousel');
        sec2vi();
    });

    var owl2 = $("#sec2sl2");
    owl2.owlCarousel({
        smartSpeed: 1000,
        loop:true,
        margin: 0,
        autoWidth:true,
        mouseDrag: false,
        touchDrag: false,
        responsive:{
            0:{
                items:1,
            },
            993:{
                items:1,
            }
        },
        dots: false,
    });
    $('#to-right2').click(function() {
        owl2.trigger('next.owl.carousel');
        sec2vi();
    });
    $('#to-left2').click(function() {
        owl2.trigger('prev.owl.carousel');
        sec2vi();
    });

    var owl3 = $("#sec2sl3");
    owl3.owlCarousel({
        smartSpeed: 1000,
        loop:true,
        margin: 0,
        autoWidth:true,
        mouseDrag: false,
        touchDrag: false,
        responsive:{
            0:{
                items:1,
            },
            993:{
                items:1,
            }
        },
        dots: false,
    });
    $('#to-right3').click(function() {
        owl3.trigger('next.owl.carousel');
        sec2vi();
    });
    $('#to-left3').click(function() {
        owl3.trigger('prev.owl.carousel');
        sec2vi();
    });

    var owl4 = $("#sec2sl4");
    owl4.owlCarousel({
        smartSpeed: 1000,
        loop:true,
        margin: 0,
        autoWidth:true,
        mouseDrag: false,
        touchDrag: false,
        responsive:{
            0:{
                items:1,
            },
            993:{
                items:1,
            }
        },
        dots: false,
    });
    $('#to-right4').click(function() {
        owl4.trigger('next.owl.carousel');
        sec2vi();
    });
    $('#to-left4').click(function() {
        owl4.trigger('prev.owl.carousel');
        sec2vi();
    });

    var owl5 = $("#sec2sl5");
    owl5.owlCarousel({
        smartSpeed: 1000,
        loop:true,
        margin: 0,
        autoWidth:true,
        mouseDrag: false,
        touchDrag: false,
        responsive:{
            0:{
                items:1,
            },
            993:{
                items:1,
            }
        },
        dots: false,
    });
    $('#to-right5').click(function() {
        owl5.trigger('next.owl.carousel');
        sec2vi();
    });
    $('#to-left5').click(function() {
        owl5.trigger('prev.owl.carousel');
        sec2vi();
    });

    var owl6 = $("#sec2sl6");
    owl6.owlCarousel({
        smartSpeed: 1000,
        loop:true,
        margin: 0,
        autoWidth:true,
        mouseDrag: false,
        touchDrag: false,
        responsive:{
            0:{
                items:1,
            },
            993:{
                items:1,
            }
        },
        dots: false,
    });
    $('#to-right6').click(function() {
        owl6.trigger('next.owl.carousel');
        sec2vi();
    });
    $('#to-left6').click(function() {
        owl6.trigger('prev.owl.carousel');
        sec2vi();
    });
    setTimeout(function () {
        sec2vi();
    },500);

    function sec5imgs() {
        if(width>992){
            $('#sec5slide .owl-item.active:odd:first .sec5_info_item').addClass('active');
        }else {
            $('#sec5slide .owl-item.active:first .sec5_info_item').addClass('active');
        }
    }
    var owl7 = $("#sec5slide");
    owl7.owlCarousel({
        smartSpeed: 1000,
        loop:true,
        autoWidth:true,
        margin: 0,
        mouseDrag: false,
        touchDrag: false,
        responsive:{
            0:{
                items:2,
                center: true,
            },
            993:{
                items:4,
            }
        },
        dots: false,
    });
    $('#to-right7').click(function() {
        $('.sec5_info_item').removeClass('active');
        owl7.trigger('next.owl.carousel');
        sec5imgs();
    });
    $('#to-left7').click(function() {
        $('.sec5_info_item').removeClass('active');
        owl7.trigger('prev.owl.carousel');
        sec5imgs();
    });
    sec5imgs();

    let sec5i = 1;
    $('.sec5_none_item').each(function () {
        $('a[rel='+sec5i+']').fancybox();
        sec5i++;
    });

    function sec6im() {
        $('.sec6_left_img').removeClass('active');
        var idim = $('.sec6_info_box.active .owl-item.active .sec6_info_item').data('im');
        $('.sec6_left_img[data-im='+idim+']').addClass('active');
    }

    var owl8 = $("#sec6sl1");
    owl8.owlCarousel({
        smartSpeed: 1000,
        loop:true,
        margin: 0,
        mouseDrag: false,
        touchDrag: false,
        responsive:{
            0:{
                items:1,
            },
            993:{
                items:1,
            }
        },
        dots: false,
    });
    $('#to-right8').click(function() {
        owl8.trigger('next.owl.carousel');
        sec6im();
    });
    $('#to-left8').click(function() {
        owl8.trigger('prev.owl.carousel');
        sec6im();
    });

    var owl9 = $("#sec6sl2");
    owl9.owlCarousel({
        smartSpeed: 1000,
        loop:true,
        margin: 0,
        mouseDrag: false,
        touchDrag: false,
        responsive:{
            0:{
                items:1,
            },
            993:{
                items:1,
            }
        },
        dots: false,
    });
    $('#to-right9').click(function() {
        owl9.trigger('next.owl.carousel');
        sec6im();
    });
    $('#to-left9').click(function() {
        owl9.trigger('prev.owl.carousel');
        sec6im();
    });

    var owl10 = $("#sec6sl3");
    owl10.owlCarousel({
        smartSpeed: 1000,
        loop:true,
        margin: 0,
        mouseDrag: false,
        touchDrag: false,
        responsive:{
            0:{
                items:1,
            },
            993:{
                items:1,
            }
        },
        dots: false,
    });
    $('#to-right10').click(function() {
        owl10.trigger('next.owl.carousel');
        sec6im();
    });
    $('#to-left10').click(function() {
        owl10.trigger('prev.owl.carousel');
        sec6im();
    });

    var owl11 = $("#sec7slider");
    owl11.owlCarousel({
        smartSpeed: 1000,
        loop:true,
        margin: 10,
        responsive:{
            0:{
                items:1,
            },
            993:{
                items:1,
            }
        },
        dots: false,
    });
    $('#to-right11').click(function() {
        owl11.trigger('next.owl.carousel');
    });
    $('#to-left11').click(function() {
        owl11.trigger('prev.owl.carousel');
    });















});