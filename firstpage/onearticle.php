
<?php

session_start();
include 'connection.php';

include 'header.php';




?>


<section>
	<div class="container">
<nav class="fixed-top navbar navbar-expand-lg navbar-light bg-white " >
	<a class="navbar-brand">Navbar</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		
		
		<ul class="navbar-nav ml-auto">
			<a style="text-decoration:none; color:black;" href="index.php">
			News
			
			</a>
			
		</ul>


	</div>
</nav>
	</div>
	</section>

<div class="brdres"></div>




<section id="insidearticle" class="py-5">

	<div class="container">
	
		<div class="full">
			
			
			
			<?php
			
	$regvalues=$_SESSION['varname'];
						
$qel="SELECT * FROM articles_news where id = $regvalues ";

	

 $articl =mysqli_query($con , $qel);
			
			$fetches = mysqli_fetch_array($articl);
			
			
			echo '
			<h1><pre>'.$fetches['articletitle'].'</pre></h1>
			
			<p class="datef">12/12/1988</p>
			
			<hr/>
			
			
			<h2><pre class="tab">
			'.$fetches['articlesub'].'
			</pre></h2>
		
		
			';
			?>
			
		
		</div>
	
	
	</div>


</section>





<section id="photosarticle" class="py-5">
<div class="container">
	
	
	<div class="row">
		
		
		
		
	
		<div class="col-sm-12">
			
			<div class="lphoto">

			<?php

$regvalues=$_SESSION['varname'];
						
$qel="SELECT * FROM articles_news where id = $regvalues ";

	

 $articl =mysqli_query($con , $qel);
			
			$fetches = mysqli_fetch_array($articl);

echo'
			<img class="img-fluid" src=' .$fetches['image'] .' >
			';
			?>
				</div>
		
		
		
		</div>
		
		
		
		
		
		
	
	</div>
	
	</div>
	
	



</section>



<section id="initial_words">

	<div class="container">
	
		
		<div class="row">
		
			<div class="col-sm-4">
				
				<div class="words">
			<a href="#">
				<h3>good morning</h3>
					</a>
					</div>
			
			</div>
			
			
			<div class="col-sm-4">
				
				<div class="words">
			<a href="#">
				<h3>good morning</h3>
					</a>
					</div>
			
			</div>
			
			
			
		
		</div>
	
	</div>

</section>






















<?php

include 'footer.php';

?>