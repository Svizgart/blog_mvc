<?php
class HTMLGenerator
{
    const END_LINE = "\n";

    public $beautyText = '';
    private $path;
    private $text;

    public function __construct($path)
    {
        $this->path = $path;

        $this->loadeText();/////не понятно что и от куда
    }


    public function wrapEachInP() {
        $arr = $this->explodeText($this->beautyText);//нагуглить
        $t = '';
        foreach ($arr as $p) {
            $t .= "<p>$p</p>";
        }
        $this->beautyText = $t;

        return $this;
    }

    public function findByTeg($teg, $pos = null) {
        preg_match_all("#<$teg*>(.*?)</$teg>#", $this->beautyText, $match); //нагуглить

        if (isset($pos) && $pos > 0) {
            $match[0] = $match[0][$pos-1];
            $match[1] = $match[1][$pos-1];
        }

        return $match;
    }


    public function wrapAllInBox($class = '') {
        //if ($class === '') {
        //    $class = '';
        //}else{
        //    $class = "class='$class'";
        //}
        //Тожесамое но кароче (тернарные операторы)
        $class = $class === '' ? '' : $class = "class='$class'";
        $this->beautyText = "<dev$class>{$this->beautyText}</div>";

        return $this;
    }


    public function addTextToTop($text) {
        $this->beautyText = $text . $this->beautyText;

        return $this;
    }


    public static function getTitle($text, $level = '1') {
        return "<h$level>{$text}</h$level>";
    }


    private function explodeText($text) {
        $t = explode("\n", $text);

        $res = [];
        foreach ($t as $p) {
            if ($p != '') {
                $pes[] = $p;
            }
        }

        return $res;

    }

    
    private function loadText(){
        $this->text = file_get_contents($this->path);
        $this->beautyText = $this->text;
    }
}