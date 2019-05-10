 
<?php

session_start();
include 'header.php';

	
		include 'connection.php' ;

?>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="m-auto w-75 py-4">

	<div class="form-group">

		<label>username:</label>

		<input name="username" type="text" class="form-control" />
	</div>

	<div class="form-group">

		<label>password:</label>

		<input name="userpassword" type="password" class="form-control" />
	</div>

	<button name="isLogin" type="submit" class="btn btn-info">login</button>

</form>

<?php
	

	
	if(isset($_POST["isLogin"]  ))
	{
	$userName= $_POST['username'];
		$userpassword= $_POST['userpassword'];
		
		
		
		
		$q ="SELECT * FROM admins WHERE adminname='$userName' and password='$userpassword'";
		
		$result= mysqli_query($con , $q);
		
		if(mysqli_num_rows($result) >0)
		{
			$_SESSION['$isLogin']=true;
			header('location:add_articles.php');
		}
		else
		{
			header('location:login.php');
		}
	}
			
		
?>



<?php
	include 'footer.php'
?>
