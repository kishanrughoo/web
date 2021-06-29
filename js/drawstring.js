var tshirts = {
    'drawstring green': {
        'name': 'Drawstring Green',
		'price': 450,
        'currency': 'US$',
        'imageUrl': "images/tshirt1.png"
    },
    'drawstring black': {
        'name': 'Drawstring Black',
		'price': 450,
        'currency': 'US$',
        'imageUrl': "images/drawstring_black.jpg"
    },
    'drawstring blue': {
        'name': 'Drawstring Blue',
		'price': 450,
        'currency': 'US$',
        'imageUrl': "images/drawstring_blue.jpeg"
    }
};

var radioItems = document.getElementsByName("product");

for (var a = 0; a < radioItems.length; a++) {

    radioItems[a].onchange = function() {
        
        for (var b = 0; b < radioItems.length; b++) {
            
            if (radioItems[b].checked) {
                var selectedRadio = radioItems[b].value;
               
                document.getElementById("tshirt_image").src = tshirts[selectedRadio].imageUrl;
				document.getElementById("tshirt_price").innerHTML = tshirts[selectedRadio].currency + (tshirt[selectedRadio].price.toFixed(2)).toString();
			    document.getElementById("tshirt_name").innerHTML = tshirts[selectedRadio].name;
                

            }

        }
        
    } 

}

//footer  
document.getElementById("current_year").innerHTML = new Date().getFullYear();