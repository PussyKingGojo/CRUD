<?php
class cars{
    public $brand,$color,$type,$speed;

    function __construct($brand,$color,$type,$speed){
        $this->brand= $brand;
        $this->color= $color;
        $this->type= $type;
        $this->speed= $speed;

    }

    public function displayCarInfo(){

        echo '<div class"card" style="widthn: 18rem;">
        <ul class"list-group list-group-flush">
        <li class="list-group-item">'.$this->brand.'</li>
        <li class="list-group-item">'.$this->color.'</li>
        <li class="list-group-item">'.$this->type.'</li>
        <li class="list-group-item">'.$this->speed.'</li>
        </ul>
        
        
        </div>';
    }
}
?>