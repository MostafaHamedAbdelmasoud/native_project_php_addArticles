
<?php

include'header.php';

session_start();

if( !isset( $_SESSION['$isLogin'] ))
{
	header('location:login.php');
}

?>



<section id="add" class="py-2">
<div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Add Product</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
		
		
		
		
		
	<form enctype="multipart/form-data"  method="post" action="addproduct.php">


		
		

		<div class="form-group">

			<label>product name:</label>

			<input name="productname" type="text" class="form-control" />
		</div>


		<div class="form-group">

			<label>product desc:</label>

			<textarea name="productdesc" type="text" class="form-control"></textarea>
		</div>




		<div class="form-group">

			<label>price before:</label>

			<input name="pricebefore" type="text" class="form-control" />
		</div>



		<div class="form-group">

			<label>price after:</label>

			<input name="priceafter" type="text" class="form-control" />
		</div>

		
		
			<div class="form-group">

			<label>category:</label>

			<input name="category" type="text" class="form-control" />
		</div>

		

		<div class="form-group">

			<label>product image:</label>

			<input name="productimage" type="file" class="form-control" />
		</div>

	

		<button type="submit" class="btn btn-info">add</button>
		
		


	</form>

		
		  
		  
		  
		  
		  <!----->
		
		

		
		
		
		
		
		
		</div>
		
		
		
		
		
		


      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
    </div>
  </div>
</div>



</section>













<a href="logout.php">
	<div class="logout">logout</div>
</a>



<?php
include 'footer.php';
?>