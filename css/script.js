$(document).ready(function () {
var form = $('#myForm');
var name = document.getElementById("txtname").value;


name.blur(validateName);
name.keyup(validateName);

form.submit(function(){
	
	if(validateName() & validateTelephone()){
	return true;
	} else {
	    return false;
	}
});

function validateName(){
    if(name.val().length < 1){
		name.addClass("error");
		nameDetails.text("Name is required");
		nameDetails.addClass("error");
		return false;
		} else {
			name.removeClass("error");
			nameDetails.text("*");
			nameDetails.removeClass("error");
			return true;
      }
    }
});

	

