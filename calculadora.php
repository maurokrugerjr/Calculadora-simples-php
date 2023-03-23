<?php 

    class calculadora {
        public $input1;
        public $input2;


    function somar (){

        echo $this->input1 + $this->input2;        
    }

    function multiplicar(){
        
        echo $this->input1 * $this->input2;  
      }

    function dividir() {
        echo $this->input1 / $this->input2;
    }
    
    function subtrair (){
        echo $this->input1 - $this->input2 ; 
    }

    }
