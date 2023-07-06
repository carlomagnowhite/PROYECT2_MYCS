(function ($) {
    "use strict";
    
    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: true,
        loop: true,
        items: 1
    });
    
})(jQuery);

function thanks(){

    var nom_apes = document.getElementById("nombres").value;
    var mail = document.getElementById("email").value;
    var mensaje = document.getElementById("mensaje").value;


    if(nom_apes == "" || mail == "" || mensaje == ""){

        alert("Por favor, llene todos los campos para poder enviar la información.");
    }else{
        alert("Gracias por contactarnos, en breve nos comunicaremos con usted.");
    }


}
function enviar(){

    var mail = document.getElementById("mailsug").value;

    if(mail != ""){
        alert("send mail!");
        document.getElementById("mailsug").value = "";
    }else{
        alert("Ingrese un mail para poder enviar la información.");
    }
}

