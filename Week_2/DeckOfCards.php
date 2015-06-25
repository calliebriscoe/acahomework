<?php
/**
*This will create and return a new deck of cards.
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

//This section handles the suffling of the deck.
function shuffle_hand($DeckHand  = array()) {

  $DeckofCards = array();

  while(count($DeckHand)) {

    $cards = array_rand($DeckHand);

    $DeckofCards[$cards] = $DeckHand[$cards];

    unset($DeckHand[$cards]);
  };
  return $DeckofCards;
};

$shuffleddeck = shuffle_hand($DeckHand);

print_r($shuffleddeck);
//The next section gets the input of players for how many arrays need to be produced.
?>

<br>
<form action="DeckofCards.php" method="post">
<H3>
  <div> How many card players? <input type="text" name="players">

</h3>
<br>
<H3>
  <div> How many cards per players? <input type="text" name="numofcard">
  <input type="submit" value="submit"></div>
</h3>
</form>
<?php

$players = $_POST['players'];

$numofcard = $_POST['numofcard'];

$PlayersHand = array_chunk($shuffleddeck, $numofcard);

$i = 1;

foreach ($PlayersHand as $playersnumber => $player) {

  echo "Player $playersnumber:\n";

!if($i == $numofcard) {

  foreach ($player as $cardnumber => $card) {

    echo "Card: $card\n";

    $i = ++
  };
echo "\n";
};
};



$cardsperplayer = $players * $numofcard;

$PlayersHand = array_slice($shuffleddeck, $players, $cardsperplayer);

echo "Remainer of Cards:\n";

print_r($PlayersHand);


?><H3>
  <div> <?php echo "The deck is shuffled and the hands for $players players have been dealt."
?></h3>
