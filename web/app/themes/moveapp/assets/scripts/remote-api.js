jQuery( document ).ready(function($) {

    if(is_logged_in()) {
        user = JSON.parse(sessionStorage.getItem('user'));
        $('.login, .register').hide();
        $('#logged-in').show();
        if((user.first_name).length != 0) {
            $('#logged-in').html('<i class="fa fa-user"></i>'+user.first_name+" "+user.last_name);
        }else{
            $('#logged-in').text("Skapa profil");
        }

        timer(true);
    }else{
        $('.login, .register').show();
        $('#logged-in').hide();
    }

    $('#btn_login').click(function(e){
        e.preventDefault();
        $(this).addClass('thinking btn-primary').removeClass('btn-default').attr("disabled", "disabled");
        sessionStorage.setItem('password', $('#password').val());
        data = {"username": $('#username').val(), "password": $('#password').val()};
        login(data);
    });
});

$(document).ajaxComplete(function(event, xhr, settings){
    console.log(JSON.parse(xhr.responseText).detail);
    if(JSON.parse(xhr.responseText).detail == "Signature has expired.") {
        logout(true);
    }
});

function timer(start) {
    var idleTime = 0;
    if(start) {
        var idleInterval = setInterval(timerIncrement, 60000); // 1 minute
    }else{
        clearInterval(idleInterval);
    }


    //Zero the idle timer on mouse movement.
    $(this).mousemove(function (e) {
        idleTime = 0;
    });
    $(this).keypress(function (e) {
        idleTime = 0;
    });

    function timerIncrement() {
        idleTime = idleTime + 1;
        //console.log(idleTime);
        if(is_logged_in()) {
            if (idleTime < 15) { // 20 minutes
                refreshToken();
            }else{
                logout(true);
            }
        }
    }
}

var apiUrl = "http://app.moveapp.se/";
var user;

function login(data){
    $.ajax({
        url: apiUrl+'api-token-auth/',
        contentType: "application/json",
        method: "POST",
        data: JSON.stringify(data),
        crossDomain: false,
        processData: false,
        dataType: 'json',
        success:function(response){
            //console.log(response);
            token = response.token;
            sessionStorage.setItem('accessToken', token);
            parts = token.split(".");

            var json = Base64.decode(parts[1]);
            json = clean_up_json(json);

            get_user(json.user_id);
            get_profile(json.user_id);
            get_subscription();
            timer(true);
            $('.login-wrap').removeClass("logging-in");
            $('#loginModal').modal('hide');
        },
        error: function(errorThrown){
            console.log(errorThrown);
            if(errorThrown.statusText == "error") {
                showLoginError();
            }
            responseText = JSON.parse(errorThrown.responseText);
            console.log(responseText.non_field_errors.toString());
            if(responseText.non_field_errors == "Unable to login with provided credentials.") {
                showLoginError();

            }
        }
    });

    function showLoginError() {
        $('.errors').html('Något gick fel. Kontrollera ditt användarnamn och lösenord och försök igen.').show("slow");
        $('#btn_login').removeClass('thinking btn-primary').addClass('btn-default').prop("disabled", false);
    }
}

function clean_up_json(json) {
    // preserve newlines, etc - use valid JSON
    json = json.replace(/\\n/g, "\\n")
        .replace(/\\'/g, "\\'")
        .replace(/\\"/g, '\\"')
        .replace(/\\&/g, "\\&")
        .replace(/\\r/g, "\\r")
        .replace(/\\t/g, "\\t")
        .replace(/\\b/g, "\\b")
        .replace(/\\f/g, "\\f");
    // remove non-printable and other non-valid JSON chars
    json = json.replace(/[\u0000-\u0019]+/g,"");
    return (JSON.parse(json));

}

function is_logged_in() {
    if(sessionStorage.getItem('accessToken')) {
        return true;
    }else{
        return false;
    }
}

function update_user(user_id, data, pwdchange) {
    $.ajax({
        url: apiUrl+'api/users/'+user_id+'/',
        contentType: "application/json",
        method: "PATCH",
        data: JSON.stringify(data),
        processData: false,
        dataType: 'json',
        headers: {"Authorization": 'JWT ' + sessionStorage.getItem('accessToken')},
        beforeSend: function(xhr) {
            if (sessionStorage.getItem('accessToken')) {
                xhr.setRequestHeader('Authorization',
                    'JWT ' + sessionStorage.getItem('accessToken'));
            }
        },
        success:function(response){
            console.log(response);
            sessionStorage.setItem('user', JSON.stringify(response));
            if(pwdchange) {
                console.log(data);
                sessionStorage.setItem('password', data.password);
                $('.modal .alert').show("slow", function() {
                    setTimeout(function() {
                        $('.change-pass-modal').modal('hide');
                    }, 1000);
                });

            }else{
                $('.save-changes').removeClass('thinking').addClass('btn-primary').prop("disabled", false).hide("slow");
            }

        },
        error: function(errorThrown){
            console.log(errorThrown);
        }
    });
}

function get_user(user_id){
    $.ajax({
        url: apiUrl+'api/users/'+user_id+'/',
        contentType: "application/json",
        method: "GET",
        processData: false,
        dataType: 'json',
        headers: {"Authorization": 'JWT ' + sessionStorage.getItem('accessToken')},
        beforeSend: function(xhr) {
            if (sessionStorage.getItem('accessToken')) {
                xhr.setRequestHeader('Authorization',
                    'JWT ' + sessionStorage.getItem('accessToken'));
            }
        },
        success:function(response){
            console.log(response);
            sessionStorage.setItem('user', JSON.stringify(response));
            user = JSON.parse(sessionStorage.getItem('user'));
            $('.login, .register').fadeOut( "slow", function() {
                $('#logged-in').css("transform", "scale(2.0)").fadeIn("slow");
                $('#logged-in').css("transform", "scale(1.0)");
                $('#logged-in').html('<i class="fa fa-user"></i>'+user.first_name+" "+user.last_name);
                $('.login-wrap').removeClass("hover");
            });


        },
        error: function(errorThrown){
            console.log(errorThrown);
        }
    });
}

function get_profile(user_id) {
    $.ajax({
        url: apiUrl+'api/users/'+user_id+'/profile/',
        contentType: "application/json",
        method: "GET",
        processData: false,
        dataType: 'json',
        headers: {"Authorization": 'JWT ' + sessionStorage.getItem('accessToken')},
        beforeSend: function(xhr) {
            if (sessionStorage.getItem('accessToken')) {
                xhr.setRequestHeader('Authorization',
                    'JWT ' + sessionStorage.getItem('accessToken'));
            }
        },
        success:function(response){
            console.log("Profile");
            console.log(response)
            sessionStorage.setItem('profile', JSON.stringify(response));
        },
        error: function(errorThrown){
            console.log(errorThrown);
        }
    });
}

function get_subscription() {
    $.ajax({
        url: apiUrl+'register/status/',
        contentType: "application/json",
        method: "GET",
        processData: false,
        dataType: 'json',
        headers: {"Authorization": 'JWT ' + sessionStorage.getItem('accessToken')},
        beforeSend: function(xhr) {
            if (sessionStorage.getItem('accessToken')) {
                xhr.setRequestHeader('Authorization',
                    'JWT ' + sessionStorage.getItem('accessToken'));
            }
        },
        success:function(response){
            //console.log(response);
            sessionStorage.setItem('subscription', JSON.stringify(response));
            update_subscription();
        },
        error: function(errorThrown){
            console.log(errorThrown);
        }
    });
}

function cancel_subscription() {
    $.ajax({
        url: apiUrl+'register/cancel/',
        contentType: 'application/json',
        method: 'GET',
        processData: false,
        dataType: 'json',
        headers: {"Authorization": 'JWT ' + sessionStorage.getItem('accessToken')},
        beforeSend: function(xhr) {
            if (sessionStorage.getItem('accessToken')) {
                xhr.setRequestHeader('Authorization',
                    'JWT ' + sessionStorage.getItem('accessToken'));
            }
        },
        success:function(response){
            //console.log(response);
            get_subscription();
        },
        error: function(errorThrown){
            console.log(errorThrown);
        }
    })
}


function refreshToken() {
    //console.log(sessionStorage.getItem('accessToken'));
    data = {"username": user.email, "password": sessionStorage.getItem('password')};
    $.ajax({
        url: apiUrl+'api-token-auth/',
        contentType: "application/json",
        method: "POST",
        crossDomain: false,
        processData: false,
        data: JSON.stringify(data),
        dataType: 'json',
        headers: {"Authorization": 'JWT ' + sessionStorage.getItem('accessToken')},
        beforeSend: function(xhr) {
            if (sessionStorage.getItem('accessToken')) {
                xhr.setRequestHeader('Authorization',
                    'JWT ' + sessionStorage.getItem('accessToken'));
            }
        },
        success:function(response){
            token = response.token;
            sessionStorage.setItem('accessToken', token);
        },
        error: function(errorThrown){
            console.log(errorThrown);
        }
    });
}


//UPDATES SUB IN VIEW
function update_subscription() {
    var subscription = JSON.parse(sessionStorage.getItem('subscription'));
    var cancelled = subscription.cancelled;
    var end_date = subscription.end_date;
    var datetime = new Date();
    var today = datetime.getTime();
    var dt = new Date(end_date*1000);
    var newDt = dt.getFullYear()+("0"+(dt.getMonth()+1)).slice(-2)+("0"+dt.getDate()).slice(-2);
    //console.log("end: "+end_date+" today: "+today);

    if(end_date*1000 >= today) {
        if(cancelled == false) {
            $('.subscription h4').text("Tillsvidare abonnemang. Nuvarande period avslutas "+newDt+". (Ditt abonnemang förnyas automatiskt.)");
            $('button.avsluta').show();
            $('button.aktivera').hide();
        }else{
            $('.subscription h4').text("Abonnemang avslutat. Aktivt t.o.m "+newDt);
            $('button.avsluta').hide();
        }
    }else {
        $('.subscription h4').text("Inget aktivt abonnemang.");
        $('button.aktivera').show();
    }
}

function logout(inactive) {
    sessionStorage.clear();
    if(inactive) {
        alert("Du har blivit utloggad pga inaktivitet.");
    }
    window.location = "http://moveapp.se";
    timer(false);
}

var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}
