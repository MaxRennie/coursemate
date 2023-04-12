var home = {
    init: function () {
        new Glide('.glide', {
            type: 'carousel',
            perView: 1,
            animationDuration: 2000,
/*             autoplay: 4500, */
            startAt: 2,
        }).mount()
    }
};