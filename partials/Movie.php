<?php 

    class Movie {
        public $title;
        public $plot;
        public $production;
        public $direction;
        public $cast = array();

        function __construct($title, $plot=" ", $production, $direction){
            $this->title = $title;
            $this->plot = $plot;
            $this->production = $production;
            $this->direction = $direction;
            
        }
    
        function getCast($xt){
            $this->cast[] = $xt;
        }

    }

    $attori = [ "act1", "act2", "act3", "act4" ];
    $trama = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto perspiciatis reprehenderit eum consequuntur omnis corporis veritatis repudiandae magnam, facere dolorum totam, vel autem, assumenda voluptas quia quos odit quas eaque. Delectus quibusdam rerum id minima quod accusantium cumque ad aperiam ut soluta? Velit, vel? Provident aperiam perspiciatis reiciendis velit nam.";
    $film = new Movie("xxx", $trama, "produttore", "direzione" );
    $film->getCast($attori);
    var_dump($film);


?>
