jQuery(function() {
    jQuery('.c-tab__content:first-of-type').addClass('c-tab__content--active');
    jQuery('.c-tab__group:first-of-type').addClass('c-tab__group--active');
    
    jQuery('.c-tab__group').on('click', function() {
        jQuery('.c-tab__content').removeClass('c-tab__content--active');
        jQuery('.c-tab__group').removeClass('c-tab__group--active');
        
        jQuery(this).addClass('c-tab__group--active');
    
        let index = jQuery('.c-tab__group').index(this);
        jQuery('.c-tab__content').eq(index).addClass('c-tab__content--active');
    });
});

jQuery(window).on('load resize', function() {
    var tabHeight = [];
    let maxHeight = 0;
    jQuery('.c-tab__content').each(function(index) {
        jQuery(this).css({display: 'block'});
        tabHeight[index] = jQuery(this).height();
        jQuery(this).css({display: 'none'});
    });

    maxHeight = Math.max.apply(null, tabHeight);
    jQuery('.c-tab__content').css({height: (maxHeight)});
    jQuery('.p-skilltab__bg').css({height: (maxHeight)});
});

