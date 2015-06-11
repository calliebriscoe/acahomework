<?php
/**
*This will create and return a deck of cards.
**/
echo '<pre>';

function getDeck(&$deck) {
  $deck = [];

  $suits = ['Diamonds', 'Hearts', 'Clubs', 'Spades'];
  $ranks = ['Ace',2,3,4,5,6,7,8,9,10,'Jack','Queen','King'];


  foreach ($suits as $suit) {

    foreach ($ranks as $rank) {

      $deck[] = $rank . ' of ' . $suit;
    };
  };
  return $deck;
};

getDeck($DeckHand);

print_r($DeckHand);



$NumberofCards = array_rand($deckHand, 52);

$newHand = array();

foreach ($NumberofCards as $card) {

    $newHand[] = $deck[$card];

    unset($deck[$card]);
}

Print_r($NumberofCards);


?>
