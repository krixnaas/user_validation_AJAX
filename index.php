<!-- index.php -->

<script src="jquery-1.12.0.min.js"></script>
  
  
<div> 
Username: 
<input type="text" name="username" id="username" required>
</div>
<div  id="username_error"></div>
<div>
<script>
	$(document).ready(function(){
		$('#username').change(function(){
			var classer = $(this).val();
				$.ajax({
					type:"POST",
						url:"data_loader.php",
						data:'username='+classer,
						success:function(result){
							if(result==1)
							{
								$('#username_error').html("<p style='color:red; font-style: italic;'>"+"Already Taken"+"</p>");
								$('#username').focus();
								$("#username").css("border", "1px solid red");
							}else{
								$('#username_error').html("<p style='color:green; font-style: italic;'>"+"Valid"+"</p>");
								
								$("#username").css("border", "1px solid green");
							}
					}
				});
			});
		});
																		
</script>	
