
$(document).ready(function () {

    //highlight nav/footer button
    document.querySelector('.home').classList.add('active');

    //for demo, append popup with multiple slide
    var popCont1 = new Array(
        'assets/images/alert-img-1.jpg',
        'Testing title',
        'This is a paragraph for testing, This is a paragraph for testing, This is a paragraph for testing...'
    ),
        popCont2 = new Array(
            'assets/images/alert-img-2.jpg',
            'Jumanji Jumanji',
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed facilisis blandit mi vel aliquet.'
        ),
        popCont3 = new Array(
            'assets/images/alert-img-3.jpg',
            'Vestibulum aliquam est',
            'Aenean hendrerit lorem in augue rutrum fringilla. Praesent ligula mauris, tincidunt fringilla purus vel, feugiat tempus tortor. Donec nec ultricies enim, eget mattis sem.'
        )

    //for demo, append popup banner image
    $('body').append('<div class="img-loader"></div>');
    $('.img-loader').append('<img src="' + popCont1[0] + '" />');
    $('.img-loader').append('<img src="' + popCont2[0] + '" />');
    $('.img-loader').append('<img src="' + popCont3[0] + '" />');

    //when page fully loaded
    window.onload = function () {

        //slider
        $('#banner').show();
        $('#banner').owlCarousel({
            items: 1,
            loop: true,
            center: true,
            nav: true,
            rewind: false,
            navText: '',
            autoWidth: false,
            autoplay: true,
            autoplayHoverPause: true
        });

        //display popup
        // popUp();
        // popup_set_slide(popCont1);
        // popup_set_slide(popCont2);
        // popup_set_slide(popCont3);
        // popup_init_slide();
    };

});