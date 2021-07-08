<?php 

    class Movie {
        public $poster;
        public $title;
        public $year;
        public $plot;
        public $production;
        public $direction;
        public $cast;

        function __construct($poster = "thumb", $title, $plot="", $production, $direction){
            $this->poster = $poster;
            $this->title = $title;
            $this->year = date("Y", 1625246687);
            $this->plot = $plot;
            $this->production = $production;
            $this->direction = $direction;
            
        }
    
        public function getCast($arrAct){
            $this->cast[] = $arrAct;
        }

        public function getExcerpt($charNum = 100) {
            return substr($this->plot, 0, $charNum) . "...";
        }
    }



?>
