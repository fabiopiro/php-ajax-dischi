<?php

    require __DIR__ . '/db/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php ajax dischi</title>
</head>
<body>
    <!-- HEADER -->
    <?php include 'partials/template/header.php'; ?>
    <!-- /HEADER -->
    <!-- MAIN -->
    <?php var_dump($discs)?>
    <!-- /MAIN -->
    <!-- FOOTER -->
    <?php include 'partials/template/footer.php'; ?>
    <!-- /FOOTER -->
</body>
</html>