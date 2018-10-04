<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Soulvibes</title>
</head>
<body>
    
    <?php include "../src/parts/header/module.php"; ?>

    <main class="main">
        <?php $banner = ['title' => 'High Quality Internet Music Stations', 'img' => 'images/layer1.png'] ?>
        <?php include "../src/modules/banner/module.php"; ?>
        <div class="container">   
            <article>
                <?php $containerTitle = ['title' => 'Genres Stations'] ?> 
                <?php include "../src/modules/container-title/module.php"; ?>
            </article>
        </div>
    </main>
    
    <script src="js/main.js"></script>
</body>
</html>