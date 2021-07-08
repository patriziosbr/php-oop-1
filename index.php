<?php 

    require __DIR__ . "/classes/Movie.php";

    $cover1 = "https://i.ibb.co/0Xnd1Z7/download.jpg";
    $script1 = "La guerra di domani è un film di genere fantascienza, azione del 2021, diretto da Chris McKay, con Chris Pratt e Yvonne Strahovski. Durata 138 minuti. Distribuito da Amazon Prime Video.";
    $cast1 = [ "act1", "act2", "act3", "act4" ];

    $film1 = new Movie($cover1, "The tomorrow war", $script1, "Amazon Prime Video", "Chris McKay" );

    $cover2 = "https://i.ibb.co/1JtKb7T/download-1.jpg";
    $script2 = "Peter Rabbit 2: Un birbante in fuga è un film di genere animazione, avventura, family del 2021, diretto da Will Gluck, con James Corden e Domhnall Gleeson. Uscita al cinema il 01 luglio 2021. Durata 85 minuti. Distribuito da Sony Pictures Italia / Warner Bros.";
    $cast2 = [ "act5", "act6", "act7", "act8" ];

    $film2 = new Movie($cover2, "Peter Rabbit 2: Un birbante in fuga", $script2, "Sony Pictures Italia / Warner Bros.", "Will Gluck" );

    $cover3 = "https://i.ibb.co/31QQF0F/download-2.jpg";
    $script3 = "Io sono nessuno è un film di genere thriller del 2021, diretto da Ilya Naishuller, con Bob Odenkirk e Connie Nielsen. Uscita al cinema il 01 luglio 2021. Durata 92 minuti. Distribuito da Universal Pictures.";
    $cast3 = [ "act9", "act10", "act11", "act12" ];

    $film3 = new Movie($cover3, "Io sono nessuno", $script3, "Universal Pictures", " Ilya Naishuller" );


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
            <div class="text-center my-5">
                <?php include __DIR__ . "/partials/header.php"; ?>
            </div>
        </header>

        <main>
            <div class="container my-3 d-flex flex-wrap justify-content-center">

                <div class="movie m-3">
                    <div class="imgBox">
                        <img src="<?= $film1->poster ?>" alt="404">
                    </div>
                    <h2 class="my-2"><?= $film1->title; ?></h2>
                    <p ><strong>Anno: </strong><?= $film1->year ?></p>
                    <p class="plot"><?= $film1->getExcerpt(150); ?></p>
                    <h3> <strong>Produzione: </strong> <?= $film1->production; ?></h3>
                    <h4> <strong>Direzione: </strong> <?= $film1->direction; ?></h4>
                    <div>
                        <h5>Attori: </h5>
                        <ul>
                            <?php $film1->getCast($cast1); 
                                foreach( $cast1 as $act) { ?>
                                <li><?= $act; ?></li>
                            <?php  } ?>
                        </ul>
                    </div>
                </div> <!-- close movie -->

                <div class="movie m-3">
                    <div class="imgBox">
                        <img src="<?= $film2->poster ?>" alt="404">
                    </div>
                    <h2 class="my-2"><?= $film2->title; ?></h2>
                    <p ><strong>Anno: </strong><?= $film2->year ?></p>
                    <p class="plot"><?= $film2->getExcerpt(150); ?></p>
                    <h3> <strong>Produzione: </strong> <?= $film2->production; ?></h3>
                    <h4> <strong>Direzione: </strong> <?= $film2->direction; ?></h4>
                    <div>
                        <h5>Attori: </h5>
                        <ul>
                            <?php $film2->getCast($cast1); 
                                foreach( $cast2 as $act) { ?>
                                <li><?= $act; ?></li>
                            <?php  } ?>
                        </ul>
                    </div>
                </div> <!-- close movie -->

                <div class="movie m-3">
                    <div class="imgBox">
                        <img src="<?= $film3->poster ?>" alt="404">
                    </div>
                    <h2 class="my-2"><?= $film3->title; ?></h2>
                    <p ><strong>Anno: </strong><?= $film3->year ?></p>
                    <p class="plot"><?= $film3->getExcerpt(150); ?></p>
                    <h3> <strong>Produzione: </strong> <?= $film3->production; ?></h3>
                    <h4> <strong>Direzione: </strong> <?= $film3->direction; ?></h4>
                    <div>
                        <h5>Attori: </h5>
                        <ul>
                            <?php $film3->getCast($cast1); 
                                foreach( $cast3 as $act) { ?>
                                <li><?= $act; ?></li>
                            <?php  } ?>
                        </ul>
                    </div>
                </div> <!-- close movie -->

                <div class="movie m-3">
                    <div class="imgBox">
                        <img src="<?= $film1->poster ?>" alt="404">
                    </div>
                    <h2 class="my-2"><?= $film1->title; ?></h2>
                    <p ><strong>Anno: </strong><?= $film1->year ?></p>
                    <p class="plot"><?= $film1->getExcerpt(150); ?></p>
                    <h3> <strong>Produzione: </strong> <?= $film1->production; ?></h3>
                    <h4> <strong>Direzione: </strong> <?= $film1->direction; ?></h4>
                    <div>
                        <h5>Attori: </h5>
                        <ul>
                            <?php $film1->getCast($cast1); 
                                foreach( $cast1 as $act) { ?>
                                <li><?= $act; ?></li>
                            <?php  } ?>
                        </ul>
                    </div>
                </div> <!-- close movie -->

                <div class="movie m-3">
                    <div class="imgBox">
                        <img src="<?= $film2->poster ?>" alt="404">
                    </div>
                    <h2 class="my-2"><?= $film2->title; ?></h2>
                    <p ><strong>Anno: </strong><?= $film2->year ?></p>
                    <p class="plot"><?= $film2->getExcerpt(150); ?></p>
                    <h3> <strong>Produzione: </strong> <?= $film2->production; ?></h3>
                    <h4> <strong>Direzione: </strong> <?= $film2->direction; ?></h4>
                    <div>
                        <h5>Attori: </h5>
                        <ul>
                            <?php $film2->getCast($cast1); 
                                foreach( $cast2 as $act) { ?>
                                <li><?= $act; ?></li>
                            <?php  } ?>
                        </ul>
                    </div>
                </div> <!-- close movie -->

                <div class="movie m-3">
                    <div class="imgBox">
                        <img src="<?= $film3->poster ?>" alt="404">
                    </div>
                    <h2 class="my-2"><?= $film3->title; ?></h2>
                    <p ><strong>Anno: </strong><?= $film3->year ?></p>
                    <p class="plot"><?= $film3->getExcerpt(150); ?></p>
                    <h3> <strong>Produzione: </strong> <?= $film3->production; ?></h3>
                    <h4> <strong>Direzione: </strong> <?= $film3->direction; ?></h4>
                    <div>
                        <h5>Attori: </h5>
                        <ul>
                            <?php $film3->getCast($cast1); 
                                foreach( $cast3 as $act) { ?>
                                <li><?= $act; ?></li>
                            <?php  } ?>
                        </ul>
                    </div>
                </div> <!-- close movie -->
                


            </div>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>                                 
    </body>
</html>