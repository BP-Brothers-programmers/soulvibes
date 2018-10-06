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
        <?php $banner = ['title' => 'High Quality Internet Music Stations', 'img' => 'images/layer1.png'];
              include "../src/modules/banner/module.php"; ?>
        <div class="container">   
            <article>
                <?php $containerTitle = ['title' => 'Genres Stations'];
                      include "../src/modules/container-title/module.php"; ?>

                <div class="main__instruments">
                    <?php $instruments = ['img' => 'images/trending-top.png', 'name' => 'Trending Top'];
                          include "../src/modules/music-instrument/module.php"; ?>
                    <?php $instruments = ['img' => 'images/rock.png', 'name' => 'Rock'];
                          include "../src/modules/music-instrument/module.php"; ?>
                    <?php $instruments = ['img' => 'images/r-n-b.png', 'name' => 'R-n-B'];
                          include "../src/modules/music-instrument/module.php"; ?>
                    <?php $instruments = ['img' => 'images/alternative.png', 'name' => 'Alternative'];
                          include "../src/modules/music-instrument/module.php"; ?>
                    <?php $instruments = ['img' => 'images/country.png', 'name' => 'Country'];
                          include "../src/modules/music-instrument/module.php"; ?>
                    <?php $instruments = ['img' => 'images/pop.png', 'name' => 'Pop'];
                          include "../src/modules/music-instrument/module.php"; ?>
                    <?php $instruments = ['img' => 'images/jazz.png', 'name' => 'Jazz'];
                          include "../src/modules/music-instrument/module.php"; ?>
                    <?php $instruments = ['img' => 'images/reggae.png', 'name' => 'Reggae'];
                          include "../src/modules/music-instrument/module.php"; ?>
                </div>
                <a href="#" class="main__load-more">Load more</a>
            </article>
            <article>
                <?php $containerTitle = ['title' => 'Upcoming Events'];
                      include "../src/modules/container-title/module.php"; ?>
            </article>
        </div>
    </main>
    
    <script src="js/main.js"></script>
</body>
</html>