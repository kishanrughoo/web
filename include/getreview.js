$(document).ready(function() {
    $('form[name="formvr"]').submit(function(event) {
        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();


        var $form = $(this);
        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var backend_url = $form.attr('action');

        $.get(backend_url, function(data, status) {
            $('div[name="viewreview"]').html(data);
        });


        $($form).closest(".modal:visible").modal('toggle');
        $(".resetfield").val("");
        for (var i = 0; i < 10; i++) {
            $(".remove_button").click();
        }
    });

});