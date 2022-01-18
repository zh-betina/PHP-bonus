<?php 

class Calculate {
    public  $a;
    public $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function add() {
        $result = $this->a + $this->b;
        return $result;
    }

    public function substract() {
        $result = $this->a - $this->b;
        return $result;
    }

    public function divide() {
        $result = $this->a/$this->b;
        return $result;
    }

    public function multiply() {
        $result = $this->a * $this->b;
        return $result;
    }
}