<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/6
 * Time: 18:25
 */
class png extends Main {
    function __construct($w=200,$h=100){
        header("content-type:image/png");
        $this->str="qwertyuioplkjhgfdsazxcvbnm1234567890";
        $this->img=$img=imagecreate($w,$h);
        $this->yzm='';
        imagefill($this->img,'0','0',$this->color());
        $this->con();
        imagepng($img);
        imagedestroy($img);
    }

    public function color($f='s'){
        if ($f=='s'){
            return imagecolorallocate($this->img,mt_rand(120,255),mt_rand(120,255),mt_rand(120,255));
        }elseif ($f=='q'){
            return imagecolorallocate($this->img,mt_rand(0,120),mt_rand(0,120),mt_rand(0,120));
        }
    }

    public function con(){
        for($i=0;$i<4;$i++){
            $nub=substr($this->str,mt_rand(0,35),1);
            if (mt_rand(0,1)){
                $nub=strtoupper(substr($this->str,mt_rand(0,35),1));
            }
            $this->yzm.=$nub;
            imagefill($this->img,'0','0',$this->color());
            imagettftext($this->img,mt_rand(50,60),mt_rand(-30,30),30+$i*40,mt_rand(60,80),$this->color('q'),'static/font/b.ttf',$nub);
        }
    }
}