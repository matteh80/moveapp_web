/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function ($) {

    // Use this variable to set up the common and page specific functions. If you
    // rename this variable, you will also need to rename the namespace below.
    var Sage = {
        // All pages
        'common': {
            init: function () {
                // JavaScript to be fired on all pages
            },
            finalize: function () {
                //FACEBOOK
                debug_js = '//connect.facebook.net/en_US/sdk/debug.js';
                js = '//connect.facebook.net/sv_SE/sdk.js';

                $.getScript(js, function () {
                    FB.init({
                        appId: '332897300242814',
                        appSecret: 'a912eb6e7d0a4136f0ae9d799258818b',
                        cookie: true,
                        xfbml: false,  // parse social plugins on this page
                        version: 'v2.2' // or v2.0, v2.1, v2.0
                    });

                    var accessToken = '332897300242814|qGg9igkAKsL88273AqbGmifBAtQ';
                    FB.api('1632026917030663/feed', {
                        access_token: accessToken,
                        status_type: 'shared_story'
                    }, function (response) {
                        console.log(response)
                        $.each(response.data, function(i, item) {
                            //console.log(item.status_type);
                            if(item.status_type == 'shared_story') {
                                $('#fb-text').append(item.description);
                            }
                        });
                    });
                });

                $('.login-wrap').on('mouseover', function () {
                    $(this).addClass('hover');
                }).on('mouseout', function (e) {
                    if (!$(e.target).is('input')) {
                        $(this).removeClass('hover');
                    }
                });

            }
        },
        // Home page
        'home': {
            init: function () {
                // JavaScript to be fired on the home page
            },
            finalize: function () {
                $("video").click(function (e) {
                    $("video").not(this).each(function (ele) {
                        video = this;
                        this.pause();
                        $(this).siblings(".play-btn").css("display", "block");
                        $(this).siblings(".genericon-fullscreen").css("display", "none");
                        $(this).removeAttr("controls");
                    });

                    // toggles play / pause
                    this.paused ? this.play() : this.pause();
                    this.paused ? $(this).siblings(".play-btn").css("display", "block") : $(this).siblings(".play-btn").css("display", "none");
                    this.paused ? $(this).removeAttr("controls", "") : $(this).attr("controls", "");
                });
            }
        },
        // About us page, note the change from about-us to about_us.
        'nyheter': {
            init: function () {
                // JavaScript to be fired on the about us page
            },
            finalize: function () {

            }
        },
        'single': {
            init: function () {
                // JavaScript to be fired on the about us page
            },
            finalize: function () {
                $('.news').addClass('active');
            }
        },
        // Kontakt
        'kontakt': {
            init: function () {

            },
            finalize: function () {
                //SEND MAIL AJAX
                $( "form" ).on( "submit", function( event ) {
                    event.preventDefault();
                    $('.btn-submit').addClass('thinking btn-default').removeClass('btn-primary').attr("disabled", "disabled");
                    var ajaxurl = document.location.protocol+'//'+document.location.host+'/wp-admin/admin-ajax.php';
                    var name = $("input#name").val();
                    var email = $("input#email").val();
                    var subject = $("input#subject").val();
                    var message = $("textarea#message").val().replace(/\n/g,"<br>") + "<br><br><br>Skickat från moveapp.se";

                    var response = grecaptcha.getResponse();


                    if(response.length > 0) {
                        var user_ip = 0;
                        $.getJSON("http://jsonip.appspot.com?callback=?",
                            function(data){
                                user_ip = data.ip;
                            });
                        $.post(
                            "https://www.google.com/recaptcha/api/siteverify",
                            {
                                secret: "6Le_fAgTAAAAAJ3ed9pbuuSL7c8tKidgo85X205W",
                                response: grecaptcha.getResponse(),
                                remoteip: user_ip
                            }
                        )
                            .done(function(response) {
                                if(response.success == true) {
                                    send_mail();
                                }else{
                                    $('#mailsent').text("Är du säker på att du är en människa? Försök igen...").show();
                                }
                            })
                    }

                    function send_mail() {
                        $.ajax({
                            type: "POST",
                            url: "https://mandrillapp.com/api/1.0/messages/send.json",
                            data: {
                                'key': 'rRpN_d3D5C8615wC1qMDpA',
                                'message': {
                                    'from_email': email,
                                    'from_name': name,
                                    'to': [
                                        {
                                            'email': 'support@moveapp.se',
                                            'name': 'Support',
                                            'type': 'to'
                                        }
                                    ],
                                    "headers": {
                                        "Reply-To": email
                                    },
                                    'subject': subject,
                                    'html': message,
                                    "track_opens": true,
                                    "track_clicks": true,
                                }
                            },
                            success:function(data){
                                console.log(data)
                                $('#mailsent').fadeIn(1000,function() {
                                    $(':input','#contact')
                                        .not(':button, :submit, :reset, :hidden')
                                        .val('')
                                        .removeAttr('checked')
                                        .removeAttr('selected');
                                    grecaptcha.reset();
                                    $('.btn-submit').removeClass('thinking btn-default').addClass('btn-primary').prop("disabled", false);
                                });
                            },
                            error: function(errorThrown){
                                alert('error');
                                console.log(errorThrown);
                            }
                        });
                    }
                });
            }
        },
        // Faq page.
        'vanliga_fragor': {
            init: function () {
                // JavaScript to be fired on the about us page
            },
            finalize: function () {
                $(".faq-title").click(function (e) {
                    e.preventDefault();
                    $answer = $(this).siblings(".faq-answer");
                    //$answer.css("display", "block");
                    $answer.toggle("fast", function () {
                        // Animation complete.
                    });
                });
            }
        },
        // User page.
        'page_template_template_profil': {
            init: function () {
                if(!is_logged_in()) {
                    window.location = "http://moveapp.se";
                }
                get_subscription();
            },
            finalize: function () {
                //LiveEdit.init();
                //USER
                user = JSON.parse(sessionStorage.getItem('user'));
                $('.name #first_name').text(user.first_name+" ");
                $('.name #last_name').text(user.last_name);
                //$('.loc').text(user.location);
                $('.loc').prepend(user.location);

                //PROFILE
                profile = JSON.parse(sessionStorage.getItem('profile'));
                console.log(profile);
                $('.kcal_value').text(profile.total_kcal);
                $('.time_value').text(parseInt(profile.total_time/60));

                //PROFILE PICTURE
                if(user.profile_picture != null) {
                    var image = new Image();
                    image.src = 'data:image/png;base64,'+user.profile_picture;
                    $('.picture-wrapper').empty().append(image);
                    $('.picture-wrapper').children().addClass('img-circle profile-picture');
                }
                $('.picture-wrapper').children().css('visibility','visible').hide().fadeIn('slow');

                //SUBSCRIPTION
                $('button.avsluta').click(function(e) {
                    cancel_subscription();
                });

                //AKTIVERA ABONNEMANG
                $('button.aktivera').click(function(e) {
                    console.log("click")
                    $(this).parent().attr("href", "http://app.moveapp.se/register/subscribe/"+user.user_id);
                });

                //LOGOUT
                $('button.logout').click(function(e) {
                    logout();
                });

            }
        }
    };

    // The routing fires all common scripts, followed by the page specific scripts.
    // Add additional events for more control over timing e.g. a finalize event
    var UTIL = {
        fire: function (func, funcname, args) {
            var fire;
            var namespace = Sage;
            funcname = (funcname === undefined) ? 'init' : funcname;
            fire = func !== '';
            fire = fire && namespace[func];
            fire = fire && typeof namespace[func][funcname] === 'function';

            if (fire) {
                namespace[func][funcname](args);
            }
        },
        loadEvents: function () {
            // Fire common init JS
            UTIL.fire('common');

            // Fire page-specific init JS, and then finalize JS
            $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function (i, classnm) {
                UTIL.fire(classnm);
                UTIL.fire(classnm, 'finalize');
            });

            // Fire common finalize JS
            UTIL.fire('common', 'finalize');
        }
    };

    // Load Events
    $(document).ready(UTIL.loadEvents);


})(jQuery); // Fully reference jQuery after this point.