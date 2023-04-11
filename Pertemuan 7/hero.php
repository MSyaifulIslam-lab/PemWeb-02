<?php
class Hero{
    // atribut/properti pada class
    public $name;
    public $damage;
    public $health;
    public $level = 1;

    // constructor akan dijalankan secara otomatis
    function __construct($name, $damage, $health){
        $this->name = $name;
        $this->damage = $damage;
        $this->health = $health;
    }

    // method untuk menampilkan informasi hero
    public function getInfo(){
        echo "Nama hero: " . $this->name;
        echo "<br>" . "Level: " . $this->level;
        echo "<br>" . "HP: " . $this->health;
        echo "<br>" . "DMG: " . $this->damage;
    }

    // method untuk level up
    public function levelUp(){
        $this->level += 1;
    }

    // method untuk menyerang
    public function attack(){
        $target->health -= $this->damage;
    }
}

// membuat objek dari class
$hero1 = new Hero('Ling', 3200, 200);
$hero1 = new Hero('Kagura', 2800, 220);

// memanggil hero
$hero1->getInfo();

echo "<hr>";

$hero1->levelUp();
$hero1->getInfo();