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
                <p class="disc-title">
                    <?php echo $disc['title']; ?>
                </p>

                <!-- author -->
                <p class="disc-author">
                    <?php echo $disc['author']; ?>
                </p>

                <!-- year -->
                <p class="disc_year">
                    <?php echo $disc['year']; ?>
                </p>

            </div>
        
        <?php } ?>

        </div>

    </main>
    <!-- /MAIN -->
    <!-- FOOTER -->
    <!-- /FOOTER -->
</body>
</html>