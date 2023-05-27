jQuery(function () {
    jQuery('.c-product-card-container').slick({
        dots: false,
        slidesToShow: 3,
        arrows: false,
        useTransform: false,
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    centerMode: true,
                    centerPadding: '10%',
                    slidesToShow:2,
                    // infinite: false,
                }
            },
            {
                breakpoint: 1140,
                settings: {
                    centerMode: true,
                    centerPadding: '20px',
                    slidesToShow:2,
                }
            },
            {
                breakpoint: 860,
                settings: {
                    centerMode: true,
                    centerPadding: '15%',
                    slidesToShow:1,
                }
            },
            {
                breakpoint: 640,
                settings: {
                    centerMode: true,
                    centerPadding: '30px',
                    slidesToShow:1,
                }
            }
        ]
    });
});