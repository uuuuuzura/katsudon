<?php

class Deck
{
    protected string $label;
    protected string $slug;
    protected string $color;
    public function __construct(string $slug, string $label, string $color)
    {
        $this->slug = $slug;
        $this->label = $label;
        $this->color = $color;
    }

    public function renderDeck()
    {
        echo "<div class=\"deck\">";
        echo "<h2 class=\"deck__header deck__header--" . $this->color . "\">" . $this->label . "</h2>";
        echo "<table>";
        for ($i = 1; $i <= 20; $i++) {
            if ($i % 5 === 1) {
                echo "<tr>";
            }
            echo "<td>";
            echo "<img src=\"..\..\img\cards\\" . $this->slug . "00.gif\" />";
            echo "</td>";
            if ($i % 5 === 0) {
                echo "</tr>";
            }
        }
        echo "</table>";
        echo "</div>";
    }
}