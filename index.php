<?php
include 'card.php';

$suits = ['hearts', 'spades', 'clubs', 'diamonds'];
$values = ['2','3','4','5','6','7','8','9','10','J','Q','K','A'];

$deck = [];
foreach ($suits as $suit) {
    foreach ($values as $value) {

        $deck[] = new card($suit, $value);
    }
}

shuffle($deck);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blackjack</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="blackjack.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>




<body>


<div class="container">
    <div class="row">
    </div>
  </div>


<div id="deck">
    <?php
    foreach($deck as $card){
        echo $card;
    }
    ?>
</div>
       
        <script>

        $('.overlay div').hide();

        </script>
    
</body>
</html>