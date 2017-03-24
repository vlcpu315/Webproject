function resetFields() {
$("input[type=text],input[type=tel]").removeClass("required");
$("#selPosition").removeClass("required");
$("#message,#message_1,#message_2,#message_3,#message_4").html("");
}

function validateForm(){
	resetFields();
	// Test name.
	var firstName = document.getElementById('txtFirstName').value;
	var lastName = document.getElementById('txtLastName').value;
	var StrReg = "^[a-zA-Z]+$";
	var regN = new RegExp(StrReg);
	
	if (firstName == ""){
		$("#txtFirstName").addClass("required");
		$("#txtFirstName").effect("shake");
		$("#message").html('***Please enter full name.***');
		document.getElementById("txtFirstName").style.backgroundColor="yellow";
		return false;
	} else 		document.getElementById("txtFirstName").style.backgroundColor="";
	
	if (lastName == ""){
		$("#txtLastName").addClass("required");
		$("#txtLastName").effect("shake");
		document.getElementById("txtLastName").style.backgroundColor="yellow";
		$("#message").html('***Please enter full name.***');
		return false;
	} else 	document.getElementById("txtLastName").style.backgroundColor="";
	
	if ((!(regN.test(firstName))) || (!(regN.test(lastName)))){
		$("#txtLastName,#txtFirstName").addClass("required");
		$("#form_name").effect("shake");
		$("#message").html('***Invalid Name***');
		document.getElementById("form_name").style.backgroundColor="yellow";
		return false;
	} else 	document.getElementById("form_name").style.backgroundColor="";
	
	// Test gender.
	if ((document.getElementById('gender_1').checked != true) && (document.getElementById('gender_0').checked != true) && (document.getElementById('gender_2').checked != true)){
		$("#form_gender").effect("shake");
		$("#message_1").html('***Please select gender.***');
		document.getElementById("form_gender").style.backgroundColor="yellow";
		return false;
	} else 		document.getElementById("form_gender").style.backgroundColor="";
	
	// Test email.
	var email = document.getElementById('txtEmail').value;
	var regEmail = /^\w+@\w+.com|.ca|.org$/;
	if (email == ""){
		$("#txtEmail").addClass("required");
		$("#txtEmail").effect("shake");
		$("#message_2").html('***Please enter your email address.***');
		document.getElementById("txtEmail").style.backgroundColor="yellow";
		return false;
	} else 	document.getElementById("txtEmail").style.backgroundColor="";
		
	if (!(regEmail.test(email))){
		$("#txtEmail").addClass("required");
		$("#txtEmail").effect("shake");
		$("#message_2").html('***Invalid email address.***');
		document.getElementById("txtEmail").style.backgroundColor="yellow";
		return false;
	} else 	document.getElementById("txtEmail").style.backgroundColor="";
	
	// Test Phone number
	var num0 = document.getElementById('txtPhone_0').value;
	var num1 = document.getElementById('txtPhone_1').value;
	var num2 = document.getElementById('txtPhone_2').value;
	var reg0 = /^\d{3}$/;
	var reg1 = /^\d{3}$/;
	var reg2 = /^\d{4}$/;
	if ((num0 == "") && (num1 == "") && (num2 == "")){
		$("#txtPhone_0,#txtPhone_1,#txtPhone_2").addClass("required");
		$("#form_phone").effect("shake");
		$("#message_3").html('***Phone number should not be blank!***');
		document.getElementById("form_phone").style.backgroundColor="yellow";
		return false;
	} else 	document.getElementById("form_phone").style.backgroundColor="";
		
	if ((!(reg0.test(num0)))||(!(reg1.test(num1)))||(!(reg2.test(num2)))){
		$("#txtPhone_0,#txtPhone_1,#txtPhone_2").addClass("required");
		$("#form_phone").effect("shake");
		$("#message_3").html('***Invalid phone number.***');
		document.getElementById("form_phone").style.backgroundColor="yellow";
		return false;
	} else document.getElementById("form_phone").style.backgroundColor="";
	
	// Test selector.
	if (document.getElementById('selPosition').selectedIndex == 0){
		$("#selPosition").addClass("required");
		$("#selPosition").effect("shake");
		$("#message_4").html('***You must select a flavor.***');
		document.getElementById("form_sel").style.backgroundColor="yellow";
		return false;
	} else 
		document.getElementById("form_sel").style.backgroundColor="";
		return true;
}

