<?php

        function create_deck() {
            return [
                2   =>  2,
                3   =>  3,
                4   =>  4,
                5   =>  5,
                6   =>  6,
                7   =>  7,
                8   =>  8,
                9   =>  9,
                10  =>  10,
                'J' =>  10,
                'Q' =>  10,
                'K' =>  10,
                'A' =>  11
            ];
        }

/**
 * deals cards from the deck
 *
 * @param $deck
 * @return mixed
 */
        function deal($deck) {
            return $deck[array_rand($deck)];
        }

        function calculate($card1, $card2) {
            return $card1 + $card2;
        }

        function winner($score1, $score2) {
            if ($score1 > $score2) {
                echo "You win - Hooray for you";

            } else {
                echo "Dealer wins - Someone can't count... can they?";
            }
        }

        function play_game() {
            $deck = create_deck();
            $card1 = deal($deck);
            $card2 = deal($deck);
            $card3 = deal($deck);
            $card4 = deal($deck);
            $score1 = calculate($card1, $card3);
            $score2 = calculate($card2, $card4);
            winner($score1, $score2);
        }

        play_game();
