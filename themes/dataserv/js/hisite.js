var Hisite = (function () {

    var publicMethods = {
        updateCart: function (selector, callback) {
            $(selector).html('<i class="fa fa-refresh fa-spin fa-lg"></i>');
            $.get("/cart/cart/topcart", function(data) {
                $("li.dropdown.notifications-menu").replaceWith( data );
            }).done(callback());
        }
    };

    return publicMethods;

})();
