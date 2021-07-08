<?php 

    require __DIR__ . "/classes/Movie.php";

    $cover1 = "https://italianculturalcentre.ca/wp-content/uploads/2018/08/DHbaSYYv_400x400.jpg";
    $script1 = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto perspiciatis reprehenderit eum consequuntur omnis corporis veritatis repudiandae magnam, facere dolorum totam, vel autem, assumenda voluptas quia quos odit quas eaque. Delectus quibusdam rerum id minima quod accusantium cumque ad aperiam ut soluta? Velit, vel? Provident aperiam perspiciatis reiciendis velit nam.";
    $cast1 = [ "act1", "act2", "act3", "act4" ];

    $film1 = new Movie($cover1, "xxx", $script1, "Nome Produttore", "Nome Direttore" );
    // $film->getCast($cast1);

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>
        
        <header>
            <div class="text-center">
                <?php include __DIR__ . "/partials/header.php"; ?>
            </div>
        </header>

        <main>
            <div class="container">
                <div class="movie">
                    <img src="<?= $film1->poster ?>" alt="404">
                    <h2><?= $film1->title; ?></h2>
                    <p><?= $film1->getExcerpt(150); ?></p>
                    <h3><?= $film1->production; ?></h3>
                    <h4><?= $film1->direction; ?></h4>
                    <div>
                        <h5>Attori: </h5>
                        <ul>
                            <?php $film1->getCast($cast1); 
                                foreach( $cast1 as $act) { ?>
                                <li><?= $act; ?></li>
                            <?php  } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>                                 
    </body>
</html>