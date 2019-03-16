<?php
	require 'database.php';
	$id = 0;

	if ( !empty($_GET['id'])){
		$id = $_REQUEST['id'];
	}

	if ( !empty($_POST)) {
		//KEEP TRACK POST VALUES
		$id = $_POST['id'];

		//delete data
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "DELETE FROM customers WHERE id = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		Database::disconnect();
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<title></title>
</head>
<body>
	<div class="container">
		
		<div class="span10 offset1">
			<div class="row">
				<h3>Delete a Customers</h3>
			</div>

			<form class="form-horizontal" action="delete.php" method="post">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<p class="alert alert-error">Are you sure to delete ?</p>
				<div class="form-actions">
					<button type="submit" class="btn btn-danger">Yes</button>
					<a href="index.php" class="btn">No</a>
				</div>
			</form>
		</div>
	</div><!--fim do container-->
</body>
</html>