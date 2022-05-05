<?php 

	// connect to the database
	$conn = mysqli_connect('localhost','bp325_db','Razor1928','bp325_passwords');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

	// write query for all pizzas
	$sql = 'SELECT website, password, id FROM passwords';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$passwordss = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practice)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);


?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<h4 class="center grey-text">passwords!</h4>

	<div class="container">
		<div class="row">

			<?php foreach($passwordss as $passwords){ ?>

				<div class="col s6 md3">
					<div class="card z-depth-0">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($passwords['website']); ?></h6>
							<div><?php echo htmlspecialchars($passwords['password']); ?></div>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="#">more info</a>
						</div>
					</div>
				</div>

			<?php } ?>

		</div>
	</div>

	<?php include('templates/footer.php'); ?>

</html>