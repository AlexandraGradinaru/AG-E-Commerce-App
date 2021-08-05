$(document).ready(function () {
    autoSlide();
    $(document).on('click', '.navbar__icon', function () {
        $('.navbar').toggle('slide', {
            direction: 'left'
        }, 800);
        $('.navbar').css({
            "z-index": '2',
        });
    });
    $(document).on('click', '#close-btn', function () {
        $('.navbar').fadeOut(500);
    });
    $(document).on('mouseleave', '.navbar', function () {
        $('.navbar').fadeOut(500);
    });
    $(document).on('mouseout', '.navbar', function () {
        $('.navbar').fadeOut(500);
    });

});
function autoSlide(caller) {
    var interval = setInterval(function () {
        changeslide('next');
    }, 6000);
}
function changeslide(direction) {
    var currentImage = $('.show');
    var nextImage = currentImage.next();
    var prevImage = currentImage.prev();
    if (direction == 'next') {
        if (nextImage.length) {
            nextImage.addClass('show');
        } else {
            $('.slide-images img').first().addClass('show');
        }
    } else {
        if (prevImage.length) {
            prevImage.addClass('show');
        } else {
            $('.slide-images img').last().addClass('show');
        }
    }
    currentImage.removeClass('show');
}