$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML="";
    var field2 = "<div class=\"form-group\"><label class=\"col-sm-12\">Horse + Jockey";

    var xhr= new XMLHttpRequest();
    xhr.open('GET', 'http://localhost/betting/frontend/admin/select_horses.php', true);
    xhr.onreadystatechange= function() {
        if (this.readyState!==4) return;
        if (this.status!==200) return; // or whatever error handling you want
        fieldHTML = this.responseText;
        };
xhr.send();

   var fieldbuttonHTML = "<a href=\"javascript:void(0);\" class=\"remove_button fa fa-trash-o\"></a></div>"; //New input field html 
   
   var x = 1; //Initial field counter is 1
    /*
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML);
            $(wrapper).append(fieldbuttonHTML); //Add field html
        }
    }); */



    $(addButton).click(function() {
        if(x < maxField){
            x++; 
        $('<div/>').append($(field2  + fieldHTML))
        .insertBefore( this );
        }
    });

/*
    $(document).on('click', '.remove_button', function( e ) {
        e.preventDefault();
        $(this).closest( 'div.new-text-div' ).remove();
        x--;
    });
*/

    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).closest( 'div.form-group' ).remove();
        x--; //Decrement field counter
    });
});