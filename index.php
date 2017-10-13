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
        <div class="col table_board">
            <div class="row">
                <div class="col-3"> 
                    <br>
                    <div id="deck">
                        <?php
                        foreach($deck as $card)
                        {
                            echo $card;
                        }
                        ?>
                    </div>
                </div>

                <div class="col-6">
                    <br>
                        <div id="dealer"> 
                        <img src="images/chips.png" style="width:250px; height:70px">
                        </div>
                        <br>
                        
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="row text-center">
                            <div class="col">
                                <button class="btn btn-lg btn-primary" id="hitButton">hit</button>
                            </div>
                            <br>
                            <div class="col">
                                <button class="btn btn-lg btn-warning" id="standButton">stand</button>
                            </div>
                        </div>
                        <br>
                        <div id="player"> </div>
                        <br>
                </div>

                <div class="col-3"> 
                
                </div>
        </div>
    </div>
</div>

<script>

$(".card").last();

var cardvalue = $("#deck .card").last();

console.log(cardvalue.data('suit'));
console.log(cardvalue.data('value'));

cardvalue.animate({ 'left': '484', 'top' : '412.5' }, 700, function(){
    cardvalue.detach().appendTo('#player').removeAttr('style');

    cardvalue = $("#deck .card").last();
    cardvalue.animate({ 'left': '484', 'top' : '412.5' }, 700, function(){
        cardvalue.detach().appendTo('#player').removeAttr('style');


        cardvalue = $("#deck .card").last();
        cardvalue.animate({ 'left': '484', 'top' : '32' }, 700, function(){
            cardvalue.detach().appendTo('#dealer').removeAttr('style');

            cardvalue = $("#deck .card").last();
            cardvalue.animate({ 'left': '484', 'top' : '32' }, 700, function(){
                cardvalue.detach().appendTo('#dealer').removeAttr('style');

                });
            });
    });
});

console.log($('#player').offset());

var position = $('#player').offset();

console.log(position.top, position.left);


$("#hitButton").click(function(){
    
    var cardvalue = $("#deck .card").last();


    cardvalue.animate({ 'left': '484', 'top' : '412.5' }, 700, function(){
    cardvalue.detach().appendTo('#player').removeAttr('style');

});
});


$("#standButton").click(function(){
    
    cardvalue = $("#deck .card").last();

    cardvalue.animate({ 'left': '484', 'top' : '32' }, 700, function(){
    cardvalue.detach().appendTo('#dealer').removeAttr('style');


});
});



</script>
    
</body>
</html>