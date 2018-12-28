<?php session_start(); ?>
<?php require_once('connection.php'); ?>
<?php
//first get the post variable on the page
if (isset(($_POST['submit']))) {
	// code...
	$name = (($_POST['name1']));
	$author = (($_POST['author']));
	$type = (($_POST['type']));
	if ($_FILES["image"]["error"] > 0){
  	echo "Error: " . $_FILES["image"]["error"] . "<br>";
  }else{
		$imageType = $_FILES['image']['type'];
		if (substr($imageType,0,5)=="image") {
			$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$query = "INSERT INTO product(name, image, author,type,reserve)
				  VALUES ('{$name}','{$image}','{$author}', '{$type}', 'no')";
					//echo $query; die;
					$result = mysqli_query($connection,$query);

		       	if($result) {
		          	echo "Item added Successfully";
								$_SESSION['message'] = 'Item added Successfully';
								$host  = $_SERVER['HTTP_HOST'];
								$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
								$extra = 'adminaddbooks.php';
								header("Location: http://$host$uri/$extra");
								exit;
		       	}else{
		          	echo "Database query failed.";
		       	}
		}else{
			echo "Plase select an Image!";
		}
  }
}

 ?>

<?php mysqli_close($connection); ?>