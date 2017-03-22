function validateForm(){
	// Test name.
	var firstName = document.getElementById('txtFirstName').value;
	var lastName = document.getElementById('txtLastName').value;
	var StrReg = "^[A-Z][a-z]*$";
	var regN = new RegExp(StrReg);
	
	if ((firstName == "") || (lastName == "")){
		alert ("Please enter full name.")
		return false;
	}
	
	if ((!(regN.test(firstName))) || (!(regN.test(lastName)))){
		alert ("Invalid Name");
		return false;
	}
	
	// Test gender.
	if ((document.getElementById('gender_1').checked != true) && (document.getElementById('gender_0').checked != true)){
		alert("Please select gender.");
		return false;
	}
	
	// Test email.
	var email = document.getElementById('txtEmail').value;
	var regEmail = /^\w+@\w+.com|.ca|.org$/;
	if (email == ""){
		alert ("Please enter your email address.")
		return false;
	}
		
	if (!(regEmail.test(email))){
		alert ("Invalid email address.")
		return false;
	}
	
	// Test Phone number
	var num0 = document.getElementById('txtPhone_0').value;
	var num1 = document.getElementById('txtPhone_1').value;
	var num2 = document.getElementById('txtPhone_2').value;
	var reg0 = /^\d{3}$/;
	var reg1 = /^\d{3}$/;
	var reg2 = /^\d{4}$/;
	if ((num0 == "") && (num1 == "") && (num2 == "")){
		alert ("Phone number should not be blank!")
		return false;
	}
		
	if ((!(reg0.test(num0)))||(!(reg1.test(num1)))||(!(reg2.test(num2)))){
		alert ("Invalid phone number.");
		return false;
	}
	
	// Test selector.
	if (document.getElementById('selPosition').selectedIndex == 0){
		alert( "You must select a flavor." );
		return false;
	} else return true;
}