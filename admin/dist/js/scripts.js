/*!
 * Start Bootstrap - SB Admin v6.0.1 (https://startbootstrap.com/templates/sb-admin)
 * Copyright 2013-2020 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
 */
(function($) {
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
    $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
        if (this.href === path) {
            $(this).addClass("active");
        }
    });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });

    var pass1 = $('[name=pass1]');
    var pass2 = $('[name=pass2]');
    var confirmacion = "Las contraseñas si coinciden";
    var longitud = "La contraseña debe estar formada entre 6-10 carácteres (ambos inclusive)";
    var negacion = "No coinciden las contraseñas";
    var vacio = "La contraseña no puede estar vacía";
    //oculto por defecto el elemento span
    var span = $('<span></span>').insertAfter(pass2);
    span.hide();
    //función que comprueba las dos contraseñas
    function coincidePassword() {
        var valor1 = pass1.val();
        var valor2 = pass2.val();
        //muestro el span
        span.show().removeClass();
        //condiciones dentro de la función
        if (valor1 != valor2) {
            span.text(negacion).addClass('negacion');
        }
        if (valor1.length == 0 || valor1 == "") {
            span.text(vacio).addClass('negacion');
        }
        if (valor1.length < 6 || valor1.length > 10) {
            span.text(longitud).addClass('negacion');
        }
        if (valor1.length != 0 && valor1 == valor2) {
            span.text(confirmacion).removeClass("negacion").addClass('confirmacion');
        }
    }
    //ejecuto la función al soltar la tecla
    pass2.keyup(function() {
        coincidePassword();
    });

})(jQuery);