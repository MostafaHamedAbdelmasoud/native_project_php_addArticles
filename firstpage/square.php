<?php

session_start();

include 'header.php';

include 'connection.php';


?>



<nav class="fixed-top navbar navbar-expand-lg navbar-light bg-white" >
	<a class="navbar-brand" href="index.php">Navbar</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">


		<ul class="navbar-nav ml-auto">


			  <form class="form-inline my-2 my-lg-0" method="post" action="searchs_results.php">
      <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
			
			<li class="nav-item">
        <a class="nav-link " href="login.php">LOGIN</a>
      </li>

		</ul>


	</div>
</nav>

<div class="brdres"></div>

<section id="learn" class="pt-3">
	<div class="container">

		<a href="index.php">
			<span class="home"><i class="fas fa-home pr-2"></i>Home</span>


		</a>

		<div class="brdes"></div>

		<p class="readour">Read Our Lates News AndLearn Every Thing About This New And Fast Developing Scene</p>

	</div>

</section>



<section id="table_prod" class="text-left">
	<div class="container">


		<?php

		$qi = "SELECT * from articles_news";

		$resu = mysqli_query($con , $qi);

		
		
$articless=mysqli_data_seek($resu , 0);

		
//($r) = array("blue");
		while($articless= mysqli_fetch_array($resu))
		{
			
			
			
			
			//$_SESSION('id_get')= articless['id'];

			
			echo'

<div class="row grows">

	<div class="col-sm-2">
		<div class="products">

			<img class="img-fluid" src="'.$articless['image'].'" />

				</div>
		</div>



	<div class="col-sm-8">
		<div class="title">';
			
			$titlesub=substr($articless['articletitle'], 0, 30);
			
		
		echo'

<h1 >'.$titlesub.'...
		</h1>	

		<div class="brde" ></div> 


		<p class="test1 pt-3" >';


$articlesub=substr($articless['articlesub'], 0, 180);

	echo '
			'.$articlesub.'
		</p>
		

		<a href="onearticle.php?'.$articless['id'].'">READ MORE</a>';

			$_SESSION['varname'] = $articless['id'];
			
echo'
	</div>
	</div> ';

			
echo'
<div class="col-sm-2">
	<div class="date">'.$articless['id'].'</div>
</div>
</div>
';
			
			//array_push($r,$articless['id']);
			
			//echo $r.mysqli_error($con);
}
?>
</div>

</section>



<section id="footer" class="text-center py-3 pb-5">
	<div class="container">

		<div class="row pb-4">


			<div class="col-sm-5">

				<a href="#" >Terms And Conditions</a>

			</div>

			<div class="col-sm-3">

				<a href="#" >Contact Us</a>

			</div>

			<div class="col-sm-3">

				<a href="#">About Us</a>

			</div>



		</div>
		
		<div class="row pt-3">
		
		<div class="col-sm-3">
			
				<div class="gf">
				
					<a href="square.php" style="cursor:pointer;" id="box">A Us</a> 
				
				
				</div>
			
			
			</div>
		
		
		
			
			
		
		</div>


	</div>


</section>


	<Section class="text-center" id="lkert">
		
		<div class="container">
			
			<div class="row hyper">
			
			<div class="col-sm-12 ytr">
				
				<div class="rtde">
				
				
				
		
		<h1 class="juo-1">Log in With Your Account</h1>
		
		<div class="kol py-2 juo">
			<button class="btn btn-in btn-lg-1" href="#">
			<span>Connect with twitter</span>
			<i class="fab fa-twitter px-3"></i>
			</button>
			</div>
			
			
			<div class="kol-2 py-2 juo">
			<button class="btn btn-it btn-lg-2" href="#">
			<span>Connect with Facebook</span>
			<i class="fab fa-facebook px-3"></i>
			</button>
			
			</div>
			
			
			<div class="kol-3 py-2 juo">
				<button class="btn btn-email btn-lg-3" href="#">
			<span>Connect with Email</span>
			<i class="fas fa-envelope px-3" ></i>
					</button>
			
			
			</div>
				
				<div class="kol-3 py-2 juo-1">
				<h3> any article</h3>
			
			
			</div>
		
		
		
		
		
		
		
		
		</div>
			
		</div>
			
			</div>
		
		
		</div>
		
		
		
		<div class="x d-none">
		
		<i class="fas fa-times-circle"></i>
		
		</div>
		
			</Section>

	

<script>


	$("#box").click(function(){

		$('body').css("overflow","hidden");
		$('#lkert').css("display","block");
	});




</script>










<?php

			include 'footer.php';

?>