const Drawer = class {
    constructor() {
        this.btn = '.l-drawer__btn';
        this.bg = '.l-drawer__bg';
        this.main = '.l-drawer__main';
        this.active = 'active';
    }
}

jQuery(function() {
    let drawer = new Drawer();
    jQuery(drawer.btn).on('click',function() {toggle(drawer);});

    jQuery(drawer.bg).on('click',function() {toggle(drawer);})
});


function toggle(drawer) {
    jQuery(drawer.btn).toggleClass(drawer.active);
    jQuery(drawer.bg).toggleClass(drawer.active);
    jQuery(drawer.main).toggleClass(drawer.active);
}