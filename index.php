<?php

    require __DIR__ . '/db/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>php ajax dischi</title>
</head>
<body>
    <!-- HEADER -->
    <?php include 'partials/template/header.php'; ?>
    <!-- /HEADER -->
    <!-- MAIN -->
    <main>
        <div class="discs-container">

        <?php foreach ($discs as $disc) { ?>
            
            <div class="disc">
                <!-- cover -->
                <img src="<?php echo $disc['poster']; ?>"
                alt="<?php echo $disc['title'] . ' album cover'; ?>">

                <!-- title -->
                <p><?php echo $disc['title']; ?></p>

                <!-- author -->
                <p><?php echo $disc['author']; ?></p>

                <!-- year -->
                <p><?php echo $disc['year']; ?></p>

            </div>
        
        <?php } ?>

        </div>

    </main>
    <!-- /MAIN -->
    <!-- FOOTER -->
    <?php include 'partials/template/footer.php'; ?>
    <!-- /FOOTER -->
</body>
</html>