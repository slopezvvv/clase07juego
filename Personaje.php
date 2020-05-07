<?php

class Personaje{
    
    private $spriteImage;
    private $eje_x;
    private $eje_y;
    
    public function __construct($spriteImage) {
        $this->setSpriteImage($spriteImage);
    }
    
    public function getSpriteImage(){
        return $this->spriteImage;
    }
    
    public function setSpriteImage($spriteImage){
        $this->spriteImage = $spriteImage;
    }
}