<?php
    class Circulo {
        public $radio, $centrox, $centroy, $lado;
        public function __construct($r, $cx, $cy, $l){
            $this->radio = $r;
            $this->centrox = $cx;
            $this->centroy = $cy;
            $this->lado = $l;
        }
        public function dibujar(){
            
            $img = @imagecreate($this->lado, $this->lado);
            $negro = imagecolorallocate($img, 0, 0, 0);
            $blanco = imagecolorallocate($img, 255, 255, 255);
            $rojo = imagecolorallocate($img, 255, 0, 0);
           // imagestring($img, 1, 5, 5,  "A Simple Text String", $color_texto);
           imagefilledrectangle($img,0 ,0 ,$this->lado, $this->lado,$blanco);
           imageellipse( $img, $this->centrox, $this->centroy, $this->radio*2, $this->radio*2, $negro);
            imagepng($img);
            imagedestroy($img);
        }
    }
?>