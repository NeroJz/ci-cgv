$(document).ready(function () {
    var screenWidth = $(window).width(),
        screenHeight = $(window).height(),
        fit_scale = 1,
        max_scale = 1,
        scale = fit_scale,
        last_scale = fit_scale,
        last_posX = 0,
        last_posY = 0,
        max_pos_x = 0
        ;

    //fit the seat plan fn
    function fit_plan() {
        var wrap = document.querySelector('.seat-wrap');
        wrap.classList.remove("zoomed");

        var stage = document.getElementById("seat-plan"),
            plan = document.getElementById("zoom"),
            plan_width = plan.offsetWidth,
            scaleX = stage.offsetWidth / plan_width,
            scale_floor = Math.floor(scaleX * 100) / 100,
            scale_final = Math.min(scale_floor, max_scale)
            ;

        wrap.classList.add("fitted");

        //update fit_scale & scale plan
        fit_scale = scale = last_scale = scale_final;
        last_posX = 0;
        last_posY = 0;
        max_pos_x = 0;

        plan.style.transform = ('scale(' + scale_final + ')');

        //set parent's height
        stage.style.height = scale_final * plan.clientHeight + "px";
    }
    //fot the seat plan when page is ready
    fit_plan();
    window.onresize = function (event) {
        //make sure both width & height has changed
        //prevent mobile url bar hide to fire resize
        if ($(window).width() != screenWidth) {
            fit_plan();
            screenWidth = $(window).width();
            screenHeight = $(window).height();
        }
    };

    //when page fully loaded
    window.onload = function () {

        //add pinch handler to seat plan
        function hammerIt(elm) {
            hammertime = new Hammer(elm, {});
            hammertime.get('pinch').set({
                enable: true
            });
            var posX = 0,
                posY = 0,
                transform = "",
                el = elm,
                parent_el = el.parentNode,
                screen = document.querySelector('.screen'),
                wrap = document.querySelector('.seat-wrap');

            hammertime.on('pan pinch panend pinchend', function (ev) {
                //wrap.classList.remove("fitted");
                //pan
                if (scale > fit_scale) {
                    posX = last_posX + ev.deltaX;
                    if (posX > 0) {
                        posX = 0;
                    }
                    if (posX < -max_pos_x) {
                        posX = -max_pos_x;
                    }
                } else {
                    wrap.classList.remove("zoomed");
                    wrap.classList.add("fitted");
                }
                if (posX < -max_pos_x) {
                    //fix problem when zoom out, seat plan stay out of screen
                    transform =
                        "translate(0, 0)" +
                        "scale(" + scale + ")";
                }

                //pinch
                if (ev.type == "pinch") {
                    scale = Math.max(fit_scale, Math.min(last_scale * (ev.scale), 1));
                    screen.style.opacity = 0;
                }
                if (ev.type == "pinchend") {
                    //add class to add right bar for page vertical scroll
                    if (scale > fit_scale) {
                        wrap.classList.remove("fitted");
                        wrap.classList.add("zoomed");
                    } else {
                        wrap.classList.remove("zoomed");
                        wrap.classList.add("zoomed");
                    }
                    last_scale = scale;
                    parent_el.style.height = scale * el.clientHeight + "px";
                    max_pos_x = Math.ceil((scale * el.clientWidth) - parent_el.offsetWidth);
                    screen.style.opacity = 1;
                }

                //panend
                if (ev.type == "panend") {
                    last_posX = posX < max_pos_x ? posX : max_pos_x;
                }

                if (scale > fit_scale) {
                    transform =
                        "translate(" + posX + "px, 0)" +
                        "scale(" + scale + ")";
                }

                //prevent seat plan stay outside screen after pinched
                if (posX < -max_pos_x) {
                    transform =
                        "translate(0, 0)" +
                        "scale(" + scale + ")";
                }

                if (transform) {
                    el.style.webkitTransform = transform;
                }

            });
        }
        hammerIt(document.getElementById("zoom"));

        //set reminder's height
        var wrap = $('#seat-reminder'),
            wrap_height = wrap.height(),
            btn = wrap.find('.solidBtn')
            ;
        wrap.find('.centerContent').css('height', wrap_height);
        $('<div class="overlay"></div>').insertAfter(wrap).velocity('fadeIn');
        wrap.velocity('slideDown');
        btn.one('click', function () {
            $('.overlay').velocity('fadeOut');
            wrap.velocity('slideUp', function () {
                wrap.next('.overlay').remove();
            });
        });

        // Original Source Code FROM designer
        //show custum alert when non-login user clicked next
        // $('.reminder .next').on('click', function () {
        //     $('.overlay').velocity('fadeIn', function () {
        //         $('#cust_alert').show();
        //     });
        //     $('.close').on('click', function () {
        //         $('#cust_alert').remove();
        //         $('.overlay').velocity('fadeOut', function () {
        //             $(this).remove();
        //         });
        //     });
        //     $('#cust_alert .solidBtn').on('click', function () {
        //         window.location.href = 'login.php'
        //     });
        //     $('#cust_alert .strokeBtn').on('click', function () {
        //         window.location.href = 'payment.php'
        //     });
        // });


        $('.reminder .next').on('click', function () {
            window.location.href = site_url + 'payment';
        });

    }

});