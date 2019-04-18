
<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



</head>

<?php
if(isset($_POST['username'])){

	if($_POST['username']=="Elektroniker"){
		if($_POST['passwort']=="abc"){
			header("Location: indx.php");


		}else{

			$fehler = '<h5><b><font color="red">Das Passwort ist falsch!</font></b><h5>';

		}


	}



}



 ?>



 <body>
   
							<p><span>Anmelden</span></p>
						
<?php
if(isset($fehler)){

	echo $fehler;
}

 ?>


							<form method="post">
							<div class="log-input">
								<div class="log-input-left">
								   <input type="text" class="user" name="username" value="Benutzername" onfocus="this.value = '';"/>
								</div>

								<div class="clearfix"> </div>
							</div>
							<div class="log-input">
								<div class="log-input-left">
								   <input type="password" class="lock" name="passwort" value="Passwort" onfocus="this.value = '';"/>
								</div>

								<div class="clearfix"> </div>
							</div>
							<input type="submit" value="Login">
						</form>
						</div>

					</div>
				</div>
			</div>
		
</body>
</html>