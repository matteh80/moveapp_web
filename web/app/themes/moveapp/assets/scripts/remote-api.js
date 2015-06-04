jQuery( document ).ready(function($) {
    //$("#login-form").submit(function() {
    //    alert($window.sessionStorage.accessToken)
    //    data = {"username": $('#username').val(), "password": $('#password').val()};
    //    login(data);
    //});
    $('#btn_login').click(function(e){
        e.preventDefault;
        data = {"username": "test@test.net", "password": "testtest"};
        login(data);
    });



});

var apiUrl = "http://app.moveapp.se/";

function login(data){
    $.ajax({
        url: apiUrl+'api-token-auth/',
        contentType: "application/json",
        method: "POST",
        data: JSON.stringify(data),
        processData: false,
        dataType: 'json',
        success:function(response){
            console.log(response);
            $(window).sessionStorage.accessToken = response.token;
        },
        error: function(errorThrown){
            alert('error');
            console.log(errorThrown);
        }
    });
}