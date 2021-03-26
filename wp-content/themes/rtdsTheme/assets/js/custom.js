
var site = {

	init: function() {
        jQuery('.hamburger-menu').click(function() {
            jQuery('.cover-menu').animate({"right": 0 });
            return false;
        });

        jQuery('.toggle-menu.toggle').click(function() {
            jQuery('.cover-menu').animate({"right": "-150%" });
            return false;
        });

        jQuery(window).resize(function() {
            var winWidth = jQuery(window).outerWidth();

            if (winWidth > 1000) {
                jQuery('.cover-menu').hide();
            }
        });
	},


};

$(document).ready(function() {
    site.init();
});
