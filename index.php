<?php

namespace blackjack;

class card
{
    // properties of each particular card
    public $suit = null; // hearts, spades, clubs, diamonds
    public $value = null; // 2, 3, 4, 5, 6, 7, 8, 9, 10, J, Q, K, A
    public $blackjack_value = null; // 1-11

    public function __construct($suit, $value)
    {
        $this->suit = $suit;
        $this->value = $value;
    }

    public function __toString()
    {
        return '<div class="card" data-suit="'.$this->suit.'" data-value="'.$this->value.'"></div>';
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blackjack</title>
    <link rel="stylesheet" href="blackjack.css">
</head>

<script>


$(selector).data('my_value')

</script>


<body>

    <div id="ace-spades" data-suit="spade" data-value="A"> 
        <div class="top-left">A</div>

        <div id="icon">
            <img src="images/spades.png" alt="">
        </div>

        <div class="bottom-right">A</div>
    </div>

    <div id="king-spades" data-suit="spade" data-value="K">
            <div class="top-left">K</div>
    
            <div id="icon">
                <img src="images/face-king-spade.png" alt="">
            </div>
    
            <div class="bottom-right">K</div>
    </div>

    
    <div id="queen-spades" data-suit="spade" data-value="Q">
            <div class="top-left">Q</div>
    
            <div id="icon">
                <img src="images/face-queen-spade.png" alt="">
            </div>
    
            <div class="bottom-right">Q</div>
    </div>

    <div id="jack-spades" data-suit="spade" data-value="J">
            <div class="top-left">J</div>
    
            <div id="icon">
                <img src="images/face-jack-spade.png" alt="">
            </div>
    
            <div class="bottom-right">J</div>
    </div>

    <div id="ten-spades" data-suit="spade" data-value="10">
            <div class="top-left">10</div>
    
            <div id="icon">
                <img src="images/spades.png" alt="">
            </div>
    
            <div class="bottom-right">10</div>
    </div>

    <div id="nine-spades" data-suit="spade" data-value="K">
            <div class="top-left">9</div>
    
            <div id="icon">
                <img src="images/spades.png" alt="">
            </div>
    
            <div class="bottom-right">9</div>
    </div>

    <div id="eight-spades" data-suit="spade" data-value="8">
            <div class="top-left">8</div>
    
            <div id="icon">
                <img src="images/spades.png" alt="">
            </div>
    
            <div class="bottom-right">8</div>
    </div>

    <div id="seven-spades" data-suit="spade" data-value="7">
            <div class="top-left">7</div>
    
            <div id="icon">
                <img src="images/spades.png" alt="">
            </div>
    
            <div class="bottom-right">7</div>
    </div>

    
    <div id="six-spades" data-suit="spade" data-value="6">
            <div class="top-left">6</div>
    
            <div id="icon">
                <img src="images/spades.png" alt="">
            </div>
    
            <div class="bottom-right">6</div>
    </div>

    <div id="five-spades" data-suit="spade" data-value="5">
            <div class="top-left">5</div>
    
            <div id="icon">
                <img src="images/spades.png" alt="">
            </div>
    
            <div class="bottom-right">5</div>
    </div>

    <div id="four-spades" data-suit="spade" data-value="4">
            <div class="top-left">4</div>
    
            <div id="icon">
                <img src="images/spades.png" alt="">
            </div>
    
            <div class="bottom-right">4</div>
    </div>

    <div id="three-spades" data-suit="spade" data-value="3">
            <div class="top-left">3</div>
    
            <div id="icon">
                <img src="images/spades.png" alt="">
            </div>
    
            <div class="bottom-right">3</div>
    </div>

    <div id="two-spades" data-suit="spade" data-value="2">
            <div class="top-left">2</div>
    
            <div id="icon">
                <img src="images/spades.png" alt="">
            </div>
    
            <div class="bottom-right">2</div>
    </div><br>


    <!-- HEARTS ******************************************************************** -->

    <div id="ace-hearts" data-suit="heart" data-value="A">
            <div class="top-left">A</div>
    
            <div id="icon">
                <img src="images/hearts.png" alt="">
            </div>
    
            <div class="bottom-right">A</div>
        </div>
    
        <div id="king-hearts" data-suit="heart" data-value="K">
                <div class="top-left">K</div>
        
                <div id="icon">
                    <img src="images/face-king-heart.png" alt="">
                </div>
        
                <div class="bottom-right">K</div>
        </div>
    
        
        <div id="queen-hearts" data-suit="heart" data-value="Q">
                <div class="top-left">Q</div>
        
                <div id="icon">
                    <img src="images/face-queen-heart.png" alt="">
                </div>
        
                <div class="bottom-right">Q</div>
        </div>
    
        <div id="jack-hearts" data-suit="heart" data-value="J">
                <div class="top-left">J</div>
        
                <div id="icon">
                    <img src="images/face-jack-heart.png" alt="">
                </div>
        
                <div class="bottom-right">J</div>
        </div>
    
        <div id="ten-hearts" data-suit="heart" data-value="10">
                <div class="top-left">10</div>
        
                <div id="icon">
                    <img src="images/hearts.png" alt="">
                </div>
        
                <div class="bottom-right">10</div>
        </div>
    
        <div id="nine-hearts" data-suit="heart" data-value="9 ">
                <div class="top-left">9</div>
        
                <div id="icon">
                    <img src="images/hearts.png" alt="">
                </div>
        
                <div class="bottom-right">9</div>
        </div>
    
        <div id="eight-hearts" data-suit="heart" data-value="8">
                <div class="top-left">8</div>
        
                <div id="icon">
                    <img src="images/hearts.png" alt="">
                </div>
        
                <div class="bottom-right">8</div>
        </div>
    
        <div id="seven-hearts" data-suit="heart" data-value="7">
                <div class="top-left">7</div>
        
                <div id="icon">
                    <img src="images/hearts.png" alt="">
                </div>
        
                <div class="bottom-right">7</div>
        </div>
    
        
        <div id="six-hearts" data-suit="heart" data-value="6">
                <div class="top-left">6</div>
        
                <div id="icon">
                    <img src="images/hearts.png" alt="">
                </div>
        
                <div class="bottom-right">6</div>
        </div>
    
        <div id="five-hearts" data-suit="heart" data-value="5">
                <div class="top-left">5</div>
        
                <div id="icon">
                    <img src="images/hearts.png" alt="">
                </div>
        
                <div class="bottom-right">5</div>
        </div>
    
        <div id="four-hearts" data-suit="heart" data-value="4">
                <div class="top-left">4</div>
        
                <div id="icon">
                    <img src="images/hearts.png" alt="">
                </div>
        
                <div class="bottom-right">4</div>
        </div>
    
        <div id="three-hearts" data-suit="heart" data-value="3">
                <div class="top-left">3</div>
        
                <div id="icon">
                    <img src="images/hearts.png" alt="">
                </div>
        
                <div class="bottom-right">3</div>
        </div>
    
        <div id="two-hearts" data-suit="heart" data-value="2">
                <div class="top-left">2</div>
        
                <div id="icon">
                    <img src="images/hearts.png" alt="">
                </div>
        
                <div class="bottom-right">2</div>
        </div><br>

 <!-- DIAMONDS ******************************************************************** -->

    <div id="ace-diamonds" data-suit="diamond" data-value="A">
            <div class="top-left">A</div>
    
            <div id="icon">
                <img src="images/diamonds.png" alt="">
            </div>
    
            <div class="bottom-right">A</div>
        </div>
    
        <div id="king-diamonds" data-suit="diamond" data-value="K">
                <div class="top-left">K</div>
        
                <div id="icon">
                    <img src="images/face-king-diamond.png" alt="">
                </div>
        
                <div class="bottom-right">K</div>
        </div>
    
        
        <div id="queen-diamonds" data-suit="diamond" data-value="Q">
                <div class="top-left">Q</div>
        
                <div id="icon">
                    <img src="images/face-queen-diamond.png" alt="">
                </div>
        
                <div class="bottom-right">Q</div>
        </div>
    
        <div id="jack-diamonds" data-suit="diamond" data-value="J">
                <div class="top-left">J</div>
        
                <div id="icon">
                    <img src="images/face-jack-diamond.png" alt="">
                </div>
        
                <div class="bottom-right">J</div>
        </div>
    
        <div id="ten-diamonds" data-suit="diamond" data-value="10">
                <div class="top-left">10</div>
        
                <div id="icon">
                    <img src="images/diamonds.png" alt="">
                </div>
        
                <div class="bottom-right">10</div>
        </div>
    
        <div id="nine-diamonds" data-suit="diamond" data-value="9">
                <div class="top-left">9</div>
        
                <div id="icon">
                    <img src="images/diamonds.png" alt="">
                </div>
        
                <div class="bottom-right">9</div>
        </div>
    
        <div id="eight-diamonds" data-suit="diamond" data-value="8">
                <div class="top-left">8</div>
        
                <div id="icon">
                    <img src="images/diamonds.png" alt="">
                </div>
        
                <div class="bottom-right">8</div>
        </div>
    
        <div id="seven-diamonds" data-suit="diamond" data-value="7">
                <div class="top-left">7</div>
        
                <div id="icon">
                    <img src="images/diamonds.png" alt="">
                </div>
        
                <div class="bottom-right">7</div>
        </div>
    
        
        <div id="six-diamonds" data-suit="diamond" data-value="6">
                <div class="top-left">6</div>
        
                <div id="icon">
                    <img src="images/diamonds.png" alt="">
                </div>
        
                <div class="bottom-right">6</div>
        </div>
    
        <div id="five-diamonds" data-suit="diamond" data-value="5">
                <div class="top-left">5</div>
        
                <div id="icon">
                    <img src="images/diamonds.png" alt="">
                </div>
        
                <div class="bottom-right">5</div>
        </div>
    
        <div id="four-diamonds" data-suit="diamond" data-value="4">
                <div class="top-left">4</div>
        
                <div id="icon">
                    <img src="images/diamonds.png" alt="">
                </div>
        
                <div class="bottom-right">4</div>
        </div>
    
        <div id="three-diamonds" data-suit="diamond" data-value="3">
                <div class="top-left">3</div>
        
                <div id="icon">
                    <img src="images/diamonds.png" alt="">
                </div>
        
                <div class="bottom-right">3</div>
        </div>
    
        <div id="two-diamonds" data-suit="diamond" data-value="2">
                <div class="top-left">2</div>
        
                <div id="icon">
                    <img src="images/diamonds.png" alt="">
                </div>
        
                <div class="bottom-right">2</div>
        </div><br>

        <!-- CLUBS ******************************************************************** -->

    <div id="ace-clubs" data-suit="club" data-value="A">
            <div class="top-left">A</div>
    
            <div id="icon">
                <img src="images/clubs.png" alt="">
            </div>
    
            <div class="bottom-right">A</div>
        </div>
    
        <div id="king-clubs" data-suit="club" data-value="K">
                <div class="top-left">K</div>
        
                <div id="icon">
                    <img src="images/face-king-club.png" alt="">
                </div>
        
                <div class="bottom-right">K</div>
        </div>
    
        
        <div id="queen-clubs" data-suit="club" data-value="Q">
                <div class="top-left">Q</div>
        
                <div id="icon">
                    <img src="images/face-queen-club.png" alt="">
                </div>
        
                <div class="bottom-right">Q</div>
        </div>
    
        <div id="jack-clubs" data-suit="club" data-value="J">
                <div class="top-left">J</div>
        
                <div id="icon">
                    <img src="images/face-jack-club.png" alt="">
                </div>
        
                <div class="bottom-right">J</div>
        </div>
    
        <div id="ten-clubs" data-suit="club" data-value="10">
                <div class="top-left">10</div>
        
                <div id="icon">
                    <img src="images/clubs.png" alt="">
                </div>
        
                <div class="bottom-right">10</div>
        </div>
    
        <div id="nine-clubs" data-suit="club" data-value="9">
                <div class="top-left">9</div>
        
                <div id="icon">
                    <img src="images/clubs.png" alt="">
                </div>
        
                <div class="bottom-right">9</div>
        </div>
    
        <div id="eight-clubs" data-suit="club" data-value="8">
                <div class="top-left">8</div>
        
                <div id="icon">
                    <img src="images/clubs.png" alt="">
                </div>
        
                <div class="bottom-right">8</div>
        </div>
    
        <div id="seven-clubs" data-suit="club" data-value="7">
                <div class="top-left">7</div>
        
                <div id="icon">
                    <img src="images/clubs.png" alt="">
                </div>
        
                <div class="bottom-right">7</div>
        </div>
    
        
        <div id="six-clubs" data-suit="club" data-value="6">
                <div class="top-left">6</div>
        
                <div id="icon">
                    <img src="images/clubs.png" alt="">
                </div>
        
                <div class="bottom-right">6</div>
        </div>
    
        <div id="five-clubs" data-suit="club" data-value="5">
                <div class="top-left">5</div>
        
                <div id="icon">
                    <img src="images/clubs.png" alt="">
                </div>
        
                <div class="bottom-right">5</div>
        </div>
    
        <div id="four-clubs" data-suit="club" data-value="4">
                <div class="top-left">4</div>
        
                <div id="icon">
                    <img src="images/clubs.png" alt="">
                </div>
        
                <div class="bottom-right">4</div>
        </div>
    
        <div id="three-clubs" data-suit="club" data-value="3">
                <div class="top-left">3</div>
        
                <div id="icon">
                    <img src="images/clubs.png" alt="">
                </div>
        
                <div class="bottom-right">3</div>
        </div>
    
        <div id="two-clubs" data-suit="club" data-value="2">
                <div class="top-left">2</div>
        
                <div id="icon">
                    <img src="images/clubs.png" alt="">
                </div>
        
                <div class="bottom-right">2</div>
        </div><br>


    
</body>
</html>