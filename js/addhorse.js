
var backend_url = 'http://localhost/betting/backend/admin/addhorse.php';

// magic.js
$(document).ready(function() {

    // process the form
    $('.horse-add-form').submit(function(event) {

        // get the form data
        // there are many ways to get this data using jQuery (you can use the class or id also)
        var formData = {
            'horse_name'              : $('input[name=horse_name]').val(),
            'horse_dob'             : $('input[name=horse_dob]').val(),
			'horse_weight'    : $('input[name=horse_weight]').val(),
			'stable_id'		: $(this).children("option:selected").val()
        };

        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : backend_url, // the url where we want to POST
            data        : formData, // our data object
            dataType    : 'json', // what type of data do we expect back from the server
                        encode          : true
        })
            // using the done promise callback
            .done(function(data) {

                // log data to the console so we can see
                console.log(data); 

                // here we will handle errors and validation messages
            });

        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();
    });

});