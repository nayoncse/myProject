	<script>
	function valid(){
	
 

	//Do ajax call for registration.
	/* var name, email, pass, conf_pass;
	name = $('#inputName').val(); */
	$.ajax({
		type: "POST",
		url: 'config/action.php',
		data: {
			request: 'reg',
			Name: $('#Name').val(),
			Email: $('#Email').val(),
			password1: $('#password1').val(),
			password2: $('#password2').val()		
		},
		success: function(result){
			$('#Name').val('');
			$('#Email').val('');
			$('#password1').val('');
			$('#password2').val('');
			alert(result);
		}
	});
	
    //alert ("User Regindtration Successful.");
	return false;
}
/*  function validd(){
	 
	 if(valid() == true){
		 
		 return false;
	 }
	 return true;
 } */
 
 function validLogin(){
	

	
	
	
	$.ajax({
		type: "POST",
		url: 'config/action.php',
		data: {
			request: 'login',
			
			email2: $('#email2').val(),
			inputPassword: $('#inputPassword').val()
					
		},
		success: function(result){
			if(result == 'SUCCESS'){
				window.location.replace("admin/index.php");
			}else if(result == 'SUCCESS2'){
				window.location.replace("index.php");
			}
			else {
				alert(result);
			}
			//$('#email2').val('');
			//$('#inputPassword').val('');
			
			//alert(result);
		}
	});

	return false;
}  

	</script>