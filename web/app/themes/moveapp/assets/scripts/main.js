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
                        version: 'v2.3' // or v2.0, v2.1, v2.0
                    });

                    var accessToken = '332897300242814|qGg9igkAKsL88273AqbGmifBAtQ';
                    FB.api('1632026917030663/feed', {
                        access_token : accessToken,
                        status_type: 'shared_story'
                    }, function(response) {
                        console.log(response)
                        $('#fb-text').append(response.data[0].description);
                    });
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
                    $answer.toggle( "fast", function() {
                        // Animation complete.
                    });
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
