//loader
$(document).ready(function () {
    hideLoader();
})

function showLoader(){
    $('.mask__loader').removeClass('done');
}

function hideLoader(){
    $('.mask__loader').addClass('done');
}

//*********************************************************************

let isOpenLeftMenu = false;

//Owl carousel
$(document).ready(function () {
    $(".slide-one").owlCarousel({
        loop: true, //Зацикливаем слайдер
        margin: 10, //Отступ от картино если выводите больше 1
        nav: true, //Отключил навигацию

        smartSpeed: 1000, //Время движения слайда
        autoplayTimeout: 5000, //Время смены слайда
        responsive: { //Адаптация в зависимости от разрешения экрана
            0: {
                items: 1.5,
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });
    $(".slide-two").owlCarousel({
        loop: true, //Зацикливаем слайдер
        margin: 10, //Отступ от картино если выводите больше 1
        nav: false, //Отключил навигацию

        smartSpeed: 2000, //Время движения слайда
        autoplayTimeout: 4000, //Время смены слайда
        responsive: { //Адаптация в зависимости от разрешения экрана
            0: {
                items: 1.5,
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    });
    $(".slide-three").owlCarousel({
        loop: true, //Зацикливаем слайдер
        margin: 10, //Отступ от картино если выводите больше 1
        nav: true, //Отключил навигацию

        smartSpeed: 2000, //Время движения слайда
        autoplayTimeout: 4000, //Время смены слайда
        responsive: { //Адаптация в зависимости от разрешения экрана
            0: {
                items: 1.5,
                margin: 0, //Отступ от картино если выводите больше 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
    $(".slide-four").owlCarousel({
        loop: ( $('.slide-four > .col-12').length > 3 ), //Зацикливаем слайдер
        margin: 10, //Отступ от картино если выводите больше 1
        nav: true, //Отключил навигацию

        smartSpeed: 2000, //Время движения слайда
        autoplayTimeout: 4000, //Время смены слайда
        responsive: { //Адаптация в зависимости от разрешения экрана
            0: {
                items: 1.1,
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    $(".slide-five").owlCarousel({
        loop: true, //Зацикливаем слайдер
        margin: 0, //Отступ от картино если выводите больше 1
        nav: true, //Отключил навигацию

        smartSpeed: 2000, //Время движения слайда
        autoplayTimeout: 4000, //Время смены слайда
        responsive: { //Адаптация в зависимости от разрешения экрана
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
});

// $('.span_tag').on('click', function (){
//     $(this).remove();
// });

// $('.block_plan').click(function (event) {
//     $(this).toggleClass('checked');
// });

//Fansybox for tracking-progress
$('[data-style-fansybox = "image-style"]').fancybox({
    baseClass: "progress-photo-slide",
    doubleClick: "toggleZoom",
    infobar: false,
    toolbar: true,
    idleTime: false,
})

//Daterangepicker
$('input[data-name="data"]').daterangepicker({
    singleDatePicker: true,
    opens: "center",
    drops: "down",
    autoApply: true,

    locale: {
        format: 'DD.MM.YYYY'
    }
});

//Modal bootstrap
$('[data-modal="weight"]').on('click', function () {
    $('#modal_weight').modal('show');
    return false;
});

$('[data-modal="body-fat"]').on('click', function () {
    $('#modal_body-fat').modal('show');
    return false;
});

$('[data-modal="weight_calc"]').on('click', function () {
    $('#modal_weight_calc').modal('show');
    return false;
});

//tooltip bootstrap
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

//toggle class for nav-menu
const navBtn = document.querySelector('.button-menu-wrapper');
const navMenu = document.querySelector('.nav-bar');

if (navMenu != null) {

    navBtn.addEventListener('click', () => {

        if (navMenu.classList.contains('open-menu')) {
            isOpenLeftMenu = false;
            navMenu.classList.add('close-menu');
            navMenu.classList.remove('open-menu');
        } else if (navMenu.classList.contains('close-menu')) {
            isOpenLeftMenu = true;
            navMenu.classList.add('open-menu');
            navMenu.classList.remove('close-menu');
        }
    })

    document.addEventListener('click', (event) => {
        if (isOpenLeftMenu && !event.target.closest('.open-menu')) {
            navMenu.classList.add('close-menu');
            navMenu.classList.remove('open-menu');
        }
    })
}

//-----------------------------
/*Dropdown Menu*/
function showNameBtn() {
    let nameBtn = $('.my-account__menu .show-text').text();
    $("#account-menu-drop-btn").text(nameBtn);
}

showNameBtn()

$('.my-account__menu .item .link').on('click', function () {
    $('.my-account__menu .item .link').removeClass('show-text');
    $(this).addClass('show-text');
    showNameBtn()
})

$(function () {
    $('#account-menu-drop-btn').click(function () {
        $('.my-account__menu .item').slideToggle(300);
    });
})

$(function () {
    $('#account-menu-drop-btn').focusout(function () {
        $('.my-account__menu .item').slideUp(300);
    });
})

//*********************************************************
$(function () {
    $('.payment-methods__link').on('click', function () {
        $('.payment-methods').toggleClass('block-hidden block-show');
        $('.add-payment-method').toggleClass('block-hidden block-show');
    })

    $('.cancel-add-payment').on('click', function () {
        $('.payment-methods').toggleClass('block-hidden block-show');
        $('.add-payment-method').toggleClass('block-hidden block-show');
    })

    $('.edit__payment-methods').on('click', function () {
        $('.payment-methods').toggleClass('block-hidden block-show');
        $('.update-payment-method').toggleClass('block-hidden block-show');
    })

    $('.cancel__update-payment').on('click', function () {
        $('.payment-methods').toggleClass('block-hidden block-show');
        $('.update-payment-method').toggleClass('block-hidden block-show');
    })
})

//************** floating label ***************

function focusField(element){
    element.parents(".form-group").addClass("form-group-focus");
}

$(document).on("focus",".form-group .form-control[type=password], .form-group .form-control[type=text], .form-group .form-control[type=number]", function(){
    focusField($(this));
});

$(document).on("blur",".form-group .form-control[type=password], .form-group .form-control[type=text], .form-group .form-control[type=number]", function(){
    if(!$(this).val()){
        $(this).parents(".form-group").removeClass("form-group-focus");
    }
});

$(".form-group .form-control").each(function(){
    if($(this).val()){
        focusField($(this));
    }
})

//************** help popup **************

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

