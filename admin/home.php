<style>
  
</style>

<div id="header" class="container-fluid">
	<p>
	DEV NOTES
	</p>
</div>

<div id="header" class="container-fluid">
	<p>
	BENEDICT UNG SQL INJECTOR NA PINAPAGAWA KO
	</p>
	<p>
	For now per page muna ilagay queries at conn, later na lang iorganize, idk kung bkt kelangan mag ajax
	</p>
	<p>
	Implement Alert Box on landing page buttons when a subsystem has critical notifications
	</p>
	<p>
	Implement Digital Clock in Topbar
	</p>
	<p>
	Implement Hide Topbar and Sidebar
	</p>
	<p>
	Finish User Restriction System
	</p>	
	<p>
	Create Icon for System
	</p>
	<p>
	Someone magaling magfront-end pls patulong ayusin responsive sizing ng system
	</p>
	<p>
	Try to adopt JSON
	</p>	
	<p>
			
	<p>
</div>

<?php

$.ajax({
		url:'ajax.php?action=login',
		method:'POST',
		data:$(this).serialize(),
		error:err=>{
			console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='landing.php?page=home';
				}else if(resp == 2){
					location.href ='voting.php';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})

?>
