<?php
    class RockPaperScissors {

      function playGame($player1, $player2) {
          if ($player1 == $player2) {
            return "Tie";
          } elseif ((($player1 - $player2 + 3) % 3 ) == 1) {
            return "Player 1 Wins";
          } else {
            return "Player 2 Wins";
          }
      }
    }
 ?>
