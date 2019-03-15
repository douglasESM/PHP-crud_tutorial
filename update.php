<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap;.min.js"></script>
	<title></title>
</head>

<body>
	<div class="container">
		
		<div class="span10 offset1">
			<div class="row">
				<h3>Update a Customer</h3>
			</div>

			<form class="form-horizontal" action="uptade.php?id=<?php echo $id ?>" method="post">
				<div class="control-group <?php echo !empty($nameError):'error':'';?>">
					<label class="control-label">Name</label>
					<div class="controls">
						
					</div>
				</div>
			</form>
		</div>





	</div>
</body>
</html>