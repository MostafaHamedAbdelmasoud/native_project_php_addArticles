 
<?php
session_start();
include 'header.php';


if( !isset( $_SESSION['$isLogin'] ))
{
	header('location:login.php');
}

?>





<section id="square" class="bg-light">

	<div class="container">

		<div class="row">


			<div class="col-sm-12">

				<div class="squre_add  p-3">

					<div class="text-center formse">
					<p>articles home</p>
						
						</div>
						

					<form enctype="multipart/form-data" class="squre_add form-control text-center" method="post" action="articles.php">





						<div class="form-group">

							<label>title:</label>

							<textarea name="titlearticle" type="text" class="form-control" ></textarea>
						</div>



						<div class="form-group">

							<label>subject:</label>

							<textarea name="subjectarticle" type="text" class="form-control" ></textarea>
						</div>




						<div class="form-group">

							<label>article outside image:</label>

							<input  name="articleimage" type="file" class="form-control" />
						</div>



<button type="submit" class="btn btn-primary">add</button>
					</form>

					
					
					
					<div class="text-center formse formse2 ">
					<p>add specified pages</p>
						
						</div>
					
					
					
					<form enctype="multipart/form-data" class="squre_add form-control text-center mb-5 bg-dark" method="post" action="articles.php">

						




						<div class="form-group">

							<label style="color:white;">subject1:</label>

							<textarea name="titlearticle" type="text" class="form-control" ></textarea>
						</div>



						<div class="form-group">

							<label style="color:white;">Link 1:</label>

							<textarea name="subjectarticle" type="text" class="form-control" ></textarea>
						</div>



						<div class="form-group">

							<label style="color:white;">Link 2:</label>

							<textarea name="subjectarticle" type="text" class="form-control" ></textarea>
						</div>

						
						<div class="form-group">

							<label style="color:white;">subject 2:</label>

							<textarea name="subjectarticle" type="text" class="form-control" ></textarea>
						</div>





<button type="submit" class="btn btn-primary">add</button>
					</form>

					


				</div>



			</div>


		</div>



	</div>




</section>








<section id="logout" class="text-center py-4">
	<div class="container">
		<div class="col-sm-12">
<a href="logout.php" class="btn btn-danger ">log out</a>
			</div>
</div>
</section>











<?php

include 'footer.php';

?>