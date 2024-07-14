<?php
        // class:
    class fruit {
        // Properties:
        public $name;
        public $color;
        public $isFresh;

        // Methods:
        function set_name ($fruit_name){
            $this->name = $fruit_name;
        }

        function get_name(){
            return $this->name;
        }

        function set_color($fruit_color){
            $this->color = $fruit_color;
        }

        function get_color(){
            return $this->color; 
        }

        function fruit_and_fresh($fruit_name, $isFresh){
            $this->name = $fruit_name;
            $this->isFresh = $isFresh;
            return "$fruit_name is $isFresh";
        }
    }

    // object:
    $mango = new fruit();
    $apple = new fruit();
    $banana = new fruit();
    $mango->set_name('Mango');
    $apple->set_name('Apple');
    $mango->set_color('Yellow');    
    $apple->set_color('Red and Green');    
    

    echo $mango->get_name();
    echo '<br>';
    echo $apple->get_name();
    echo '<br>';
    echo $mango->get_color();
    echo '<br>';
    echo $apple->get_color();
    echo '<br>';

    echo $banana->isFresh;

    echo $banana->fruit_and_fresh('Banana', 'fresh');
    echo "<br>";

    class human {
        // This is first method or also method to assign values to properties inside a class:

        // public $name = 'Muhammad kaif';
        // public $nationality = 'Pakistani';
        // public $profession = 'MERN stack dev';

        public $name;
        public $nationality;
        public $profession;

        // This is second method of changing value of the property using $this keyword and a function/method to set value. The method is mandatory to use $this:


        function set_data ($name, $nationality, $profession){
            $this->name = $name;
            $this->nationality = $nationality;
            $this->profession = $profession;
        }

        
    }


    $kaif = new human();
    // $kaif->set_data();

    // echo $kaif->name;
    // echo '<br>';
    // echo $kaif->nationality;
    // echo '<br>';
    // echo $kaif->profession;
    // echo '<br>';

    // This is the third method of changing value of the property outside the class by directly changing the value.
    
    // $kaif->name = 'Muhammad Kaif';
    // $kaif->nationality = 'Pakistani';
    // $kaif->profession = 'MERN stack dev';

    // echo $kaif->name;
    // echo '<br>';
    // echo $kaif->nationality;
    // echo '<br>';
    // echo $kaif->profession;

    echo $kaif->set_data('Muhammad kaif', 'Pakistani', 'MERN stack');
    echo $kaif->name;
    echo '<br>';
    echo $kaif->nationality;
    echo '<br>';
    echo $kaif->profession;
    echo '<br>';


?>