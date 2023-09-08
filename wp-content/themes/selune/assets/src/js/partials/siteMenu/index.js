export default ($) => {
    let _body = $('body');
    let _doc = $(document);

    //Menu trigger
    (() => {
        let selectors = $('.m-overlay, .js-menu-trigger');
        let prevent = false;

        selectors.click((e) => {
            e.preventDefault();

            if (!prevent) {
                _body.toggleClass('m-open');
                prevent = !prevent;

                setTimeout(() => {
                    prevent = !prevent;
                }, 400);
            }
        });
    })();

    //Smooth scroll
    (() => {
        $('a[href*="#"]:not(.js-disable)').click(function () {
            let target = $(this.hash);
            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 75
                    }, 1000);
                    return false;
                }
            }
        });
    })();

    //Scroll change
    (() => {
        let _body = document.body;
        let saved_scroll_position = 0;
        let current_scroll_position;

        _body.classList.toggle('scroll', _doc.scrollTop() > 50);

        function getScrollXY() {
            var scrOfX = 0, scrOfY = 0;
            if( typeof( window.pageYOffset ) == 'number' ) {
                //Netscape compliant
                scrOfY = window.pageYOffset;
                scrOfX = window.pageXOffset;
            } else if( document.body && ( document.body.scrollLeft || document.body.scrollTop ) ) {
                //DOM compliant
                scrOfY = document.body.scrollTop;
                scrOfX = document.body.scrollLeft;
            } else if( document.documentElement && ( document.documentElement.scrollLeft || document.documentElement.scrollTop ) ) {
                //IE6 standards compliant mode
                scrOfY = document.documentElement.scrollTop;
                scrOfX = document.documentElement.scrollLeft;
            }
            return [ scrOfX, scrOfY ];
        }

        function getDocHeight() {
            var D = document;
            return Math.max(
                _body.scrollHeight, D.documentElement.scrollHeight,
                _body.offsetHeight, D.documentElement.offsetHeight,
                _body.clientHeight, D.documentElement.clientHeight
            );
        }

        window.addEventListener('scroll', function () {
            current_scroll_position = window.pageYOffset;

            if (saved_scroll_position < current_scroll_position && current_scroll_position > 50) {
                _body.classList.remove('slideDown');
                _body.classList.add('slideUp');
            } else if ((saved_scroll_position > current_scroll_position) && (getDocHeight() - 50 > getScrollXY()[1] + window.innerHeight)) {
                _body.classList.remove('slideUp');
                _body.classList.add('slideDown');
            }

            saved_scroll_position = current_scroll_position;

            if (window.pageYOffset >= 50) {
                _body.classList.add('fixed-nav', 'scrolled');
            } else {
                _body.classList.remove('fixed-nav');
            }
        });
    })();
}