(function ($) {
    $(function () {

        $('.button-collapse').sideNav();

        $('[name="birth_date"]').pickadate({
            selectMonths: true,
            selectYears: true,
            min: [1936,0,1],
            max: [2002,1,28],
            format: 'dd/mm/yyyy'
        });
        $('[name="payment_date"]').pickadate({
            selectMonths: true,
            selectYears: true,
            min: [2016,0,1],
            format: 'dd/mm/yyyy'
        });


        $('select').material_select();

    }); // end of document ready
})(jQuery); // end of jQuery name space