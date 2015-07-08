$(document).ready(function () {
    var global = {

        // GENERAL
        _WW: window.innerWidth,
        _WH: window.innerHeight,

        // MENU
        $menuIcon: $('.menu-icon'),
        $menuClose: $('.menu-close'),
        $menu: $('.menu'),
        $menuItems: $('.menu-item'),
        menuIsOpen: false
    };

    /**
     * openMenu() Open menu for mobile
     *
     *
     *
     *
     */

    function openMenu(){
        global.$menu.fadeIn(400);


        var delay = 0;
        global.$menuItems.each(function(){

            var $this = $(this);

            TweenMax.fromTo($this, 0.8, {opacity: 0, y: "100%"}, {delay: delay, opacity: 1, y: "0%", ease: Quint.easeInOut});
            delay += 0.1;
        });

        global.menuIsOpen = true;

        $('html, body').addClass('overflow');
    }

    /**
     * closeMenu() Open menu for mobile
     *
     *
     *
     *
     */

    function closeMenu(){
        var delay = 0;
        $(global.$menuItems.get().reverse()).each(function(){

            var $this = $(this);

            TweenMax.to($this, 0.6, {delay: delay, opacity: 0, y: "100%", ease: Quint.easeInOut});
            delay += 0.1;
        });


        global.$menu.delay(400).fadeOut(400);

        global.menuIsOpen = false;

        $('html, body').removeClass('overflow');
    }

    global.$menuIcon.on('click touchend', function(){
        openMenu();
    });

    global.$menuClose.on('click touchend', function(){
        closeMenu();
    });

    $(document).on('.disable', 'click touchstart touchend', function(e){
        e.preventDefault();
    });

    $(window).on('resize', function(){
        global._WW = window.innerWidth;
        global._WH = window.innerHeight;

        if(global._WW > 767 && !global.menuIsOpen){
            openMenu();
        }
    })
});