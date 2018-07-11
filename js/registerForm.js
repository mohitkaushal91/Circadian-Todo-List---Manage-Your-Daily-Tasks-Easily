function validate() {
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var password = document.getElementById("passwrd").value;
	var repassword = document.getElementById("repasswrd").value;
	var dataString = 'name1=' + name + '&email1=' + email + '&password1=' + password;
	if (name == '' || email == '' || password == '' || password != repassword) {
		alert("Please Fill All Fields");
	}
	else
	{
		$.ajax({
		   	type: "POST",
		   	url: "user_register.php",
			data: dataString,
	   		cache: false,
	   		success: function(html) {
                window.location.href = "https://todo.debugninja.com/success.html";
	     	}
		});
		$('.log-frm')[0].reset(); 
	}
	return false;
}