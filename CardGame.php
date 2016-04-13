<?php
class Card{
  public $value;
  public $suit;


public function __construct($value,$suit){
  $this->value = $value;
  $this->suit = $suit;

}
}
class Deck{
  public $deck;

  public function __construct($a, $b){
    $this->build_deck($a, $b);

  }
  public function build_deck($value, $suit){
    for($i = 0; $i <4; $i++){
      for($j = 0; $j < 13; $j++){
        $this->deck[] = new Card($value[$j], $suit[$i]);

      }

    }
  }
}
class Player{
  public $name;
  public $hand;
  public $draw;
}
$deck = ['hearts', 'clubs', 'spades', 'diamonds'];
$value = [1,2,3,4,5,6,7,8,9,10,'J','Q','K'];
$obj = new Deck($value, $deck);

shuffle($obj->deck);
echo '<pre>';
var_dump($obj);


?>
