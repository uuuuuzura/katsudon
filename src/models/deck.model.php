<?php

class Deck
{
    protected int $id;
    protected string $label;
    protected string $slug;
    protected string $color;

    protected array $collectedCards;
    public function __construct(int $id, string $slug, string $label, string $color)
    {
        $this->id = $id;
        $this->slug = $slug;
        $this->label = $label;
        $this->color = $color;
    }

    public function getCollectedCards($db)
    {
        $cards = $db->query("SELECT number FROM cards WHERE deckId = :id AND status = 'collecting'", ['id' => $this->id])->fetchAll();
        $this->collectedCards = array_map(function ($card) {
            return $card['number'];
        }, $cards);
    }

    public function renderDeck()
    {
        echo "<div class=\"deck\">";
        echo "<h2 class=\"deck__header deck__header--" . $this->color . "\">" . $this->label . "</h2>";
        echo "<table>";
        for ($i = 1; $i <= 20; $i++) {
            $cardNumber = in_array($i, $this->collectedCards) ? sprintf('%02d', $i) : '00';

            if ($i % 5 === 1) {
                echo "<tr>";
            }
            echo "<td>";
            echo "<img src=\"img/cards/" . $this->slug . $cardNumber . ".gif\" />";
            echo "</td>";
            if ($i % 5 === 0) {
                echo "</tr>";
            }
        }
        echo "</table>";
        echo "</div>";
    }
}