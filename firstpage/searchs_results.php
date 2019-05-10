<?php
session_start();
include 'connection.php';
include 'header.php';

$search_q = $_POST['search'];

if(!isset($search_q))
{
	header("location:index.php");
}

$search_sql="SELECT * FROM articles_news WHERE articletitle like '%$search_q%' OR articlesub like '%$search_q%' ";

$search_query = mysqli_query($con ,$search_sql );

	$counts = mysqli_num_rows($search_query);

$search_sc=mysqli_data_seek($search_query , 0);

if($counts  == 0 )
{

	
	echo '
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

		</ul>


	</div>
</nav>

';
	
	
	echo '
	
	
<section id="nores">


	<div class="container">

		<div class="row">

			<div class="col-sm-12">


				<div class="alert alert-primary" role="alert">
					NO RESULTS, CHECK THE SPELLING AGAIN !
				</div>

			</div>

		</div>

	</div>

</section>


';
	
}
else
{
	echo '
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

		</ul>


	</div>
</nav>

';
	echo '
	
	
<section id="table_prod" class="text-left">
	<div class="container">

	';
	
	while($search_sc= mysqli_fetch_array($search_query))
	{
	echo'

		<div class="row grows">

	<div class="col-sm-2">
		<div class="products">

			<img class="img-fluid" src="'.$search_sc['image'].'" />

				</div>
		</div>



	<div class="col-sm-8">
		<div class="title">';
			
			$titlesub=substr($search_sc['articletitle'], 0, 30);
			
		
		echo'

<h1>'.$titlesub.'...
		</h1>	

		<div class="brde" ></div> 


		<p class="test1 pt-3">';


$articlesub=substr($search_sc['articlesub'], 0, 180);

	echo '
			'.$articlesub.'
		</p>

		<a href="onearticle.php?'.$search_sc['id'].'" class="btn btn-info">Read More</a>






	</div>
	</div> 



<div class="col-sm-2">
	<div class="date">12/12/2018</div>
</div>
</div>
';
}
	
	echo '</div>
	</section>
	';
	
}
?>


	
	<?php
	include 'footer.php';

?>
