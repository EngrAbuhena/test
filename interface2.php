<?php


interface book
{
    public function Setprice($price);
    public function Settitle($title);
}


class newbook implements book
{
    public $price;
    public $title;

    public function Setprice($price)
    {
        $this->price = $price;
    }

    public function Settitle($title)
    {
        $this->title = $title;
    }

}


$dm = new newbook();
$dm->Settitle('Discrete mathematics');
$dm->Setprice(100);
echo $dm->title.", ".$dm->price."<br>";

$dc = new newbook();
$dc->Settitle('Data communication');
$dc->Setprice(200);
echo $dc->title.", ".$dc->price;
