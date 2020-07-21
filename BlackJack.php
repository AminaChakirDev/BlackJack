<?php


class BlackJack
{

    public function getScores(array $cards) {
        $str = implode(" ", $cards);
        $str = str_replace("J", "10", $str);
        $str = str_replace("Q", "10", $str);
        $str = str_replace("K", "10", $str);
        $cards = explode(" ", $str);
        $score = array_sum($cards);
        if ($score<11) {
            $str = implode(" ", $cards);
            $str = str_replace("A", "11", $str);
            $cards = explode(" ", $str);
        }
        else {
            $str = implode(" ", $cards);
            $str = str_replace("A", "1", $str);
            $cards = explode(" ", $str);
        }
        $score = array_sum($cards);
        return $score;
    }

    public function play(array $cardsDesk)
    {
        $player = $cardsDesk[0];
        $bank = $cardsDesk[1];
        if ($this->getScores($player) > $this->getScores($bank) and $this->getScores($player) < 21) {
            return "player";
        } elseif ($this->getScores($bank) > $this->getScores($player) and $this->getScores($bank) < 21) {
            return "bank";
        } else {
            return "par";
        }
    }
}

