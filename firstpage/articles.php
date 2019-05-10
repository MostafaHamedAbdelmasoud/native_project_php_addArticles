<?php
session_start();

include 'connection.php' ;



	


$imgName = $_FILES['articleimage']['name'];
 $imgType =$_FILES['articleimage']['type'];
$imgTmp = $_FILES['articleimage']['tmp_name'];
	

$validTypes = [ 'image/png', 'image/jpeg' , 'image/gif'  ,'image/jpg'];

$fileImageName ='images/uploads/'.rand(1,1000000).$imgName;


if(in_array($imgType,$validTypes ))
{
	
	move_uploaded_file($imgTmp , $fileImageName);



$tit= $_POST['titlearticle'];

$subj= $_POST['subjectarticle'];


$q="insert into articles_news (articletitle , articlesub , image) values ('$tit' ,'$subj' ,'$fileImageName' ) ";

	

 mysqli_query($con , $q);
	
	echo'succes'.mysqli_error($con);


}
else
{
   echo 'false';
}







?>