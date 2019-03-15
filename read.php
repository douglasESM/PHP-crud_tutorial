<?php
    require 'database.php';
    $id = null;
    if ( !empty($_GET['id'])){
        $id = $_REQUEST['id'];
    }

    if ( null == $id ){
        header("Location: index.php");
    }else{
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM customers WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">

        <div class="span10 offset-1">
            <div class="row">
                <h3>Read a Customer</h3>
            </div>

            <div class="form-horizontal">
                <div class="control-group">
                    <label class="control-label">Name</label>
                    <div class="controls">
                        <label class="checkbox">
                            <?php echo $data['nome'];?>
                        </label>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Email Address</label>
                    <div class="controls">
                        <label class="checkbox">
                            <?php echo $data['email']; ?>
                        </label>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Mobile Number</label>
                    <div class="controls">
                        <label class="checkbox">
                            <?php echo $data['mobile']; ?>
                        </label>
                    </div>
                </div>

                <div class="from-actions">
                    <a class="btn" href="index.php">Back</a>
                </div>

            </div>
        </div>

    </div><!--FIM DO CONTAINER-->
</body>
</html>