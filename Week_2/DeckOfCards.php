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
  <input type="submit" value="submit"></div>
</h3>
</form>

<?php

$players = $_POST['players'];

$numberofcards = round(52/$players, 0);

$PlayersHand = array_chunk($shuffleddeck, $numberofcards);

foreach ($PlayersHand as $playersnumber => $player) {
  echo "Player $playersnumber:\n";
  foreach ($player as $cardnumber => $card) {
    echo "Card: $card\n";
  };
echo "\n";
};


?><H3>
  <div> <?php echo "The deck is shuffled and the hands for $players players have been dealt."
?></h3>
