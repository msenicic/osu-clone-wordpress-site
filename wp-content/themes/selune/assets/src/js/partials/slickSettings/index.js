// Slick carousel settings across entire site
export default ($) => {
    // Example Block
    // (() => {
    //     let params = {
    //         slidesToShow: 1,
    //         slidesToScroll: 1,
    //         adaptiveHeight: true
    //     };
    //
    //     $('.js-example-selector').slick(params);
    // })();

    (() => {
        let params = {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: 0,
        };

        $('.slider').slick(params);
    })();
}