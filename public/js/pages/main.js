
// Tabs
$(document).ready(function(){
    $('ul.tabs li.link__tabs a:first').addClass('tab-active');
    $('.sections article').hide();
    $('.sections article:first').show();

    $('ul.tabs li.link__tabs a').click(function(){
        $('ul.tabs li.link__tabs a').removeClass('tab-active');
        $(this).addClass('tab-active');
        $('.sections article').hide();

        var activeTab = $(this).attr('href');
        $(activeTab).show();
        return false;
    });
});

// slider
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 80,
    loop: true,
    autoplay: {
        delay: 10000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        200:{
            slidesPerView: 1,
        },
        300:{
            
            slidesPerView: 1,
        },
        620:{
            slidesPerView: 1,
        },
        690:{
            slidesPerView: 1,
        },
        920:{
            slidesPerView: 2,
        },
        1240:{
            slidesPerView: 3,
        }
    }
});

// slider
var swiper = new Swiper(".topD", {
    slidesPerView: 3,
    spaceBetween: 80,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        200:{
            slidesPerView: 1,
        },
        300:{
            
            slidesPerView: 1,
        },
        620:{
            slidesPerView: 1,
        },
        690:{
            slidesPerView: 1,
        },
        920:{
            slidesPerView: 2,
        },
        1240:{
            slidesPerView: 3,
        }
    }
});


// input date
$('input[name="hotel"]').val("");
$('input[name="person"]').val("");
$('input[name="startdate"]').val("");
$('input[name="enddate"]').val("");

$(function() {

    $('input[name="startdate"]').daterangepicker({
        autoUpdateInput: false,
        showDropdowns:false,
        singleDatePicker:true,
        minYear: 2022,
        locale: {
            cancelLabel: 'Limpiar'
        }
    });
  
    $('input[name="startdate"]').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('DD/MM/YYYY'));
    });
  
    $('input[name="startdate"]').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });
  
});

$(function() {

    $('input[name="enddate"]').daterangepicker({
        autoUpdateInput: false,
        showDropdowns:false,
        singleDatePicker:true,
        minYear: 2022,
        locale: {
            cancelLabel: 'Limpiar'
        }
    });
  
    $('input[name="enddate"]').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('DD/MM/YYYY'));
    });
  
    $('input[name="enddate"]').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });
  
});


// Funcion de los select
var ida = document.getElementById("ida");
        var redondo = document.getElementById("redondo");
        var tipovuelo = document.getElementById("tipovuelo");
        var menortittle = document.getElementById("menortittle")
        var childYear = document.getElementById("childYear");
        var ceroChild = document.getElementById("ceroChild");
        var inputida = document.getElementById("inputida");
        var inputChild = document.getElementById("inputChild");
         
        var childYearTwo = document.getElementById("childYearTwo");
        var inputChildTwo = document.getElementById("inputChildTwo");

        childYear.onclick = function () {
            document.getElementById("inputChild").style.display = "inline";
            document.getElementById("inputChild").style.visibility = "visible";

            // esconde los demás campos
            document.getElementById("inputChildTwo").style.display = "none";
            document.getElementById("inputChildTwo").style.visibility = "hidden";
        }

        childYearTwo.onclick = function () {
            document.getElementById("inputChild").style.display = "inline";
            document.getElementById("inputChild").style.visibility = "visible";

            document.getElementById("inputChildTwo").style.display = "inline";
            document.getElementById("inputChildTwo").style.visibility = "visible";
        }

        menortittle.onclick = function () {
            document.getElementById("inputChild").style.display = "none";
            document.getElementById("inputChild").style.visibility = "hidden";

            document.getElementById("inputChildTwo").style.display = "none";
            document.getElementById("inputChildTwo").style.visibility = "hidden";
        }

        ceroChild.onclick = function () {
            document.getElementById("inputChild").style.display = "none";
            document.getElementById("inputChild").style.visibility = "hidden";

            document.getElementById("inputChildTwo").style.display = "none";
            document.getElementById("inputChildTwo").style.visibility = "hidden";
        }

        tipovuelo.onclick = function () {
            document.getElementById("inputida").style.display = "inline";
            document.getElementById("inputida").style.visibility = "visible";
        }

        redondo.onclick = function () {
            document.getElementById("inputida").style.display = "inline";
            document.getElementById("inputida").style.visibility = "visible";
        }

        ida.onclick = function () {
            document.getElementById("inputida").style.display = "none";
            document.getElementById("inputida").style.visibility = "hidden";
        }

        var disabledtran = document.getElementById("disabledtran");
        var inputdisabled = document.getElementById("inputdisabled");
        var enabletran = document.getElementById("enabletran");
        var tranenable = document.getElementById("tranenable");

        disabledtran.onclick = function () {
            document.getElementById("inputdisabled").style.display = "none";
            document.getElementById("inputdisabled").style.visibility = "hidden";
        }

        enabletran.onclick = function () {
            document.getElementById("inputdisabled").style.display = "inline";
            document.getElementById("inputdisabled").style.visibility = "visible";
        }

        tranenable.onclick = function () {
            document.getElementById("inputdisabled").style.display = "inline";
            document.getElementById("inputdisabled").style.visibility = "visible";
        }
