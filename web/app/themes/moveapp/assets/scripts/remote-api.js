jQuery( document ).ready(function($) {
    if(sessionStorage.getItem('accessToken') != null && sessionStorage.getItem('user') != null) {
        $('.login, .register').hide();
        $('#logged-in').show();
        user = JSON.parse(sessionStorage.getItem('user'));
        console.log(user);
        $('#logged-in').text(user.first_name+" "+user.last_name);
    }
    $('#btn_login').click(function(e){
        e.preventDefault();
        data = {"username": $('#username').val(), "password": $('#password').val()};
        login(data);
    });
});

var apiUrl = "http://app.moveapp.se/";
var jsonUser;

function login(data){
    $.ajax({
        url: apiUrl+'api-token-auth/',
        contentType: "application/json",
        method: "POST",
        data: JSON.stringify(data),
        processData: false,
        dataType: 'json',
        success:function(response){
            //console.log(response);
            token = response.token;

            sessionStorage.setItem('accessToken', token);
            parts = token.split(".");

            var json = Base64.decode(parts[1]);
            json = clean_up_json(json);
            console.log(json);
            get_user(json.user_id);

        },
        error: function(errorThrown){
            console.log(errorThrown);
        }
    });
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
    if(sessionStorage.getItem('accessToken') != null) {
        return true;
    }else{
        return false;
    }
}

function get_user(user_id){
    $.ajax({
        url: apiUrl+'api/users/'+user_id+'/',
        contentType: "application/json",
        method: "GET",
        processData: false,
        dataType: 'json',
        beforeSend: function(xhr) {
            if (sessionStorage.getItem('accessToken')) {
                xhr.setRequestHeader('Authorization',
                    'JWT ' + sessionStorage.getItem('accessToken'));
            }
        },
        success:function(response){
            console.log(response.first_name);
            sessionStorage.setItem('user', JSON.stringify(response));
            location.reload();
        },
        error: function(errorThrown){
            console.log(errorThrown);
        }
    });
}

function test() {

}

var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}

var customNamespace = {
    myFunction: function() {
        //alert('custom namespace');
    }
};