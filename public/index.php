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
        <?php $banner = ['title' => 'High Quality Internet Music Stations'];
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
      </div>
      <div>
            <div class="container">
                  <?php $containerTitle = ['title' => 'Upcoming Events'];
                        include "../src/modules/container-title/module.php"; ?>
            </div>
            <?php include "../src/parts/upcoming-events/module.php"; ?>
      </div>
      <article>
            <div class="container">
                  <?php $containerTitle = ['title' => 'Latest News'];
                        include "../src/modules/container-title/module.php"; ?>
                  <div class="main__news container">
                        <?php $news = [
                              'time' => '21 march 2017',
                              'title' => 'Lorem ipsum dolor sit amet consectetur.',
                              'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis eum architecto sunt, quidem eos excepturi? Totam a deserunt ullam quas nisi enim repellat, vitae optio maiores praesentium aspernatur at exercitationem!'
                        ];
                        include "../src/modules/news/module.php"; ?>
                        <?php $news = [
                              'time' => '21 march 2017',
                              'title' => 'Lorem ipsum dolor sit amet consectetur.',
                              'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis eum architecto sunt, quidem eos excepturi? Totam a deserunt ullam quas nisi enim repellat, vitae optio maiores praesentium aspernatur at exercitationem!'
                        ];
                        include "../src/modules/news/module.php"; ?>
                        <?php $news = [
                              'time' => '21 march 2017',
                              'title' => 'Lorem ipsum dolor sit amet consectetur.',
                              'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis eum architecto sunt, quidem eos excepturi? Totam a deserunt ullam quas nisi enim repellat, vitae optio maiores praesentium aspernatur at exercitationem!'
                        ];
                        include "../src/modules/news/module.php"; ?>
                  </div>
            </div>
      </article>
      <div>
            <div class="container">
                  <?php $containerTitle = ['title' => 'Contact Us'];
                        include "../src/modules/container-title/module.php"; ?>
            </div>
            <?php include "../src/modules/community/module.php"; ?>
      </div>
    </main>

    <?php include "../src/parts/footer/module.php"; ?>
    
    <script src="js/main.js"></script>
</body>
</html>