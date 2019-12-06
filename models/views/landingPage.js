$(document).ready(function(){
    $("#form-login").hide();
    $("#form-signup").hide();
    $("#hide-password").hide();
    $("#hide-password1").hide();
    $("#hide-password2").hide();

    $("body").on("click", ".login-button", function () {
        $("#welcome-text").attr("class","col-lg-8");
        $("#form-login").show();
        $("#form-signup").hide();
        $("#navbarsExampleDefault").attr("class", "navbar-collapse collapse");
        $("#menus").show();
        $("#close-menus").hide();
    });

    $("body").on("click", ".signup-button", function () {
        $("#welcome-text").attr("class", "col-lg-8");
        $("#form-signup").show();
        $("#form-login").hide();
        $("#navbarsExampleDefault").attr("class", "navbar-collapse collapse");
        $("#menus").show();
        $("#close-menus").hide();
    });

    $("body").on("click", ".close-login", function () {
        $("#welcome-text").attr("class", "col-lg-12 text-center");
        $("#form-login").hide();
    });

    $("body").on("click", ".close-signup", function () {
        $("#welcome-text").attr("class", "col-lg-12 text-center");
        $("#form-signup").hide();
    });

    $("body").on("click", "#hide-password", function () {
        $("#password").attr("type", "password");
        $("#show-password").show();
        $("#hide-password").hide();
    });

    $("body").on("click", "#show-password", function () {
        $("#password").attr("type", "text");
        $("#hide-password").show();
        $("#show-password").hide();
    });

    $("body").on("click", "#show-password1", function () {
        $("#newPassword").attr("type", "text");
        $("#hide-password1").show();
        $("#show-password1").hide();
    });

    $("body").on("click", "#show-password2", function () {
        $("#confirmPassword").attr("type", "text");
        $("#hide-password2").show();
        $("#show-password2").hide();
    });

    $("body").on("click", "#hide-password1", function () {
        $("#newPassword").attr("type", "password");
        $("#show-password1").show();
        $("#hide-password1").hide();
    });

    $("body").on("click", "#hide-password2", function () {
        $("#confirmPassword").attr("type", "password");
        $("#show-password2").show();
        $("#hide-password2").hide();
    });

    
});